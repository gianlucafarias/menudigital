<?php
    #CONFIGURAÇÕES DO BANCO DE DADOS 
        #NÃO FUNCIONA NO INFINITYFREE
        define("db_host", "localhost");
        define("db_user", "root");
        define("db_pass", "");
        define("db_db", "mp");

    #CONJFIGURAÇÕES DO MERCADOPAGO
        #-> TROCAR NOTIFICAÇÃO -> https://www.mercadopago.com.br/ipn-notifications
        #-> CREDÊNCIAIS -> https://www.mercadopago.com/mlb/account/credentials?type=basic
        #-> Detalhes: https://www.mercadopago.com.br/developers/pt/guides/payments/web-payment-checkout/configurations/
        define("client_id", "seuCLIENTID");
        define("client_secret", "seuCLIENTSECRET");
        define("access_token", "seuACESSTOKEN");

        define("notification_url", "http://suaurl.com/response.php");
?>