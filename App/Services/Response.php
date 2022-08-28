<?php
    namespace App\Services;

    class Response 
    {
        public function respond($data, $status_code){
            
            echo $data . 
                $status_code;
        }
    }
    