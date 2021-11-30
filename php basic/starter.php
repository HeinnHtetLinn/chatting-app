


<!-- // $friends = array("David","Shwan","Liang","MinHo","Chris","Jihyo","Yeseo");
// // echo $friends[2];
// // echo "<br>";
// // echo count($friends)-1;
// // echo "<br>";
// // echo $friends[3];

// for ($i = 0 ; $i <= count($friends)-1 ; $i++ ){
//     echo $friends[$i];
//     echo "<br>";
// }


// $studentAges = array("Ben"=>"12","Chris"=>"13","JiMin"=>"11");

// echo $studentAges["Chris"] ;
// echo "<br>";

// foreach ($studentAges as $key => $value){

//     echo "Name =".$key.",Age =".$value."<br>";

// }


// $car = array(
//     array("Honda",12,2002),
//     array("BMW",2,2020),
//     array("Ford",23,2019)
// );

// echo $car[2][2];
// echo "<br>";

// for($i = 0; $i <= count($car)-1; $i++){
//     for ($x =0; $x <= count($car[$i])-1; $x++){

//         echo $car[$i][$x];
//         echo "<br>";

//     }

    

// } -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
      <h1>PHP Form Testing</h1>
  <form action="data.php" method="POST">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="Password">
  </div>
  <button type="submit" name="btn_register" class="btn btn-primary">Register</button>
</form>
  </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>






