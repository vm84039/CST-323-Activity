<?php 

namespace App\Http\Controllers;
use App\Services\Data\SecurityDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller {
    
    public function addStudent(Request $request) {
        // Assigning data from fields to variables
        $lastName = $request->input('lastName');
        
        $firstName = $request->input('firstName');
        $age = strval($request->input('age'));
        $year= strval($request->input('year'));
        
        $DAO = new SecurityDAO();
        
        //Create new Connection
        $conn = $DAO->getConnection();
        $data= ['error' => $lastName];
      
        
        $sql = "INSERT INTO Student (LastName, FirstName, Age, EnrollmentYear) VALUES ('$lastName', '$firstName', '$age', '$year')";
          
        if (mysqli_query($conn, $sql)) {
             echo  $lastName;
             return view("studentRoster");
        }
        else {
                $error = mysqli_error($conn);
                $data = ['error' => $error];
                return view("errorPage"); // Redirect for failed Update
            }
    }
    public function deleteStudent(Request $request) {
        $id = $request->input('studentID');
        $DAO = new SecurityDAO();
        // Creating a new connection.
        $conn = $DAO->getConnection();
        // Creating the SQL statement
        $sql = "DELETE FROM Student WHERE StudentID = $id;";
        
        if (mysqli_query($conn, $sql)) {
            echo "<h1>Student Deleted Successfully!</h1><br>";
            echo $id;
            return view("studentRoster");
        }
        else {
            $error = mysqli_error($conn);
            $data = ['error' => $error];
            return view("errorPage"); // Redirect for failed Update
        }
    }
    
    public function selectStudent(Request $request)
    {
        $id = $request->input('id');
        $DAO = new SecurityDAO();
        $conn = $DAO->getConnection();
        
        $sql = "SELECT * FROM Student WHERE StudentID = '$id';"; // User query
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) { // Only runs if at least one user exists matching the given credentials.
           while($row = $result->fetch_assoc()) {
                $id = $row["StudentID"];
                $firstName = $row["FirstName"];
                $lastName = $row["LastName"];
                $age = $row["Age"];
                $year = $row["EnrollmentYear"]; 
                
                $data = ['id' => $id, 'firstName'=>$firstName, 'lastName'=>$lastName, 'age'=>$age, 'year'=>$year];
                return view("editStudent")->with($data);
            }
        }
    }
    
    
    public function updateStudent(Request $request) {
        // Assigning data from fields to variables
        $id= $request->input('id'); 
        $lastName = $request->input('lastName');   
        $firstName = $request->input('firstName');
        $age = strval($request->input('age'));
        $year= strval($request->input('year'));
        
        $DAO = new SecurityDAO();
        //Create new Connection
        $conn = $DAO->getConnection();
        
        $sql = "UPDATE Student SET LastName = '$lastName', FirstName = '$firstName', Age = '$age', EnrollmentYear = '$year' WHERE StudentID = '$id';";
        
        if (mysqli_query($conn, $sql)) {
            
            return view("studentRoster");
        } else {
            return view("errorPage"); // Redirect for failed Update
        }
    }
}
