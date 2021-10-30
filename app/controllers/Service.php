<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {

	public function __construct()
	{        
		parent::__construct();
		$this->load->library("nusoap"); 
        $this->server = new soap_server();
        $ns = "http://{$_SERVER['HTTP_HOST']}/service.php";
        $this->server->configureWSDL('LargaCaixa', $ns,'','document');

        $this->server->register("hello",
            array("username" => "xsd:string"),
            array("return" => "xsd:string"),
            $ns,
            "",
            "",
            "",
            "say hi to the caller"
        );
        $this->server->register("ola",
            array(),
            array("return" => "xsd:string"),
            $ns,
            "",
            "",
            "",
            "say hi to the caller"
        );
        $this->server->wsdl->addComplexType(
            'intArray',
            'complexType',
            'array',
            '',
            'SOAP-ENC:Array',
            array(),
            array(
                array(
                    'ref' => 'SOAP-ENC:arrayType',
                    'wsdl:arrayType' => 'xsd:integer[]'
                )
            ),
            'xsd:integer'
        );
        
        $this->server->register("intCount",
            array("from" => "xsd:integer", "to" => "xsd:integer"),
            array("return" => "tns:intArray"),
            $ns,
            "",
            "",
            "",
            "count from 'from' to 'to'"
        );
        
        
        
        $this->server->wsdl->addComplexType(
            'userInfo',
            'complextType',
            'struct',
            'sequence',
            '',
            array(
                'id' => array('name' => 'id', 'type' => 'xsd:integer'),
                'username' => array('name' => 'username', 'type' => 'xsd:string'),
                'email' => array('name' => 'email', 'type' => 'xsd:string')
            )
        );
        
        $this->server->register("getUserInfo",
            array("userId" => "xsd:integer"),
            array("return" => "tns:userInfo"),
            $ns,
            "",
            "",
            "",
            "get info for user"
        );
	}
	public function index()
	{	
        function hello($username) {
            if ($username == 'admin') {
                return "Welcome back, Boss";
            } else {
                return "Hello, $username";
            }
        }

        function ola() {
            return "Hello!!!";
        }
        // Example "intCount" function (return array)
        function intCount($from, $to) {
            $out = array();
            for ($i = $from; $i <= $to; $i++) {
                $out[] = $i;
            }
            return $out;
        }

        // Example "getUserInfo" function (return struct and fault)
        function getUserInfo($userId) {
            if ($userId == 1) {
                return array(
                    'id' => 1,
                    'username' => 'testuserCI',
                    'email' => 'testuser.ci@example.com'
                );
            } else {
                return new soap_fault('SOAP-ENV:Server', '', 'Requested user not found', '');
            }
        }
        $this->server->service(file_get_contents("php://input"));
	}
}
