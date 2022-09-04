<?php
    class baseConnection {

        public static function dbConn(){   // Create connection

            $host = "localhost";
            $dbname = "iran";
        
            $dsn =  "mysql:dbname=$dbname;host=$host;";

            try {
                $conn = new PDO( $dsn , "root", "");
            } catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }
        }

    }
