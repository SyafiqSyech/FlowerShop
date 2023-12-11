<?php
// echo dd($items);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Transaction</h1>
    {{-- Menampilkan item di cart --}}
    @foreach ($items as $item)
        <h4>{{ $item->herbName }}</h4>
        <h4>{{ $item->herbPrice }}</h4>
    @endforeach
    <h1>{{ $totalPrice }}</h1>

    {{-- Form --}}
    <form method="POST" action="{{ route('checkOut') }}">
        @csrf
        <div class="input__form">
            <input name="userId" type="hidden" id="userId" required placeholder=" " value={{ $userId }}>
        </div>

        {!! Form::label('paymentMethod', 'Choose your payment method:') !!}
        {!! Form::select('paymentMethod', ['m1' => 'm1', 'm2' => 'm2', 'm3' => 'm3'], null, ['class' => 'input']) !!}
        @error('paymentMethod')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        {{-- <div class="input__form">
            <label for="paymentMethod">Choose your payment method:</label>
            <select class="input @error('paymentMethod') is-invalid @enderror" id="paymentMethod" name="paymentMethod"
                form="paymentMethod">
                <option value="m1">m1</option>
                <option value="m2">m2</option>
                <option value="m3">m3</option>
            </select>
            @error('paymentMethod')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        <div class="input__form">
            {!! Form::label('courier', 'Choose your courier:') !!}
            {!! Form::select('courier', ['c1' => 'c1', 'c2' => 'c2', 'c3' => 'c3'], null, ['class' => 'input']) !!}
            @error('courier')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- <div class="input__form">
            <label for="courier">Choose your courier:</label>
            <select class="input @error('courier') is-invalid @enderror" id="courier" name="courier" form="courier">
                <option value="c1">c1</option>
                <option value="c2">c2</option>
                <option value="c3">c3</option>
            </select>
            @error('courier')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        <div class="input__form">
            <input name="address" type="text" class="input @error('address') is-invalid @enderror" id="address"
                required placeholder=" " value="{{ old('address') }}">
            <label for="address" class="label">Address</label>
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input__form">
            <input name="city" type="text" class="input @error('city') is-invalid @enderror" id="city"
                required placeholder=" " value="{{ old('city') }}">
            <label for="city" class="label">City</label>
            @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input__form">
            <input name="state" type="text" class="input @error('state') is-invalid @enderror" id="state"
                required placeholder=" " value="{{ old('state') }}">
            <label for="state" class="label">State</label>
            @error('state')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input__form">
            <input name="zipcode" type="text" class="input @error('zipcode') is-invalid @enderror" id="zipcode"
                required placeholder=" " value="{{ old('zipcode') }}">
            <label for="zipcode" class="label">Zip Code</label>
            @error('zipcode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input__form">
            <input name="country" type="text" class="input @error('country') is-invalid @enderror" id="country"
                required placeholder=" " value="{{ old('country') }}">
            <label for="country" class="label">Country</label>
            @error('country')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input__form">
            <input name="totalPrice" type="hidden" id="totalPrice" required placeholder=" " value={{ $totalPrice }}>
        </div>

        <button type="submit">
            <p>Check Out</p>
        </button>
    </form>
</body>

</html>
