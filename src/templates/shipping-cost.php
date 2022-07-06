<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ShippingCost</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th><strong>Delivery Service</strong></th>
                    <th><strong>Price</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($shippingCost as $deliveryServiceName => $cost) {
                        echo "<tr>
                            <th>{$deliveryServiceName}</th>
                            <th>{$cost}</th>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
