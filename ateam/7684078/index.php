<?php
$upDate = strtotime('30-06-2018');

$name = "";

$empno = "Bill";

$now = time();

$removeOldDate = $now - 604800; //remove after three weeks

$hide = 'class="d-none"';

$hideHeader = 'd-none';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, -to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../cssforcsm/main1.css">


  </head>
  <body>
    <h1>Roster for <?php echo $empno; ?></h1>

    <table class = "table table-bordered table-sm table-responsive m-t-3 m-b-3">


      <thead class="thead-inverse<?php if($upDate < $removeOldDate) { echo " " . $hideHeader; } ?>">

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

       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>6</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class=''></td>
         </tr>
       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>7</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class='bg-primary'>COVER WEEK</td>
           <td class=''></td>
         </tr>
       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>8</td>
           <td class=' red'>R</td>
           <td class=' red'>R</td>
           <td class=' black'>11 - 19 Canary Wharf</td>
           <td class=' black'>11 - 19 Canary Wharf</td>
           <td class=' black'>11 - 19 Canary Wharf</td>
           <td class=' black'>07 - 15 Canary Wharf</td>
           <td class=' red'>R</td>




           <td class=''></td>
         </tr>
       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>9</td>
           <td class=' red'>R</td>
           <td class=' red'>R</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=''></td>
         </tr>

      <!-- cellspacing='0' is important, must stay -->
       <!-- Table Header -->

       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>10</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' gray'>23 - 07 North Greenwich</td>
           <td class=' red'>R</td>
           <td class=' red'>R</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=''></td>
         </tr>

       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>11</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' gray'>15 - 23 North Greenwich</td>
           <td class=' red'>R</td>
           <td class=' red'>R</td>
           <td class=' gray'>07 - 15 North Greenwich</td>


           <td class=''></td>
         </tr>
       <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

           <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
           <td class=''>12</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' gray'>07 - 15 North Greenwich</td>
           <td class=' red'>R</td>

           <td class=''></td>
         </tr>
              <?php
                  for ($i = 0; $i < 28; $i++) {
                      include('../cssforcsm/inc.php');
                  }



               ?>

              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
