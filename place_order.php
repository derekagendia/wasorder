<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Prisky delice CRM
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="store.php">back</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
       
        
    </div>
    </div>
    </nav>


    <section class="mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="send.php" method="post">
            <div class="mb-3">
                      <lsabel for="" class="form-label">Meal</label>
                      <input type="text" class="form-control" name="meal" placeholder="price" value="Fufu and eru" readonly>
                    </div>
                <div class="mb-3">
                      <label for="" class="form-label">Price</label>
                      <input type="number" class="form-control" id="id-1" name="price" placeholder="price" value="1500" readonly>
                    </div>
                <div class="mb-3">
                      <label for="" class="form-label">Quantity</label>
                      <input type="number" class="form-control" name="qty" placeholder="" id="id-2">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">total to pay</label>
                      <input type="number" class="form-control" name="total" placeholder="" id="id-3" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Delivery address</label>
                      <input type="address" class="form-control" name="address" placeholder="delivery address">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Phone number</label>
                      <input type="phone" class="form-control" name="phone" placeholder="delivery address">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">order date</label>
                      <input type="text" class="form-control" name="date" value="<?php echo date('y-m-d H:i:s')?>" readonly>
                    </div>
                   
                    

                    <button class="btn btn-success w-100" type="submit" name="submit">confirm</button>

                </form>
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
   <script>
$(function () {
  $("#id-1, #id-2").keyup(function () {
    $("#id-3").val(+$("#id-1").val() * +$("#id-2").val());
  });
});
 </script>

</body>

</html>