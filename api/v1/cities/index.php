<?php    
include "..\..\..\loader.php";

use App\Models\CityModel;
use App\Services\Response;

$cityModel = new CityModel();
$rowData = json_decode(file_get_contents("php://input"));

switch($_SERVER['REQUEST_METHOD']):

    case "GET":

        $page = null;
        $perPage = null;

        if (isset($_GET['page']) and isset($_GET['per_page']) )
        {
            $page = $_GET['page'];
            $perPage = $_GET['per_page'];
        }
        
        $cities = $cityModel->findAll($page, $perPage);
        Response::respond($cities,Response::HTTP_OK);

    case "POST":
        $result = $cityModel->create($rowData->cityname,$rowData->provincname);
        Response::respond(["Added successfully, the number of cities added: $result"],Response::HTTP_CREATED);
    
    case "DELETE":
        $result = $cityModel->delete($rowData->id);
        Response::respond(["Added Deleted $result city"],Response::HTTP_OK);

    case "PUT":
        $result = $cityModel->update($rowData->id,$rowData->cityname);
        Response::respond(["The name of the city was successfully changed : $result"],Response::HTTP_OK);


endswitch;

