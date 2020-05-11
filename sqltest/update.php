
<?php

try {
  $handler = new PDO('mysql:host=localhost;dbname=rosters;','root','root');
  $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
  die();
}

if (isset($_GET['id'])) {
   $id = $_GET['id'];
  // code...
}


$roster = $handler->prepare("SELECT * FROM roster WHERE id = :id");
$roster->bindParam(':id',$id);
$roster->execute();
$week = $roster->fetch(PDO::FETCH_OBJ);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = htmlspecialchars(trim($_POST["id"]));
    $sun = strtoupper(htmlspecialchars(trim($_POST["sunday"])));
    $mon = strtoupper(htmlspecialchars(trim($_POST["monday"])));
    $tue = strtoupper(htmlspecialchars(trim($_POST["tuesday"])));
    $wed = strtoupper(htmlspecialchars(trim($_POST["wednesday"])));
    $thur = strtoupper(htmlspecialchars(trim($_POST["thursday"])));
    $fri = strtoupper(htmlspecialchars(trim($_POST["friday"])));
    $sat = strtoupper(htmlspecialchars(trim($_POST["saturday"])));



    try {
      $queryrug = $handler->prepare("UPDATE roster
        SET sun = :sunday,
        mon = :monday,
        tue = :tuesday,
        wed = :wednesday,
        thur = :thursday,
        fri = :friday,
        sat = :saturday
        WHERE id = :id");
      $queryrug->bindParam(':sunday',$sun);
      $queryrug->bindParam(':monday',$mon);
      $queryrug->bindParam(':tuesday',$tue);
      $queryrug->bindParam(':wednesday',$wed);
      $queryrug->bindParam(':thursday',$thur);
      $queryrug->bindParam(':friday',$fri);
      $queryrug->bindParam(':saturday',$sat);
      $queryrug->bindParam(':id',$id);
      $queryrug->execute();
      header('Location: test.php');

}
catch (\PDOException $e) {
     echo $e->getMessage();
}



}


 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>ROSTER</title>
   </head>
   <body>
     <h1>Update Form</h1>
<div class="container">
  <form class="" action="update.php" method="post">

    <div class="form-group">
     <label for="id">ID</label>
     <input type="number" class="form-control"  name="id" value="<?php echo $week->id; ?>">
    </div>
    <div class="form-group">
     <label for="sunday">Sunday</label>
     <input type="text" class="form-control" name="sunday" value="<?php echo $week->sun; ?>">
    </div>
    <div class="form-group">
     <label for="monday">Monday</label>
     <input type="text" class="form-control"   name="monday" value="<?php echo $week->mon; ?>">
    </div>
    <div class="form-group">
     <label for="tuesday">Tuesday</label>
     <input type="text" class="form-control"  name="tuesday"  value="<?php echo $week->tue; ?>">
    </div>
    <div class="form-group">
     <label for="wednesday">Wednesday</label>
     <input type="text" class="form-control"  name="wednesday" value="<?php echo $week->wed; ?>">
    </div>
    <div class="form-group">
     <label for="thursday">Thursday</label>
     <input type="text" class="form-control"  name="thursday" value="<?php echo $week->thur; ?>">
    </div>
    <div class="form-group">
     <label for="friday">Friday</label>
     <input type="text" class="form-control" name="friday" value="<?php echo $week->fri; ?>">
    </div>
    <div class="form-group">
     <label for="saturday">Saturday</label>
     <input type="text" class="form-control"  name="saturday" value="<?php echo $week->sat; ?>">
    </div>

     <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
 </html>



</html>
