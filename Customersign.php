<?php
include 'UserDetails.php';
    if(isset($_POST['submit'])) {
       $sign = new UserDetails();
       $sign->customerSign($_POST);
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sign Up</title>
</head>
<body>
    <div class="container text-center mt-5">
        <form action="" method="POST">

            <label class="mt-2" for="">First Name</label><br>
            <input class="mt-2" type="text"  name='first_name' placeholder="First Name" ><br>

            <label class="mt-2" for="">Last Name</label><br>
            <input class="mt-2" type="text"  name='last_name' placeholder="Last Name" ><br>

            <label class="mt-2" for="">E-mail</label><br>
            <input class="mt-2" type="text" name="sign_info" placeholder="E-mail" ><br>

            <input class="mt-2" type="submit" name="submit" value="Sign up">
        </form>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='./assets/js/slick.min.js'></script>
<script src="./assets/js/code.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>    
</body>
</html>