<?php
    include_once("inc/includes.php");

    #Pegar os dados do MP em: https://www.mercadopago.com/mlb/account/credentials?type=basic e colocar abaixo
    MercadoPago\SDK::setClientId(client_id);
    MercadoPago\SDK::setClientSecret(client_secret);

    $preference = new MercadoPago\Preference();
    
    $item = new MercadoPago\Item();
    $item->id = "00001";
    $item->title = "Bola de futebol"; 
    $item->quantity = 1;
    $item->unit_price = $_POST['valor'];
    
    $preference->items = array($item);

    $ext = rand(1, 9999999999999);

    $preference->external_reference = $ext;

    $preference->back_urls = ['success' => 'https://google.com.br', 'pending' => "#", "failure" => "#"];

    $preference->notification_url = notification_url;
    
    $preference->save(); 

    criaPagamento($ext, $_POST['email']);
    
    echo $preference->init_point;

?>