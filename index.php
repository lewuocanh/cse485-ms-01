<?php
require 'data.php';

$categoryMap = [];

foreach ($categories as $category) {
    $categoryMap[$category['id']] = $category['name'];
}

$totalInventoryValue = 0;
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
                <th>Danh muc</th>
                <th>Gia</th>
                <th>So luong</th>
                <th>Thanh tien</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product): ?>
                <?php
                $lineTotal = $product['price'] * $product['qty'];
                $totalInventoryValue += $lineTotal;
                ?>

                <tr>
                    <td>
                        <?php echo htmlspecialchars($product['sku'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>

                    <td>
                        <?php
                        echo htmlspecialchars(
                            $categoryMap[$product['category_id']] ?? 'Khong xac dinh',
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>
                    </td>

                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['qty']; ?></td>
                    <td><?php echo $lineTotal; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <strong>Tong gia tri kho = <?php echo $totalInventoryValue; ?></strong>
    </p>

    <p>
        <strong>So san pham = <?php echo count($products); ?></strong>
    </p>

    <h2>Debug products</h2>

    <pre><?php var_dump($products); ?></pre>

    <!-- MS_EXPECT product_count=8 inventory_value=41380000 -->
</body>
</html>
