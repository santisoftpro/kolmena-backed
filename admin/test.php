<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wertyu</title>
</head>
<body>
    
<div>
    <table border="1">
        <th>
            <td>ProductName</td>
            <td>Category</td>
            <td>Power</td>
            <td>Price</td>
            <td>description</td>
            <td>Images</td>
        </th>
        <tr id="productList">
            
        </tr>
    </table>
   
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'assets/php/fetchProduct.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle successful response
                if (response.success) {
                    // Loop through the fetched products and display them
                    response.products.forEach(function(product) {
                        $('#productList').append('<td>' + product.productName + '</td>');
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
</script>

</body>
</html>