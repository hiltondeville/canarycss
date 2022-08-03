<?php
$upDate = strtotime('23-01-2021');

$name = "Mehwish Hanfi";

$empno = 9839416;

$now = time();

$removeOldDate = $now - 1814400; //remove after three weeks

$hide = 'class="hidden-xs-up"';

$hideHeader = 'hidden-xs-up';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, -to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main1.css">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60689461-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body>
    <h1>Roster for <?php echo $empno; ?></h1>

    <table class = "table table-bordered table-sm table-responsive m-t-3 m-b-3">

 <!-- cellspacing='0' is important, must stay -->
    <!-- Table Header -->
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
        <td class=''>3</td>
        <td class=' gray'>11 - 19 Canary Wharf</td>
        <td class=' gray'>11 - 19 Canary Wharf</td>
        <td class=' gray'>11 - 19 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=''></td>
      </tr>
    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>4</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' gray'>7 - 15 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=''></td>
      </tr>
    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class=''>5</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=''></td>
      </tr>
    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
        <td class='red'>6 Annual Leave</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' black'>16 - 24 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' gray'>11 - 19 Canary Wharf</td>
        <td class=' red'>R</td>
        <td class=' black'>7 - 15 North Greenwich</td>
        <td class=' black'>7 - 15 North Greenwich</td>
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
        <td class=''>9</td>
        <td class=' black'>8 - 16 North Greenwich</td>
        <td class=' black'>7 - 15 North Greenwich</td>
        <td class=' black'>7 - 15 North Greenwich</td>
        <td class=' black'>7 - 15 North Greenwich</td>
        <td class=' black'>7 - 15 North Greenwich</td>
        <td class=' red'>R</td>
        <td class=' red'>R</td>
        <td class=''></td>
    </tr>
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
          <td class=''>1</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=''></td>
        </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
          <td class='red'>2 Annual Leave</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' gray'>15 - 23 Canary Wharf</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=''></td>
        </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
          <td class=''>3</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=''></td>
        </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
          <td class=''>4</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' gray'>7 - 15 Canary Wharf</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=''></td>
        </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
          <td class=''>5</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=''></td>
        </tr>
      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
          <td class=''>6</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' black'>16 - 24 North Greenwich</td>
          <td class=' red'>R</td>
          <td class=' gray'>11 - 19 Canary Wharf</td>
          <td class=' red'>R</td>
          <td class=' black'>7 - 15 North Greenwich</td>
          <td class=' black'>7 - 15 North Greenwich</td>
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
          <td class='red'>8 Annual Leave</td>
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
          <td class='red'>9 Annual Leave</td>
          <td class=' black'>8 - 16 North Greenwich</td>
          <td class=' black'>7 - 15 North Greenwich</td>
          <td class=' black'>7 - 15 North Greenwich</td>
          <td class=' black'>7 - 15 North Greenwich</td>
          <td class=' black'>7 - 15 North Greenwich</td>
          <td class=' red'>R</td>
          <td class=' red'>R</td>
          <td class=''></td>
      </tr>
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
            <td class=''>1</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=''></td>
          </tr>
        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
            <td class=''>2</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' gray'>15 - 23 Canary Wharf</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=''></td>
          </tr>
        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
            <td class=''>3</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=''></td>
          </tr>
        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
            <td class=''>4</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' gray'>7 - 15 Canary Wharf</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=''></td>
          </tr>
        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
            <td class=''>5</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=''></td>
          </tr>
        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
            <td class=''>6</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' black'>16 - 24 North Greenwich</td>
            <td class=' red'>R</td>
            <td class=' gray'>11 - 19 Canary Wharf</td>
            <td class=' red'>R</td>
            <td class=' black'>7 - 15 North Greenwich</td>
            <td class=' black'>7 - 15 North Greenwich</td>
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
            <td class=''>9</td>
            <td class=' black'>8 - 16 North Greenwich</td>
            <td class=' black'>7 - 15 North Greenwich</td>
            <td class=' black'>7 - 15 North Greenwich</td>
            <td class=' black'>7 - 15 North Greenwich</td>
            <td class=' black'>7 - 15 North Greenwich</td>
            <td class=' red'>R</td>
            <td class=' red'>R</td>
            <td class=''></td>
        </tr>
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
              <td class=''>1</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class=''>2</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' gray'>15 - 23 Canary Wharf</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class=''>3</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class=''>4</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' gray'>7 - 15 Canary Wharf</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class='red'>5 Annual Leave</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class='red'>6 Annual Leave</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' black'>16 - 24 North Greenwich</td>
              <td class=' red'>R</td>
              <td class=' gray'>11 - 19 Canary Wharf</td>
              <td class=' red'>R</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=''></td>
            </tr>
          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
              <td class='red'>7 Annual Leave</td>
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
              <td class=''>9</td>
              <td class=' black'>8 - 16 North Greenwich</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=' black'>7 - 15 North Greenwich</td>
              <td class=' red'>R</td>
              <td class=' red'>R</td>
              <td class=''></td>
          </tr>
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
                <td class=''>1</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=''></td>
              </tr>
            <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                <td class=''>2</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' gray'>15 - 23 Canary Wharf</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=''></td>
              </tr>
            <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                <td class=''>3</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=''></td>
              </tr>
            <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                <td class=''>4</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' gray'>7 - 15 Canary Wharf</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=''></td>
              </tr>
            <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                <td class=''>5</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=''></td>
              </tr>
            <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                <td class=''>6</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' black'>16 - 24 North Greenwich</td>
                <td class=' red'>R</td>
                <td class=' gray'>11 - 19 Canary Wharf</td>
                <td class=' red'>R</td>
                <td class=' black'>7 - 15 North Greenwich</td>
                <td class=' black'>7 - 15 North Greenwich</td>
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
                <td class='red'>8 Annual Leave</td>
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
                <td class='red'>9 Annual Leave</td>
                <td class=' black'>8 - 16 North Greenwich</td>
                <td class=' black'>7 - 15 North Greenwich</td>
                <td class=' black'>7 - 15 North Greenwich</td>
                <td class=' black'>7 - 15 North Greenwich</td>
                <td class=' black'>7 - 15 North Greenwich</td>
                <td class=' red'>R</td>
                <td class=' red'>R</td>
                <td class=''></td>
            </tr>
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
                  <td class=''>1</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=''></td>
                </tr>
              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                  <td class=''>2</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' gray'>15 - 23 Canary Wharf</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=''></td>
                </tr>
              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                  <td class=''>3</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=''></td>
                </tr>
              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                  <td class=''>4</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' gray'>7 - 15 Canary Wharf</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=''></td>
                </tr>
              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                  <td class=''>5</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=''></td>
                </tr>
              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                  <td class='red'>6 Annual Leave</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' black'>16 - 24 North Greenwich</td>
                  <td class=' red'>R</td>
                  <td class=' gray'>11 - 19 Canary Wharf</td>
                  <td class=' red'>R</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
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
                  <td class=''>9</td>
                  <td class=' black'>8 - 16 North Greenwich</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
                  <td class=' black'>7 - 15 North Greenwich</td>
                  <td class=' red'>R</td>
                  <td class=' red'>R</td>
                  <td class=''></td>
              </tr>
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
                    <td class=''>1</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class='red'>2 Annual Leave</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' gray'>15 - 23 Canary Wharf</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class=''>3</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class=''>4</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' gray'>7 - 15 Canary Wharf</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class=''>5</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class=''>6</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' black'>16 - 24 North Greenwich</td>
                    <td class=' red'>R</td>
                    <td class=' gray'>11 - 19 Canary Wharf</td>
                    <td class=' red'>R</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=''></td>
                  </tr>
                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                    <td class='red'>7 Annual Leave</td>
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
                    <td class=''>9</td>
                    <td class=' black'>8 - 16 North Greenwich</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=' black'>7 - 15 North Greenwich</td>
                    <td class=' red'>R</td>
                    <td class=' red'>R</td>
                    <td class=''></td>
                </tr>
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
                      <td class=''>1</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=''></td>
                    </tr>
                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                      <td class=''>2</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' gray'>15 - 23 Canary Wharf</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=''></td>
                    </tr>
                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                      <td class=''>3</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=''></td>
                    </tr>
                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                      <td class='red'>4 Annual Leave</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' gray'>7 - 15 Canary Wharf</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=''></td>
                    </tr>
                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                      <td class='red'>5 Annual Leave</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=''></td>
                    </tr>
                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                      <td class=''>6</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' black'>16 - 24 North Greenwich</td>
                      <td class=' red'>R</td>
                      <td class=' gray'>11 - 19 Canary Wharf</td>
                      <td class=' red'>R</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
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
                      <td class=''>9</td>
                      <td class=' black'>8 - 16 North Greenwich</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
                      <td class=' black'>7 - 15 North Greenwich</td>
                      <td class=' red'>R</td>
                      <td class=' red'>R</td>
                      <td class=''></td>
                  </tr>  <thead class="thead-inverse<?php if($upDate < $removeOldDate) { echo " " . $hideHeader; } ?>">

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
                          <td class=''>1</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class=''>2</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' gray'>15 - 23 Canary Wharf</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class=''>3</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class=''>4</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' gray'>7 - 15 Canary Wharf</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class=''>5</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class='red'>6 Annual Leave</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' black'>16 - 24 North Greenwich</td>
                          <td class=' red'>R</td>
                          <td class=' gray'>11 - 19 Canary Wharf</td>
                          <td class=' red'>R</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=''></td>
                        </tr>
                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                          <td class='red'>7 Annual Leave</td>
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
                          <td class='red'>8 Annual Leave</td>
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
                          <td class=''>9</td>
                          <td class=' black'>8 - 16 North Greenwich</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=' black'>7 - 15 North Greenwich</td>
                          <td class=' red'>R</td>
                          <td class=' red'>R</td>
                          <td class=''></td>
                      </tr>  <thead class="thead-inverse<?php if($upDate < $removeOldDate) { echo " " . $hideHeader; } ?>">

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
                              <td class=''>1</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=''></td>
                            </tr>
                          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                              <td class=''>2</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' gray'>15 - 23 Canary Wharf</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=''></td>
                            </tr>
                          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                              <td class=''>3</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=''></td>
                            </tr>
                          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                              <td class=''>4</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' gray'>7 - 15 Canary Wharf</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=''></td>
                            </tr>
                          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                              <td class=''>5</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=''></td>
                            </tr>
                          <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                              <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                              <td class=''>6</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' black'>16 - 24 North Greenwich</td>
                              <td class=' red'>R</td>
                              <td class=' gray'>11 - 19 Canary Wharf</td>
                              <td class=' red'>R</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
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
                              <td class=''>9</td>
                              <td class=' black'>8 - 16 North Greenwich</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
                              <td class=' black'>7 - 15 North Greenwich</td>
                              <td class=' red'>R</td>
                              <td class=' red'>R</td>
                              <td class=''></td>
                          </tr>  <thead class="thead-inverse<?php if($upDate < $removeOldDate) { echo " " . $hideHeader; } ?>">

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
                                  <td class=''>1</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=''></td>
                                </tr>
                              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                  <td class='red'>2 Annual Leave</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' gray'>15 - 23 Canary Wharf</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=''></td>
                                </tr>
                              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                  <td class='red'>3 Annual Leave</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=''></td>
                                </tr>
                              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                  <td class=''>4</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' gray'>7 - 15 Canary Wharf</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=''></td>
                                </tr>
                              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                  <td class=''>5</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=''></td>
                                </tr>
                              <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                  <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                  <td class=''>6</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' black'>16 - 24 North Greenwich</td>
                                  <td class=' red'>R</td>
                                  <td class=' gray'>11 - 19 Canary Wharf</td>
                                  <td class=' red'>R</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
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
                                  <td class=''>9</td>
                                  <td class=' black'>8 - 16 North Greenwich</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
                                  <td class=' black'>7 - 15 North Greenwich</td>
                                  <td class=' red'>R</td>
                                  <td class=' red'>R</td>
                                  <td class=''></td>
                              </tr>
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
                                    <td class=''>1</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class='red'>2 Annual Leave</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' gray'>15 - 23 Canary Wharf</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class=''>3</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class=''>4</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' gray'>7 - 15 Canary Wharf</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class=''>5</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class=''>6</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' black'>16 - 24 North Greenwich</td>
                                    <td class=' red'>R</td>
                                    <td class=' gray'>11 - 19 Canary Wharf</td>
                                    <td class=' red'>R</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=''></td>
                                  </tr>
                                <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                    <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                    <td class='red'>7 Annual Leave</td>
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
                                    <td class=''>9</td>
                                    <td class=' black'>8 - 16 North Greenwich</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=' black'>7 - 15 North Greenwich</td>
                                    <td class=' red'>R</td>
                                    <td class=' red'>R</td>
                                    <td class=''></td>
                                </tr>
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
                                      <td class=''>1</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=''></td>
                                    </tr>
                                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                      <td class=''>2</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' gray'>15 - 23 Canary Wharf</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=''></td>
                                    </tr>
                                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                      <td class=''>3</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=''></td>
                                    </tr>
                                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                      <td class=''>4</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' gray'>7 - 15 Canary Wharf</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=''></td>
                                    </tr>
                                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                      <td class=''>5</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=''></td>
                                    </tr>
                                  <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                      <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                      <td class=''>6</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' black'>16 - 24 North Greenwich</td>
                                      <td class=' red'>R</td>
                                      <td class=' gray'>11 - 19 Canary Wharf</td>
                                      <td class=' red'>R</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
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
                                      <td class=''>9</td>
                                      <td class=' black'>8 - 16 North Greenwich</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
                                      <td class=' black'>7 - 15 North Greenwich</td>
                                      <td class=' red'>R</td>
                                      <td class=' red'>R</td>
                                      <td class=''></td>
                                  </tr>
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
                                        <td class=''>1</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=''></td>
                                      </tr>
                                    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                        <td class=''>2</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' gray'>15 - 23 Canary Wharf</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=''></td>
                                      </tr>
                                    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                        <td class=''>3</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=''></td>
                                      </tr>
                                    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                        <td class=''>4</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' gray'>7 - 15 Canary Wharf</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=''></td>
                                      </tr>
                                    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                        <td class=''>5</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=''></td>
                                      </tr>
                                    <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                        <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                        <td class=''>6</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' black'>16 - 24 North Greenwich</td>
                                        <td class=' red'>R</td>
                                        <td class=' gray'>11 - 19 Canary Wharf</td>
                                        <td class=' red'>R</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
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
                                        <td class=''>9</td>
                                        <td class=' black'>8 - 16 North Greenwich</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
                                        <td class=' black'>7 - 15 North Greenwich</td>
                                        <td class=' red'>R</td>
                                        <td class=' red'>R</td>
                                        <td class=''></td>
                                    </tr>
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
                                          <td class=''>1</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=''></td>
                                        </tr>
                                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                          <td class=''>2</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' gray'>15 - 23 Canary Wharf</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=''></td>
                                        </tr>
                                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                          <td class=''>3</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=''></td>
                                        </tr>
                                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                          <td class=''>4</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' gray'>7 - 15 Canary Wharf</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=''></td>
                                        </tr>
                                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                          <td class=''>5</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=''></td>
                                        </tr>
                                      <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                          <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                          <td class=''>6</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' black'>16 - 24 North Greenwich</td>
                                          <td class=' red'>R</td>
                                          <td class=' gray'>11 - 19 Canary Wharf</td>
                                          <td class=' red'>R</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
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
                                          <td class=''>9</td>
                                          <td class=' black'>8 - 16 North Greenwich</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
                                          <td class=' black'>7 - 15 North Greenwich</td>
                                          <td class=' red'>R</td>
                                          <td class=' red'>R</td>
                                          <td class=''></td>
                                      </tr>
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
                                            <td class=''>1</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=''></td>
                                          </tr>
                                        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                            <td class=''>2</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' gray'>15 - 23 Canary Wharf</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=''></td>
                                          </tr>
                                        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                            <td class=''>3</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=''></td>
                                          </tr>
                                        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                            <td class=''>4</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' gray'>7 - 15 Canary Wharf</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=''></td>
                                          </tr>
                                        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                            <td class=''>5</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=''></td>
                                          </tr>
                                        <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

                                            <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
                                            <td class=''>6</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' black'>16 - 24 North Greenwich</td>
                                            <td class=' red'>R</td>
                                            <td class=' gray'>11 - 19 Canary Wharf</td>
                                            <td class=' red'>R</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
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
                                            <td class=''>9</td>
                                            <td class=' black'>8 - 16 North Greenwich</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
                                            <td class=' black'>7 - 15 North Greenwich</td>
                                            <td class=' red'>R</td>
                                            <td class=' red'>R</td>
                                            <td class=''></td>
                                        </tr>

      <?php
        for ($i=0; $i < 25; $i++) {

           include("../css/inc.php");
        }



       ?>


</table>










    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
