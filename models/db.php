<?php

class db {
    public function conexion() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fastbeauty_db";
        
        // conexion db
        $conn = new mysqli($servername, $username, $password, $dbname);

        // verificar conexion
        if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
        }

        return $conn;
        }
        }
    
        // conxeion ddb
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // verficaf conexion
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        return $conn;
    }
}


?>