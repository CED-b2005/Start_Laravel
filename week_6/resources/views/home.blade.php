<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel API Example</title>
</head>
<body>
    <h1>Product List</h1>
    <div id="product-list">

    </div>
    <script>
        fetch('http://127.0.0.1:8000/api/data')  
            .then(response => response.json())
            .then(data => {
                const productList = document.getElementById('product-list');
                const products = data.data; 

                let htmlContent = '<ul>';
                products.forEach(product => {
                    htmlContent += `
                        <li>
                            <strong>${product.name}</strong><br>
                            Price: $${product.price} <br>
                            Category: ${product.category}
                        </li>
                    `;
                });
                htmlContent += '</ul>';

                productList.innerHTML = htmlContent;
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>