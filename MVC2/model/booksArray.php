<?php

    $books = [];

    $servername = "localhost";
    $username = "georg";
    $password = "12345";
    $dbname = "php_sptvr19";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM books";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        while( $row = $result -> fetch_assoc() ) {
            $books[] = array(
                    "bookname" => $row["BOOKNAME"],
                    "author" => $row["AUTHOR"],
                    "price" => $row["PRICE"],
                    "description" => $row["DESCRIPTION"],
                    "image" => $row["IMAGE"]
            );
        }
    } else {
        echo "0 results";
    }

    $conn -> close();

    return $books;

?>