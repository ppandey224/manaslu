<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 9/21/15
 * Time: 9:01 PM
 */
include '../Controller/ItemController.php';
$items = $itemController->getList(1, 2, "Biratnagar");
?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Detail</th>
            <th>Date</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                foreach($items as $item){
                    echo "<td>" . $item["Id"] . "</td>";
                    echo "<td>" . $item["Title"] . "</td>";
                    echo "<td>" . $item["Detail"] . "</td>";
                    echo "<td>" . $item["Date"] . "</td>";
                    echo "<td>" . $item["Location"] . "</td>";
                }
            ?>
        </tr>
    </tbody>
</table>