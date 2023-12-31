<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorites;
use App\Models\Herbs;
use Illuminate\Support\Facades\Hash;
use App\Models\Carts;
use App\Models\TransactionDetail;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AccountController extends Controller
{
    //
    public function updateAccount(Request $request)
    {
        // dd($request->all());

        $userId = Auth::id();

        $rules = [
            'firstName' => 'required|max: 255',
            'lastName' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'min: 6|max: 255',
            'confirm-password' => 'same:password',
            'phoneNumber' => 'numeric|digits:12',
            'DOB' => 'date|before_or_equal:today',
            // 'gender' => 'in: Male,Female',
            'passwordConfirm' => 'required'
        ];

        if ($request->input('email') === auth()->user()->email) {
            unset($rules['email']);
        } else {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if (!$request->filled('phoneNumber')) {
            unset($rules['phoneNumber']);
        }

        if (!$request->filled('DOB')) {
            unset($rules['DOB']);
        }

        if (!$request->filled('password')) {
            unset($rules['password']);
            unset($rules['confirm-password']);
        }

        $validateData = $request->validate($rules, [
            'firstName.required' => 'Please enter your first name.',
            'firstName.max' => 'First name must not exceed 255 characters.',

            'lastName.required' => 'Please enter your last name.',
            'lastName.max' => 'Last name must not exceed 255 characters.',

            'email.required' => 'Please enter an email',
            'email.email' => 'Email must be in a valid format.',
            'email.unique' => 'This email is already taken.',

            'password.min' => 'Password minimum is 6 characters.',
            'password.max' => 'Password must not exceed 255 characters.',

            'confirm-password.same' => 'Confirm password does not match with password.',

            'phoneNumber.numeric' => 'Phone Number must be numeric.',
            'phoneNumber.digits' => 'Phone Number must not exceed 12 digits.',

            'DOB.date' => 'DOB must be in date format.',
            'DOB.before_or_equal' => 'DOB can\'t be in the future.',

            // 'gender.in' => 'Gender must be either Male or Female.',

            'passwordConfirm.required' => 'You must enter Old Password to proceed.'
        ]);

        if (!Hash::check($request->passwordConfirm, Auth::guard('web')->user()->password)) {
            return redirect()->back()->with('error', 'Update Failed! Wrong Password.');
        }

        $validateData['gender'] = $request->input('gender');
        $request->offsetUnset('gender');
        User::findOrFail($userId)->update($validateData);

        // $user = User::findOrFail($userId);
        // $user->update($validateData);

        return redirect('/account')->with('success', 'Update Success!');
    }
    public function showFavoriteHerbsAndHistory()
    {
        $userId = Auth::id();

        // Show Favorite
        $favorites = Favorites::where('userId', $userId)
            ->join('herbs', 'favorites.herbsId', '=', 'herbs.herbsId')
            ->select('herbs.herbsId', 'herbs.herbsImage', 'herbs.herbName', 'herbs.herbPrice')
            ->get();

        $transactions = Transactions::where('userId', $userId)->distinct()->get();

        $groupedData = TransactionDetail::join('herbs', 'transactionsdetail.herbsId', '=', 'herbs.herbsId')
            ->join('transactions', 'transactionsdetail.transId', '=', 'transactions.transId')
            ->where('transactions.userId', $userId)
            ->select('transactionsdetail.*', 'herbs.herbName')
            ->get()
            ->groupBy('transId');

        // dd($groupedData);
        // $groupedData = TransactionDetail::all()->groupBy('transId');

        return view('main.account', [
            'favorites' => $favorites,
            'transactions' => $transactions,
            'groupedData' => $groupedData
        ]);
    }

    public function storeToFavorites($id, Request $request)
    {
        $userId = Auth::id();

        $herbs = $request->input('herbsId');
        // dump($herbs);

        $cartsId = $request->input('cartsId');

        $favoritesId = $request->input('favoritesId');

        $favorite = Favorites::where('userId', $userId)
            ->where('herbsId', $herbs)
            ->first();


        if ($favorite) {
            $favorite->delete();
            // return redirect()->route('show', ['id' => $id])->with('status', 'unfavorited');
            $isFavoriteEmpty = Favorites::where('userId', $userId)->count() == 0;

            return response()->json(['status' => 'unfavorited', 'isFavoriteEmpty' => $isFavoriteEmpty]);
        } else {
            Favorites::create([
                'userId' => $userId,
                'herbsId' => $herbs,
            ]);
            return response()->json(['status' => 'favorited']);
        }
    }

    public function deleteAccount()
    {
        $accountToDeleteID = Auth::id();
        User::findOrFail($accountToDeleteID)->delete();

        return redirect('/');
    }

    public function removeFromFavorites(Request $request)
    {
        $userId = Auth::id();
        $herbsId = $request->input('herbsId');

        $favorite = Favorites::where('userId', $userId)
            ->where('herbsId', $herbsId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $isFavoriteEmpty = Favorites::where('userId', $userId)->count() == 0;

            return response()->json(['status' => 'unfavorited', 'isFavoriteEmpty' => $isFavoriteEmpty]);
        }

        return response()->json(['status' => 'error', 'message' => 'Favorite not found']);
    }
}
