<?php
    function pdo(){
        $db_host = db_host;
        $db_user = db_user;
        $db_pass = db_pass;
        $db_db = db_db;

        try{
            return $pdo = new PDO("mysql:host={$db_host};dbname={$db_db}", $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            exit("Erro ao conectar-se ao banco de dados: ".$e->getMessage());
        }
    }

    function criaPagamento($ext, $email){
        $pdo = pdo();

        $stmt = $pdo->prepare("INSERT INTO pagamentos (external_reference, email) VALUES(:ext, :email)");
        $stmt->execute([':ext' => $ext, ':email' => $email]);
        $total = $stmt->rowCount();
    }

    function verificaPagamento($ext, $email){
        $pdo = pdo();

        $stmt = $pdo->prepare("SELECT * FROM pagamentos WHERE external_reference = :ext AND status = 0");
        $stmt->execute([':ext' => $ext]);
        
        if($stmt->rowCount() == 1){
            atualizaPagamento($ext);
        }
    }

    function atualizaPagamento($ext){
        $pdo = pdo();

        $stmt = $pdo->prepare("UPDATE pagamentos SET status = 1 WHERE external_reference = :ext");
        $stmt->execute([':ext' => $ext]);
        
        if($stmt->rowCount() > 0){
            echo "Status alterado como pago!";
        }
    }
?>