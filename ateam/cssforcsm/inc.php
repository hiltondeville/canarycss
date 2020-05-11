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
      <td class=' black'>23 - 07 Canary Wharf</td>
      <td class=' black'>23 - 07 Canary Wharf</td>
      <td class=' black'>23 - 07 Canary Wharf</td>
      <td class=' black'>23 - 07 Canary Wharf</td>
      <td class=' black'>23 - 07 Canary Wharf</td>

     </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>2</td>
     <td class=' black'>23 - 07 Canary Wharf</td>
     <td class=' black'>23 - 07 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>3</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' black'>15 - 23 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>
     <td class=' black'>07 - 15 Canary Wharf</td>

   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>4</td>
     <td class=' black'>07 - 15 Canary Wharf</td>
     <td class=' black'>07 - 15 Canary Wharf</td>
     <td class=' black'>07 - 15 Canary Wharf</td>
     <td class=' black'>07 - 15 Canary Wharf</td>
     <td class=' black'>07 - 15 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>

   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>5</td>

     <td class=' red'>R</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>



   </tr>
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
