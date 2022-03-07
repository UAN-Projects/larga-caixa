<?php
    require('app/libraries/nusoap/nusoap.php');
    
    function conexao() {
        return new PDO('mysql:host=127.0.0.1:3307;dbname=larga_caixa', "edvaldo", "vander");
    }

    function files($token) {
        $conn = conexao();
        $stmt = $conn->prepare(
          "SELECT ficheiros.id, ficheiros.descricao, ficheiros.preco, ficheiros.ficheiro, ficheiros.created_at
          from ficheiros 
          join users on ficheiros.user_id = users.id
          WHERE users.token = :token");
        $stmt->execute(array('token' => $token));
        $ficheiros = $stmt->fetchAll();

        $stmt2 = $conn->prepare(
            "SELECT ficheiros.id, ficheiros.descricao, ficheiros.preco, ficheiros.ficheiro, ficheiros.created_at
            from ficheiros 
            join users_ficheiros on ficheiros.id = users_ficheiros.ficheiro_id
            join users on users_ficheiros.user_id = users.id
            WHERE users.token = :token");
          $stmt2->execute(array('token' => $token));
          $ficheiros2 = $stmt2->fetchAll();

          $stmt3 = $conn->prepare(
            "SELECT ficheiros.id, ficheiros.descricao, ficheiros.preco, ficheiros.ficheiro, ficheiros.created_at from ficheiros");
          $stmt3->execute();
          $ficheiros3 = $stmt3->fetchAll();

        $files = [];
        foreach ($ficheiros as $ficheiro) {
            foreach ($ficheiros2 as $ficheiro2) {
                if($ficheiro2['id'] != $ficheiro['id'] ) {
                    array_push($files,array(
                        'if' => $ficheiro['id'], 
                        'descricao' => $ficheiro['descricao'], 
                        'preco' => $ficheiro['preco'],
                        'ficheiro' => "uploads/ficheiros/".$ficheiro['ficheiro'],
                        'link' => "ficheiro/".$ficheiro['id'],
                        'data' => $ficheiro['created_at'],
                    ));
                }
            }   
        }

        foreach ($ficheiros2 as $ficheiro2) {
            array_push($files,array(
                'id' => $ficheiro2['id'], 
                'descricao' => $ficheiro2['descricao'], 
                'preco' => $ficheiro2['preco'],
                'ficheiro' => "uploads/ficheiros/".$ficheiro2['ficheiro'],
                'link' => "ficheiro/".$ficheiro2['id'],
                'data' => $ficheiro2['created_at'],
            ));
        }

        print_r($files);

        $allFiles = [];
        foreach ($ficheiros3 as $ficheiro3) {
            $access = false;
            foreach ($files as $file) {
                if($ficheiro3['id'] == $file['id'] ) {
                    $access = true;
                    print_r($access);
                }
            }   
            array_push($allFiles,array(
                'descricao' => $ficheiro3['descricao'], 
                'preco' => $ficheiro3['preco'],
                'ficheiro' => "uploads/ficheiros/".$ficheiro3['ficheiro'],
                'link' => "ficheiro/".$ficheiro3['id'],
                'data' => $ficheiro3['created_at'],
            ));
            // $access = false;
        }
        
        $return = array();
        foreach ($allFiles as $file) {
            $return = array_merge($return, 
                array(
                    array( 
                        'descricao' => $file['descricao'], 
                        'preco' => $file['preco'],
                        'ficheiro' => $file['ficheiro'],
                        'link' => $file['link'],
                        'data' => $file['data'],
                    ),
                )
            );
        }
        // return $return;
        print_r($return);
    }
    



    // $server->service(file_get_contents("php://input"));
    files('MjAyMl8wMl8xOV8xMl8xOF80Nw==');
?>
