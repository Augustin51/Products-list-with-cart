<?php foreach ($products as $product): ?>
<ul>
    <li><?php echo $product["name"] ?? ""; ?></li>
    <li><?php echo $product["price"] ?? ""; ?></li>
    <li><?php echo $product["description"] ?? ""; ?></li>
</ul>
<?php endforeach; ?>