<?php

namespace App\Services\Data;
use App\Models\StudentModel;
use Illuminate\Support\Facades\DB;

class SecurityDAO {
    public function __construct() { // A constructor.
    }
    
    public function getConnection() {  //Function that establishes an MySQL connection in the AWS cloud database.  Returns the connection
        // The default Server settings.
        $mysql_host = "localhost";
        $mysql_database = "mysql";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_port = "3306";
        
        // Creates an SQL connection.
        $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database, $mysql_port);
        
        // Checks the SQL connection.
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
        }
        
        return $conn;
    }
    public function getAllStudents() { 
        $conn = $this->getConnection();
        $query = "SELECT * FROM Student";
        $query_run = mysqli_query($conn, $query);
        return $query_run;
    }
    

    

    
}