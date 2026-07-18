<?php
require 'data.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop — Catalog (Buoi 1)</title>
</head>
<body>
    <h1>MiniShop — Catalog (Buoi 1)</h1>

    <table border="1">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Ten</th>
                <th>Gia</th>
                <th>So luong</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['sku'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['qty']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
