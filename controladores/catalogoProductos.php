<?php

require "../config/conexion.php";
require "../modelos/Productos.php";
require "../modelos/Categorias.php";

if($_POST["action"] == "get_limited_products") {
    $limit = $_POST["limit"];

    $res = Productos::getLimitProducts($limit);

    echo json_encode($res);
}

if($_POST["action"] == "get_product_by_id") {
    $id = $_POST["id"];
    $res = Productos::getProductoById($id);
    echo json_encode($res);
}

if($_POST["action"] == "get_all_products") {
    $res = Productos::getAllProducts();
    echo json_encode($res);
}

if($_POST["action"] == "get_all_categorias") {
    $res = Categorias::getAllCategorias();
    echo json_encode($res);
}

?>