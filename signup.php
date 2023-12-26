<?php
include('dbconfig.php');
$sign=0;
if(isset($_POST['signup'])){
        
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password=md5($_POST['password']);

    $sign=$db->query("insert into signup(`name`,`email`,`phonenumber`,`password`)VALUES('$name','$email','$phonenumber','$password')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/desgin.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">


</head>
<body style="background-color: rgb(94, 32, 124);">
    <section>
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
               <form action="" method="POST">
                  <fieldset>
                        <div class="field"><h3>SIGNUP</h3></div>
                        <div class="field"><label>Name:</label>
                        <input type="text" name="name" placeholder="Enter the Name">
                        </div>
                        <div class="field"><label>Email:</label>
                        <input type="text" name="email" placeholder="Enter the Email">
                        </div>
                        <div class="field"><label>Phone Number:</label>
                        <input type="text" name="phonenumber" placeholder="Enter the Phone Number">
                        </div>
                        <div class="field"><label>Password:</label>
                        <input type="text" name="password" placeholder="Enter the Password">
                        </div>
                        <div class="sub">
                        <input class="button" type="submit" name="signup"  value="submit">
                        </div>
                        <div>
                        <p style="text-align: center;font-size: large;font-family: Arial, Helvetica, sans-serif;justify-content: center; padding-top: 30px;">Or</p>
                        <p style="margin-top:30px;text-align: center;font-size: large;font-family: Arial, Helvetica, 
                        sans-serif;justify-content: center">alread have an account?<a href="login.php">LOGIN</a></p>
                        </div>

                  </fieldset>
               </form>
        </div></div></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div >
                        <img src="image/t8.jpg" alt="taylor" class="tai" width=58% height=80%>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<?php
 if($sign==1){
    echo "<script>Swal.fire({
     title: '<strong>You are signup successfully</strong>',
     icon: 'success',
     html:`You really can't go back after this, We can't retrieve it either!`,
     
   }).then((result) => {
     if (result.value) {
       window.location.href = `index.php`
     }
   }); </script>"; }
?>   
</body>
</html>