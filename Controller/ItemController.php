<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 9/27/15
 * Time: 1:21 PM
 */
include '../Service/ItemService.php';

session_start();
class ItemController
{
    function getList($category_id, $subcategory_id, $location)
    {
        $itemService = new ItemService();
        $items = $itemService->getList($category_id, $subcategory_id, $location);

        return $items;
    }
}

$itemController = new ItemController();