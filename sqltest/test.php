




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, -to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main1.css">

  </head>
  <body>

    <h1>Roster for</h1>

    <table class = "table table-bordered table-sm table-responsive m-t-3 m-b-3">

  <thead class="thead-inverse">

    <th>Week Ending</th>
    <th>Roster No</th>
    <th>Sunday</th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
    <th>Saturday</th>
   </thead>

   <?php
   try {
     $handler = new PDO('mysql:host=localhost;dbname=rosters;','root','root');
     $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
     echo $e->getMessage();
     die();
   }


   $queryrug = $handler->prepare("SELECT * FROM roster WHERE employee = 9812810");

   $queryrug->execute();


    ?>
  <tr>
    <?php while($r = $queryrug->fetch(PDO::FETCH_OBJ)) : ?>

  <td class='table-active'><?php echo $r->weekending; ?></td>


  <td class=""><?php echo $r->weeknumber; ?><a href="update.php?id=<?php echo $r->id;?>">Update Shifts</a></td>

  <td class="<?php if (strpos($r->sun, 'CANARY') !== false) {

          echo 'gray';

        } elseif (strpos($r->sun, 'REST') !== false) {

          echo 'red';

        } elseif(strpos($r->sun, 'NORTH') !== false) {

          echo 'black';

        } elseif(strpos($r->sun, 'COVER') !== false) {

          echo 'bg-primary';
        }

  ?>"><?php echo $r->sun; ?></td>

<td class="<?php if (strpos($r->mon, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->mon, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->mon, 'NORTH') !== false) {

        echo 'black';
      } elseif(strpos($r->mon, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->mon; ?></td>

<td class="<?php if (strpos($r->tue, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->tue, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->tue, 'NORTH') !== false) {

        echo 'black';

      } elseif(strpos($r->tue, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->tue; ?></td>

<td class="<?php if (strpos($r->wed, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->wed, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->wed, 'NORTH') !== false) {

        echo 'black';
      } elseif(strpos($r->wed, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->wed; ?></td>

<td class="<?php if (strpos($r->thur, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->thur, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->thur, 'NORTH') !== false) {

        echo 'black';
      } elseif(strpos($r->thur, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->thur; ?></td>

<td class="<?php if (strpos($r->fri, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->fri, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->fri, 'NORTH') !== false) {

        echo 'black';
      } elseif(strpos($r->fri, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->fri; ?></td>

<td class="<?php if (strpos($r->sat, 'CANARY') !== false) {

        echo 'gray';

      } elseif (strpos($r->sat, 'REST') !== false) {

        echo 'red';

      } elseif(strpos($r->sat, 'NORTH') !== false) {

        echo 'black';
      } elseif(strpos($r->sat, 'COVER') !== false) {

        echo 'bg-primary';
      }

?>"><?php echo $r->sat; ?></td>







     </tr>



   <?php endwhile; ?>
   <tr>



</table>










    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
