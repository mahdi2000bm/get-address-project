<?php    
include "..\..\..\loader.php";

use App\Models\CityModel;
use App\Services\Response;

$cityModel = new CityModel();
$rowData = json_decode(file_get_contents("php://input"));

switch($_SERVER['REQUEST_METHOD']):

    case "GET":
        $cities = $cityModel->findAll();
        Response::respond($cities,Response::HTTP_OK);

    case "POST":
        $result = $cityModel->create($rowData->cityname,$rowData->provincname);
        Response::respond(["Added successfully, the number of cities added: $result"],Response::HTTP_CREATED);

endswitch;

