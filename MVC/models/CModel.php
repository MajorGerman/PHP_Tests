<?php

class Cmodel {
    public function GetData() {
        
        $servername = "localhost";
        $username = "georg";
        $password = "12345";
        $dbname = "php_sptvr19";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM posts";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0) {
            while( $row = $result -> fetch_assoc() ) {
                $arrayResult[] = array(
                    'TITLE' => $row["TITLE"],
                    'DATE' => $row["DATE"],
                    'AUTHOR' => $row["AUTHOR"],
                    'IMAGE' => $row["IMAGE"],
                    'TEXT' => $row["TEXT"]
                );
            }
          } else {
            echo "0 results";
          }

        $conn -> close();

        return $arrayResult;

    }
}