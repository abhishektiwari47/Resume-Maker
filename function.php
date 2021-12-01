<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Maker</title>

</head>

<body>
   

    <?php

$dbhost='localhost';
$dbname='tutorials';
$dbusername='root';
$dbpass = '';

$mysqli = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

?>

<?php
      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
          $position=$_POST['position'];
          $email=$_POST['email']; 
          $mobile=$_POST['mobile'];
          $address=$_POST['address'];
          $linkedin=$_POST['linkedin'];
          $github=$_POST['github'];
          $ex=$_POST['ex'];
          $exname=$_POST['exname'];
          $ex2=$_POST['ex2'];
          $ex2name=$_POST['ex2name'];
          $edu=$_POST['edu'];
          $higher=$_POST['higher'];
          $higher2=$_POST['higher2'];

          $skill=$_POST['skill'];
          $skill2=$_POST['skill2'];
          $skill3=$_POST['skill3'];
          $skill4=$_POST['skill4'];
          $skill5=$_POST['skill5'];
          $skill6=$_POST['skill6'];

          $other=$_POST['other'];
          $other2=$_POST['other2'];
          $otherdes=$_POST['otherdes'];
          $otherdes2=$_POST['otherdes2'];

          $aoe=$_POST['aoe'];
          $aoe2=$_POST['aoe2'];
          $aoe3=$_POST['aoe3']; 
          $aoe4=$_POST['aoe4'];
          $aoe5=$_POST['aoe5'];
          $aoe6=$_POST['aoe6'];
        
          $result=mysqli_query($mysqli, "INSERT INTO `record` (`id`,`name`,`position`,`email`,`mobile`,`address`,`linkedin`,`github`,`ex`,`exname`,`ex2`,`ex2name`,`edu`,`higher`,`higher2`,`skill`,`skill2`,`skill3`,`skill4`,`skill5`,`skill6`,`other`,`other2`,`otherdes`,`otherdes2`,`aoe`,`aoe2`,`aoe3`,`aoe4`,`aoe5`,`aoe6`) 
          values('','$name','$position','$email','$mobile','$address','$linkedin','$github','$ex','$exname','$ex2','$ex2name','$edu','$higher','$higher2','$skill','$skill2','$skill3','$skill4','$skill5','$skill6','$other','$other2','$otherdes','$otherdes2','$aoe','$aoe2','$aoe3','$aoe4','$aoe5','$aoe6')");
          if($result)
          {
              echo "";
          }
          else
          {
              echo "Some Problem Occured At Server Side";
          }
      }

    ?>

    





<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "tutorials";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn)
  {
      die("Sorry Cann't Connect To The Local Server".mysqli_connect_error());
  } 
  else
  {
      
      echo "";
  }

 
  $sql = "SELECT * FROM `record`";
  $result = mysqli_query($conn, $sql);


  $num =mysqli_num_rows($result);
 
  $sql = "SELECT * FROM `record` WHERE id = '$num'";
  $result = mysqli_query($conn, $sql);
  if($num>0)
  {

   $row = mysqli_fetch_assoc($result);
  }
?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title></title>
</head>
<body>
    <style>
table {
  
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  
  padding: 0px 0px 0px 10px;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
  
}



#email,#mobile,#address,#github,#linkedin{
    text-align: right;
    vertical-align: bottom;
    font-weight: lighter;
    font-size:20px;
    padding: 0px 15px 10px 0px;
    font-style:italic;
}
#name{
    font-size: 55px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: lighter;
}

#position{
    font-weight: lighter;
    font-size:21px;
    vertical-align: top;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
}
#about
{
    font-size:19px;
    vertical-align: bottom;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
}
.hr{

    width:100%;
    height:1px;
    background-color:black;
}
.heading{
    font-size: 30px; 
    font-weight: bold;
}
.subheading{
  font-size: 25px; 
    font-weight:normal;
}
.sp{
  font-size: 19px; 
    font-weight:bolder;
}
.heading2{
    font-size: 28px; 
    font-weight: bold;
    vertical-align: bottom;
}




</style>
</head>
<body>
 <fieldset>
    
<table>
  <tr>
    <th id="name" ><?php echo $row['name']?></th>
    <th></th>
    <th id="email" ><?php echo $row['email']?></th>
  </tr>
  <tr>
    <td id="position" ><?php echo $row['position'] ?></td>
    <td></td>
    <td id="mobile"  ><?php echo $row['mobile']?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td id="address"><?php echo $row['address']?></td>
  </tr>
  <tr>
    <td id="about">An enthusiasic learner with passion in growing my self as well the institution.</td>
    <td></td>
    <td id="github"><?php echo $row['github']?></td>
  </tr>
  <tr>
    <td id="about">Experienced in the related skills. </td>
    <td></td>
    <td id="linkedin"><?php echo $row['linkedin']?></td>
  </tr>
  <tr>
    <td></td>
    
  </tr>
  <tr>
    <td><br></td>
    <td><br></td>
    <td><br></td>
  </tr>
  <tr>
    <td class="heading" >WORK EXPERIENCE</td>
    <td></td>
    <td class="heading">SKILLS</td>
  </tr>

  <tr>
    <td><hr class="hr"></td>
    <td> </td>
    <td><hr class="hr"></td>
  </tr>
  
  <tr>
    <td class="subheading"><?php echo $row['exname']?></br></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['skill']?></font></td>
  </tr>

  <tr>
    <td><?php echo $row['ex']?></td>
    <td></td>
    <td class="sp" style="height: 2.2em;"><font color="#737475"><?php echo $row['skill2']?></font></td>
  </tr>

  <tr>
    <td class="subheading"><?php echo $row['ex2name']?></br></td>
    <td></td>
    <td class="sp" style="height: 2.2em;"><font color="#737475"><?php echo $row['skill3']?></font></td>
 </tr>

  <tr>
    <td><?php echo $row['ex2']?></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['skill4']?></font></td>
 </tr>


  <tr>
    <td></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['skill5']?></font></td>
   </tr>
  <tr>
    <td></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['skill6']?></font></td>
   </tr>



  <tr>
    <td class="heading">PROJECTS</td>
    <td></td>
    <td class="heading">EXPERTIES</td>
  </tr>

  <tr>
    <td><hr class="hr"></td>
    <td> </td>
    <td><hr class="hr"></td>
  </tr>
  
  <tr>
    <td class="subheading"><?php echo $row['other']?></br></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe']?></font></td>
   </tr>

  <tr>
    <td><?php echo $row['otherdes']?></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe2']?></font></td>
   </tr>

  <tr>
    <td class="subheading"><?php echo $row['other2']?></br></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe3']?></font></td>
  </tr>

  <tr>
    <td><?php echo $row['otherdes2']?></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe4']?></font></td>
  </tr>
 
   
  
  <tr>
  <td class="heading2">EDUCATION</td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe5']?></font></td>
   </tr>
 
  <tr>
    <td><?php echo $row['edu']?></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"><?php echo $row['aoe6']?></font></td>
   </tr>
 
  <tr>
    <td><?php echo $row['higher']?></td>
    <td></td>
    <td class="sp"  style="height: 2.2em;"><font color="#737475"></font></td>
   
</tr>
 <tr>
    <td><?php echo $row['higher2']?></td> 
    <td></td>
    <td style="height: 2.2em;"><br></td>
   
</tr>
</table>

</fieldset>
</body>
</html>
