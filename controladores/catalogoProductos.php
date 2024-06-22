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

if($_POST["action"] == "comprar") {
    $productos = json_decode($_POST["productos"]);
    foreach ($productos as $producto) {
        Productos::comprar($producto);
    }
    
    $header = 'From: correoEmpresarial@gmail.com'." \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $message = "Este mensaje fue enviado por: Nombre empresa \r\n";
    $message .= "Mensaje: Los productos estan siendo empaquetados. Pronto le aremos llegar el número de guia \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());
    
    $para = 'duckdj1@gmail.com';
    $asunto = 'Compra realizada';
    
    mail($para, $asunto, utf8_decode($message), $header);

    // $res = Categorias::getAllCategorias();
    // echo json_encode($res);
}

?>