<?php
    ($_SERVER['REQUEST_METHOD'] == 'POST') || die('The requested URL does not exist.');
    
    include "..\..\..\loader.php";
    use App\Services\Cities;
    use App\Services\Response;

    $data = array(
        "country" => $_POST['country'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
    );

    Response::respond($data,Response::HTTP_OK);
