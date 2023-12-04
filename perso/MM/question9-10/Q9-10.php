<?php

//9 class method that returns the type of an given, untyped parameter
class MyClassQ9 {
    public function getTypeOfTheParameter($parameter) {
        // Use gettype() function to get the type of the parameter
        $type = gettype($parameter);

        return $type;
    }
}

$obj = new MyClassQ9();


$typeParameter1 = $obj->getTypeOfTheParameter(42);
echo "Type of 42: $typeParameter1\n"; // Output: Type of $intValue: integer

$typeParameter2 = $obj->getTypeOfTheParameter("Hello, World!");
echo "Type of Hello, World! : $typeParameter2\n"; // Output: Type of $strValue: string

//10 class method that returns an array containing the name of the current host, server and client IP, and request method

class RequestInfo
{
    public static function getRequestInfo()
    {
        $info = array();

        // Get the host name
        $info['host'] = $_SERVER['HTTP_HOST'];

        // Get the server IP address
        $info['server_ip'] = $_SERVER['SERVER_ADDR'];

        // Get the client IP address
        $info['client_ip'] = $_SERVER['REMOTE_ADDR'];

        // Get the request method
        $info['request_method'] = $_SERVER['REQUEST_METHOD'];

        return $info;
    }
}

// Usage
$requestInfo = RequestInfo::getRequestInfo();

// Display the information
echo "Host: " . $requestInfo['host'] . "<br>";
echo "Server IP: " . $requestInfo['server_ip'] . "<br>";
echo "Client IP: " . $requestInfo['client_ip'] . "<br>";
echo "Request Method: " . $requestInfo['request_method'] . "<br>";


?>