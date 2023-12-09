// function addToCart(element) {
//     var herbsId = element.getAttribute('data-herb-id');
//     var herbImage = element.getAttribute('data-herb-image').trim();
//     var herbName = element.getAttribute('data-herb-name').trim();
//     var herbPrice = element.getAttribute('data-herb-price').trim();

//     var cartItem = {
//         herbsId: herbsId,
//         herbImage: herbImage,
//         herbName: herbName,
//         herbPrice: herbPrice
//     };

//     var existingCartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
//     let cartItems = JSON.parse(localStorage.getItem('cartItems'));
//     console.log("Cart items in local storage:", existingCartItems);

//     existingCartItems.push(cartItem);

//     localStorage.setItem('cartItems', JSON.stringify(existingCartItems));

//     //update cookie dengan cart Items up to date
//     document.cookie = "cartItems=" + encodeURIComponent(JSON.stringify(existingCartItems));
// }

function addToCart(herbId) {
    if (window.authenticated) {
        $.ajax({
            type: "POST",
            url: "/addToCart/" + herbId,
            data: {
                _token: window.csrfToken,
                herbId: herbId,
            },
            success: function (data) {
                console.log("Success:", data);

                // Display success alert when the AJAX request is successful
                var successAlert = document.getElementById("successAlert");
                if (successAlert) {
                    $("#successAlert").removeClass('d-none');
                }

                // Redirect to the 'show' route after a short delay
                setTimeout(function () {
                    window.location.href = "/show/" + herbId;
                }, 2000); // Redirect after 2 seconds
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
            },
        });
    } else {
        window.location.href = "/login";
    }
}
