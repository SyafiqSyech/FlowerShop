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

                var successAlert = document.getElementById("successAlert");
                if (successAlert) {
                    $("#successAlert").removeClass('d-none');
                }

                setTimeout(function () {
                    window.location.href = "/show/" + herbId;
                }, 2000);
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
            },
        });
    } else {
        window.location.href = "/login";
    }
}
