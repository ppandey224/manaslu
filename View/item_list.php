<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 9/21/15
 * Time: 9:01 PM
 */
include '../Service/ItemService.php';
$items = $itemService->getList(1, 2, "Biratnagar");
?>
<table>
    <thead>
        <th>Id</th>
        <th>Title</th>
        <th>Detail</th>
        <th>Date</th>
        <th>Location</th>
    </thead>
    <tbody>
        <?php
            for($i = 0; $i < sizeof($items); $i++){
        ?>
                <tr>
                    <td><?php $items[$i]->getId(); ?></td>
                    <td><?php $items[$i]->getTitle(); ?></td>
                    <td><?php $items[$i]->getDetail(); ?></td>
                    <td><?php $items[$i]->getDate(); ?></td>
                    <td><?php $items[$i]->getLocation(); ?></td>
                </tr>
        <?php

            }
        ?>
    </tbody>
</table>