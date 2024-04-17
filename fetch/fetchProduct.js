
    $(document).ready(function() {
        $.ajax({
            url: 'fetch_products.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle successful response
                if (response.success) {
                    // Loop through the fetched products and display them
                    response.products.forEach(function(product) {
                        $('#productList').append('<li>' + product.productName + '</li>');
                    });
                } else {
                    $('#productList').html('<li>No products found</li>');
                }
            },
            error: function(xhr, status, error) {
                console.log("Error:", xhr.responseText);
            }
        });
    });

