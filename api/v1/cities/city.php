<?php
    ($_SERVER['REQUEST_METHOD'] == 'POST') || die('The requested URL does not exist.');
    
    include "..\..\..\loader.php";

    use App\Services\Cities;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $country = $_POST['country'];

        $city = new Cities();
        echo $city->getCity($country);
    }
