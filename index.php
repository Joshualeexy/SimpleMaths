
<?php 
if (isset($_POST['submitbtn']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
session_start();
if(empty($_POST['name'])){
  echo "<script> alert('Name field cannot be empty')</script>";
}else{
$name = htmlspecialchars($_POST['name']);
$_SESSION['name'] = $name;
header("location:options.php");
}}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home &nbsp; &nbsp;| &nbsp; Easy Solve</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <main id="">
  <body>
    
    <header>
      <nav class="nav-bars">
        <div class="logo">EASY Solve</div>
      </nav>
    </header>
    <section>
      <div class="">
        <h1 id="hh">WELCOME</h1>
      </div>
      <form action="" method="POST">
  <div class="">
    <input type="text" name="name" id="name" placeholder="Enter your name" class="namefield">
  </div>
  <div class="">
    <button name="submitbtn" class="submitbtn">Submit</button>
  </div>

</form>

      
    </section>
    <script src="script.js"></script>

  </main>
  </body>
</html>

