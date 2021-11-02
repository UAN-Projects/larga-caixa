<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {

    public $hello = 'ola';

	public function __construct()
	{        
		parent::__construct();
        // $this->load->model('Ficheiro_model');
		$this->load->library("nusoap"); 
        $this->server = new soap_server();
        $ns = "http://{$_SERVER['HTTP_HOST']}/service.php";
        $this->server->configureWSDL('LargaCaixa', $ns,'','document');

        $this->server->wsdl->addComplexType(
            'file',
            'complextType',
            'struct',
            'sequence',
            '',
            array(
                'descricao' => array('name' => 'descricao', 'type' => 'xsd:string'),
                'preco' => array('name' => 'preco', 'type' => 'xsd:string'),
                'ficheiro' => array('name' => 'file', 'type' => 'xsd:string'),
                'data' => array('name' => 'date', 'type' => 'xsd:string')
            )
        );
    
        $this->server->wsdl->addComplexType(
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

        $this->server->register("files",
            array(),
            array("return" => "tns:books"),
            $ns,
            "",
            "",
            "",
            "get list of files"
        );
        $this->server->register("hello",
            array(),
            array("return" => "xsd:string"),
            $ns,
            "",
            "",
            "",
            "say hi to the caller"
        );
	}
	public function index()
	{	
        function hello() {
            ini_set("soap.wsdl_cache_enabled", "0");
            $this->hello;
            // $files = $this->Ficheiro_model->list();
            // return $files[0]->id;
            // return $this->hello;
            return 'Hello';
        }

        function files() {
            $result = array();
            // $files = $this->Ficheiro_model->list();
            // foreach ($files as $file) {
            //     $result = array_merge($result, 
            //         array(
            //             array( 
            //                 'descricao' => $file->descricao, 
            //                 'preco' => $file->preco,
            //                 'ficheiro' => "http://{$_SERVER['HTTP_HOST']}/uploads/ficheiros/".$file->ficheiro,
            //                 'data' => $file->created_at,
            //             ),
            //         )
            //     );
            // }
            // return $result;
            $this->load->model('Ficheiro_model');
            return array(
                array( 
                    'descricao' => '$file->descricao', 
                    'preco' => '$file->preco',
                    'ficheiro' => "http://{$_SERVER['HTTP_HOST']}/uploads/ficheiros/".'$file->ficheiro',
                    'data' => '$file->created_at',
                ),
            );
        }

        $this->server->service(file_get_contents("php://input"));
	}
}
