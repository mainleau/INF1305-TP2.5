<?php

$categories = array(
    [
        'name' => 'Props',
        'products' => []
    ],
    [
        'name' => 'Costumes',
        'products' => []
    ],
    [
        'name' => 'Special Effects',
        'products' => []
    ],
    [
        'name' => 'Masks',
        'products' => []
    ]
);

$rawProducts = file_get_contents('./assets/data/ProductList');

foreach($categories as $index => &$category) {

    $categoryStart = strpos($rawProducts, $category['name']);
    $categoryEnd = strpos($rawProducts, $categories[$index + 1]['name']);
    if($categoryEnd == 0) $categoryEnd = strlen($rawProducts);
    $categoryLength = $categoryEnd - $categoryStart - 1;
    $offset = strlen($category['name']);
    $categoryProducts = substr($rawProducts, $categoryStart + $offset, $categoryLength - $offset);
    $productList = explode("\n", $categoryProducts);
    
    foreach($productList as &$product) {

        [$name, $price] = explode('$', $product);
        $category['products'][] = array(
            'name' => $name,
            'price' => '$'.$price
        );
    }
}
?>

<table>
    <caption>Product List</caption>
    <thead>
        <td>Catégories</td>
        <td>Description</td>
        <td>Prix</td>
    </thead>
    <tbody>
        <?php foreach ($categories as &$category): ?>
            <?php foreach ($category['products'] as $index => $product): ?>
            <tr>
                <th><?=$index == 0 ? $category['name'] : '&nbsp;' ?></th>
                <td><?=$product['name']?></td>
                <td><?=$product['price']?></td>
            </tr>
            <?php endforeach; ?>       
            <?php endforeach; ?>       
    </tbody>
</table>