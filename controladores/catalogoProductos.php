<?php

require "../modelos/Productos.php";

if($_POST["action"] == "get_limited_products") {
    $limit = $_POST["limit"];

    $res = Productos::getLimitProducts($limit);

    echo json_encode($res);
}

?>