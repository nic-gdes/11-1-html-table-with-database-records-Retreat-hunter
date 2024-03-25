<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>html Products</h1>
</header>
<main>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="2">Products</th>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo '$' . $product['price']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>