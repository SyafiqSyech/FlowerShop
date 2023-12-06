<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>
    
    <script>
        let cart = JSON.parse(localStorage.cartItems)

        cart.forEach((n) => {
            var img = document.createElement('img')
            var name = document.createElement('p')
            var price = document.createElement('p')
            var box = document.createElement('div')
            img.src = n.herbImage
            name.innerHTML = n.herbName
            price.innerHTML = n.herbPrice
            box.append(img, name, price)
            document.body.appendChild(box)
            console.log(img, name, price)
        })
    </script>
</body>

</html>
