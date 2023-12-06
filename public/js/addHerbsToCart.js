function addToCart(element) {
    var herbsId = element.getAttribute('data-herb-id');
    var herbImage = element.getAttribute('data-herb-image').trim();
    var herbName = element.getAttribute('data-herb-name').trim();
    var herbPrice = element.getAttribute('data-herb-price').trim();

    var cartItem = {
        herbsId: herbsId,
        herbImage: herbImage,
        herbName: herbName,
        herbPrice: herbPrice
    };

    var existingCartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    let cartItems = JSON.parse(localStorage.getItem('cartItems'));
    console.log("Cart items in local storage:", existingCartItems);

    existingCartItems.push(cartItem);

    localStorage.setItem('cartItems', JSON.stringify(existingCartItems));

    //update cookie dengan cart Items up to date
    document.cookie = "cartItems=" + encodeURIComponent(JSON.stringify(existingCartItems));
}