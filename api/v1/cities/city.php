<?php    
    include "..\..\..\loader.php";
    use App\Services\Cities;
    use App\Services\Response;
    
    $rowBody = json_decode(file_get_contents('php://input'));

    switch($_SERVER['REQUEST_METHOD']):

        case "POST":
            $data = array("POST");
            Response::respond($data,Response::HTTP_OK);

        case "GET":

            $city = array(
                "id" => $_GET["id"]
            );
            
            Response::respond($city,Response::HTTP_OK);

        case "DELETE":
            $data = array("DELETE");
            Response::respond($data,Response::HTTP_OK);

        case "PUT":
            $data = array("PUT");
            Response::respond($data,Response::HTTP_OK);

    endswitch;

