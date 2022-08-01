
<style>
  a{
    text-decoration: none;
  }
</style>
<?php

  include_once("Function.php");
  $fetchdata=new Connection();

?>
 <center style="margin-top:100px;">
    <h4>Click on your referral name to register</h4>
 <table style='text-align:center;border-bottom black 2px;'>
  <tr style='background-color:gray;text-align:center;'>
    <th>S/N</th>
    <th>Name</th>
    <th>Email</th>
    <th>ReferenceCode</th>
    <th>ReferralName</th>
    <th>Total User(s) Referred</th>
   
  </tr>
<?php
              $sql=$fetchdata->fetchdata();
              $cnt=1;
        while($row=mysqli_fetch_array($sql))
        {
?>
            <tr>
              <td style='border-bottom: 1px solid black;'><?php echo $cnt;?></td>
              <td style='border-bottom: 1px solid black;'><a href="UserRegistration.php?ReferralCode=<?php echo $row['ReferenceCode'];?>" style="text"><?php echo $row['FullName'];?></a></td>
              <td style='border-bottom: 1px solid black;'><?php echo $row['Email'];?></td>
              <td style='border-bottom: 1px solid black;'><?php echo $row['ReferenceCode'];?></td>
              <td style='border-bottom: 1px solid black;'><?php echo $row['referralname'];?></td>
              <td style='border-bottom: 1px solid black;'><?php echo $row['PeopleReferred'];?></td>
            </tr>
<?php

            $cnt=$cnt+1;
      } 
?>
</table>
</center>