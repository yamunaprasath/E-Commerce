<?php
session_start();
include 'UserDetails.php';

    if (isset($_POST['login'])) {
        $userName = $_POST['userName'];
        $adminPassWord = $_POST['userPassWord'];
        
        $login = new UserDetails();
        $login->setUserName($userName);
        $login->setAdminPassWord($adminPassWord);
        $login->adminLogin();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
    <style>
svg {
    position: fixed;
    right: 0;
    height: 100%;
    z-index: 0;
    top: 0;
}

        </style>
</head>
<body>

    <div  style="background-color:green; height:100vh">
        <svg class="artwork artwork--desktop" viewBox="0 0 536 617" fill="none">
  <g>
  <defs>
    <rect id="SVGID_1_" width="536" height="617"></rect>
  </defs>
  <clipPath id="SVGID_2_">
    <use xlink:href="#SVGID_1_" overflow="visible"></use>
  </clipPath>
  <g clip-path="url(#SVGID_2_)">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFA781" d="M0,616.926V617h915V0H179.949l218.488,218.489L0,616.926z"></path>
    <g>
      <path fill="#FFCB67" d="M712.79,218.83c0,173.59-140.72,314.32-314.31,314.32c-86.9,0-165.55-35.26-222.45-92.26l0.35-444.46
        c56.86-56.79,135.38-91.91,222.1-91.91C572.07-95.48,712.79,45.24,712.79,218.83z"></path>
    </g>
    <path fill="#008060" d="M398.44,218.49l-222.41,222.4c-56.76-56.86-91.87-135.36-91.87-222.06c0-86.87,35.25-165.51,92.22-222.4
      L398.44,218.49z"></path>
  </g>
</g>
</svg>
      <div class="row bs-gutter">
          <div class="col-md-6 d-flex justify-content-center align-items-center" style="height: 100vh">
            
          <div class="card align-items-center" style="width:70%">
        <div class="card-body w-100 px-5 py-4">
        <form action="" method ='POST' name='getuserdetails'>
    
            <label for="">Email Id</label><br>
            <input  class="form-control" type="mail" name='userName'><br>
            
            <label for="">Password</label><br>
            <input  class="form-control" type="password" name='userPassWord'><br>

            <input class="btn btn-success w-100" type="submit" name="login" value="Login">

        </form> 
        </div> </div>
        </div></div></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

