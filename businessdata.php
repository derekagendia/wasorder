<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "wasorder";

$conn = mysqli_connect ($server , $username , $password ,  $dbname) ;

if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $address = $_POST['address'];
        $owner = $_POST['owner'];
        $number = $_POST['number'];


        if($_FILES["image"]["error"] === 4){
        echo"<script> alert('image does not exist'); </script>";
        }

        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png',];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if(!in_array($imageExtension, $validImageExtension)) {

                echo"<script> alert('invalid image extension'); </script>";


            }

            else if($fileSize > 1000000){

                echo"<script> alert('image size too large'); </script>";

            }

            else{
                try {
                    $newImageName = uniqid();
                    $newImageName .= '.'.$imageExtension;

                    move_uploaded_file($tmpName, 'assets/img/'.$newImageName);
                
                    $query = "insert into business(name,address,owner,number,image) values('$name','$address', '$owner', '$number','$newImageName')";
                    $run = mysqli_query($conn,$query);
                    
                    echo "Register sucess";
                } catch (\Throwable $th) {
                    echo $th;
                }
            
            }

        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   Ordering system
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading mb-3">Bussiness added successfully</h4>
                </div>
                <a href="business.php" class="btn btn-primary">Back to profile</a>
            </div>
        </div>
    </div>
</section>

  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>
