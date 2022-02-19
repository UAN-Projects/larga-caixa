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
            join users on ficheiros.user_id = users.id
            join users_ficheiros on ficheiros.id = users_ficheiros.ficheiro_id
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
                        'ficheiro' => "http://{$_SERVER['HTTP_HOST']}/uploads/ficheiros/".$ficheiro['ficheiro'],
                        'link' => "http://{$_SERVER['HTTP_HOST']}/ficheiro/".$ficheiro['id'],
                        'data' => $ficheiro['created_at'],
                    ));
                }
            }   
        }

        foreach ($ficheiros2 as $ficheiro2) {
            array_push($files,array(
                'descricao' => $ficheiro2['descricao'], 
                'preco' => $ficheiro2['preco'],
                'ficheiro' => "http://{$_SERVER['HTTP_HOST']}/uploads/ficheiros/".$ficheiro2['ficheiro'],
                'link' => "http://{$_SERVER['HTTP_HOST']}/ficheiro/".$ficheiro2['id'],
                'data' => $ficheiro2['created_at'],
            ));
        }

        $allFiles = [];

        foreach ($ficheiros3 as $ficheiro3) {
            $access = false;
            foreach ($files as $file) {
                if($ficheiro3['id'] == $file['id'] ) {
                    $access = true;
                }
            }   
            array_push($allFiles,array(
                'descricao' => $ficheiro3['descricao'], 
                'preco' => $ficheiro3['preco'],
                'ficheiro' => $access ? "http://{$_SERVER['HTTP_HOST']}/uploads/ficheiros/".$ficheiro3['ficheiro'] : '',
                'link' => "http://{$_SERVER['HTTP_HOST']}/ficheiro/".$ficheiro3['id'],
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
        return $return;
    }
    
    function getToken($username) {
        $conn = conexao();
        $stmt = $conn->prepare(
          "SELECT users.token FROM users WHERE users.username = :username ");
        $stmt->execute(array('username' => $username));

        $user = $stmt->fetch();
        if($user) {
            return $user['token'];
        } else {
            return "Error ao tentar pegar o token!";
        }
    }

    $server = new soap_server();
    $ns = "http://{$_SERVER['HTTP_HOST']}/server.php";
    $server->configureWSDL('Larga Caixa', $ns,'','document');

    
    $server->wsdl->addComplexType(
        'file',
        'complextType',
        'struct',
        'sequence',
        '',
        array(
            'descricao' => array('name' => 'descricao', 'type' => 'xsd:string'),
            'preco' => array('name' => 'preco', 'type' => 'xsd:string'),
            'ficheiro' => array('name' => 'file', 'type' => 'xsd:string'),
            'link' => array('name' => 'file', 'type' => 'xsd:string'),
            'data' => array('name' => 'data', 'type' => 'xsd:string')
        )
    );

    $server->wsdl->addComplexType(
        'books',
        'complexType',
        'array',
        '',
        'SOAP-ENC:Array',
        array(),
        array(
            array(
                'ref' => 'SOAP-ENC:arrayType',
                'wsdl:arrayType' => 'tns:file[]'
            )
        ),
        'tns:file'
    );

    $server->register("files",
        array("token" => "xsd:string"),
        array("return" => "tns:books"),
        $ns,
        "",
        "",
        "",
        "get list of files"
    );
    
    $server->register("getToken",
        array("username" => "xsd:string"),
        array("return" => "xsd:string"),
        $ns,
        "",
        "",
        "",
        "get token from User"
    );

    $server->service(file_get_contents("php://input"));

?>
