<?php    
    include "..\..\..\loader.php";
    use App\Services\Cities;
    use App\Services\Response;
    
    // $rowBody = json_decode(file_get_contents('php://input'));

    switch($_SERVER['REQUEST_METHOD']):

        case "POST":

            $cityService = new Cities();
            echo $cityService->getCity('yazd');
            Response::respond($_POST,Response::HTTP_OK);

        break;

        case "GET":

            $city = array(
                "id" => "565"
            );

            $cityService = new CityService();
            print_r($cityService->getCity($city));

            // Response::respond($city,Response::HTTP_OK);

        case "DELETE":
            $data = array("DELETE");
            Response::respond($data,Response::HTTP_OK);

        case "PUT":
            $data = array("PUT");
            Response::respond($data,Response::HTTP_OK);

    endswitch;

