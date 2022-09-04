<?php    
include "..\..\..\loader.php";

use App\Models\CityModel;
use App\Services\Response;

switch($_SERVER['REQUEST_METHOD']):

    case "GET":
        $cityModel = new CityModel();
        $cities = $cityModel->findAll();
        Response::respond($cities,Response::HTTP_OK);

    case "POST":

endswitch;

