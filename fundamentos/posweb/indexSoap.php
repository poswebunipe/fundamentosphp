<?php

$url = "https://sistemas.unipe.br:8443/uniservice/ws/segurancaWS?wsdl";


echo "#######################<BR/>";

try{

    $opts = array(
        'https'=>array(
            'user_agent' => 'PHPSoapClient'
            )
        );

    $context = stream_context_create($opts);
    $client = new SoapClient($url,
                             array('stream_context' => $context));

    $result = $client->checkVat(array(
                                      'u' => '003961',
										'p' => '',
                                    ));
    print_r($result);
}
catch(Exception $e){
    echo $e->getMessage();
}


