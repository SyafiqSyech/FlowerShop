function addToCart(element) {
    var herbsId = element.getAttribute('data-herb-id');
    var herbImage = element.getAttribute('data-herb-image');
    var herbName = element.getAttribute('data-herb-name');
    var herbPrice = element.getAttribute('data-herb-price');

    // Create an object with the item details
    var cartItem = {
        herbsId: herbsId,
        herbImage: herbImage,
        herbName: herbName,
        herbPrice: herbPrice
    };

    // Retrieve the existing cart items from local storage
    var existingCartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Add the new item to the cart
    existingCartItems.push(cartItem);

    // Save the updated cart items back to local storage
    localStorage.setItem('cartItems', JSON.stringify(existingCartItems));

    // Now you can display the cart items in your cart view
    // You can retrieve them from local storage and update your cart display logic
}