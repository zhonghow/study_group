<?php

$products = [
    ['name' => 'Product 1', 'price' => 10, 'discount' => 20],
    ['name' => 'Product 2', 'price' => 15, 'discount' => 0],
    ['name' => 'Product 3', 'price' => 20, 'discount' => 10]
];
?>
<!DOCTYPE html>
<html>

<body>

    <table style="width: 100%;">
        <tr>
            <th style="width: 50%; text-align: left;">Product</th>
            <th style="width: 50%; text-align: left;">Price</th>
        </tr>
        <?php
        foreach ($products as $product) {
            echo '<tr>';
            // Only change code below this line

            // instruction: display the product name and price in the table
            echo '<td>'.$product['name'].'</td>';

            // instruction: apply the discount to the price
            if($product['discount'] != 0) {
                echo '<td>'. $product['price'] - ($product['price'] * ($product['discount'] / 100)) .'</td>';
            } else {
                echo '<td>' . $product['price'] . '</td>';
            }


            // Only change code above this line
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>