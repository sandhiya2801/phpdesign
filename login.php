<?php
include('dbconfig.php');
$login=0;
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $login=$db->query("select * from signup WHERE email='$email' password='$password'");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="css/desgin.css">


</head>
<body style="background-color: rgb(94, 32, 124);">
   <section>
    <form action="" method="POST">
         <fieldset>
            <div style="text-align:center;"><h3>LOGIN</h3></div>
            <div class="field"><label>Email:</label>
            <input type="text" name="email" placeholder="Enter the email">
            </div>
            <div class="field"><label>Password:</label>
            <input type="text" name="password" placeholder="Enter the Password">
            </div>
            <div class="sub">
            <input  type="submit" name="login"  value="click">
            </div>

         </fieldset>
    </form>
   </section> 
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <?php
        if($login==1){
            echo "<script>Swal.fire({
                title: '<strong>You are login successfully</strong>',
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