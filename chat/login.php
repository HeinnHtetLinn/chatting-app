<?php 
   session_start();
   if(isset($_SESSION['unique_id'])){
    //  header("location: user.php");
   }

?>


<?php include_once "header.php";?>
  <body>

    <div class="wrapper">
      <section class="form login">
        <header>
          RealTime ChatApp
        </header>
        <form action="" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="fields">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter Your Email" required>
          </div>
          <div class="fields">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Your password" required>
            <i class="fas fa-eye eye"></i>
          </div>
          <div class="fields button">
            <input type="submit" value="Go to Chat">
          </div>
        </form>
        <div class="link text-center">Create Account? <a href="./signup.php">Sign Up</a> </div>
      </section>
    </div>










    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/login.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>