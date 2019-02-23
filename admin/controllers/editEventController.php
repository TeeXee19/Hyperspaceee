<?php
//include connection here
    include_once('./config/connection.php');
    //include session here
    include_once('./config/session.php');

//catch the id from the url
$id = $_GET["id"];

if($id !== null){
    //select the complete detail from the hacathon table
    $select_event = "SELECT * FROM events WHERE `id` = '$id'  LIMIT 1";
    $details = $conn->query($select_event);
    $event = $details->fetch_assoc();

}else {
    //not optimal..Pls optimize in the future
    echo "Error 404";
}

//take care of the form when submitted
// define variables and set to empty values
 $h_name = $h_tag = $h_date_b = $h_date_e = $h_description = "";
 function validate_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $h_name = validate_input($_POST["h_name"]);
     $h_tag = validate_input($_POST["h_tag"]);
     $h_date_b = validate_input($_POST["h_date_b"]);
     $h_date_e = validate_input($_POST["h_date_e"]);
     $h_description = validate_input($_POST["h_description"]);
 
 }

 
 if(isset($_POST["h_edit"])){

    //check if the images exists
    if(isset($_FILES['image'])){

        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
       
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){

            $event = "SELECT * FROM events WHERE `id` = '$id' LIMIT 1 ";
            $result = $conn->query($event);
            $events = $result->fetch_assoc();
            unlink($events['image']);

            //update the image and the daatabase details
            
           move_uploaded_file($file_tmp,"../../assets/uploads/".$file_name);
           $sql = "UPDATE events SET `name`='$h_name',`start_date`='$h_date_b',`end_date`='$h_date_e',`tags`='$h_tag',`description`='$h_description',`image`='$file_name' WHERE id=2";
           $conn->query($sql);

           header("Location:../manage_hackathon.php");

        }else{
            $_SESSION["hackathon_message"] = "Error: " . $sql . "<br>" . $conn->error;
            header("Location:../manage_hackathon.php");
        }
    }else{

        $sql = "UPDATE events SET `name`='$h_name',`start_date`='$h_date_b',`end_date`='$h_date_e',`tags`='$h_tag',`description`='$h_description',`image`='$file_name' WHERE id=2";
        $conn->query($sql);
        header("Location:../manage_hackathon.php");
    }

}
