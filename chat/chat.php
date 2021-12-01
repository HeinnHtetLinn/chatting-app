<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    // header("location: login.php");
  }

?>


<?php include_once "header.php";?>
  <body>

    <div class="wrapper">
      <section class="chat-area">
        <header>
        <?php
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}" );
            if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            }
        ?> 
          <a href="user.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <div class="content">
            <img src="./php/image/<?php echo $row['image']?>" alt="">
            <div class="details">
              <span><?php echo $row['fname']." " .$row['lname']  ?></span>
              <p><?php echo $row['status'] ?></p>
            </div>
          </div>
        </header>
        <div class="chat-box">
          
        
        </div>
        <form action="#" class="typing-area">
          <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
          <input type="text" name="incoming_id" value="<?php echo $user_id ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here....">
          <button><i class="fas fa-paper-plane"></i></button>
        </form>
      </section>
    </div>










    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="./javascript/chat.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>