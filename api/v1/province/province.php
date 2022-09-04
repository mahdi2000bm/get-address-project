<?php
include "..\..\..\loader.php";

use App\Models\ProvinceModel;
use App\Services\Response;

switch($_SERVER['REQUEST_METHOD']):

    case "GET":
        $cityModel = new ProvinceModel();
        $cities = $cityModel->findAll();
        Response::respond($cities,Response::HTTP_OK);
    case "POST":

endswitch;

