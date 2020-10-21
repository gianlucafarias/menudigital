<?php
// SDK de Mercado Pago
include("vendor/autoload.php");

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-468983159145204-091920-bf7c3398fd2be9267c865b69b9dbcad6-331260267');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>