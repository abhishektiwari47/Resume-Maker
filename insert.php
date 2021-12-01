<?php

$dbhost='localhost';
$dbname='tutorials';
$dbusername='root';
$dbpass = '';

$mysqli = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<link rel="stylesheet" href="resume.css">

<body>

    <h1 class="heading"><font style="color:#0a5c7c;">Fill, Create and Print... That's It!</font></h1>



    <fieldset class="field">
   
   
    <div class="docker">
  
    <fieldset> 
    <legend><b>Contact</b></legend> 
    <div class="container">
    <form action ="function.php" method = "POST">
         
        Name<br><input type ="text" name="name" id="name"  required placeholder="Abhishek Tiwari"><br>
        Recent Job/Education<br><input type ="text" name="position"  id="position"  required placeholder="Software Developer"><br>
        Email<br><input type ="email" name="email"   id="email"required placeholder="abhitiwari3010@gmail.com"><br>
        Mobile<br><input type ="tel" name="mobile"  id="mobile"  required placeholder="9568743367"><br>
        <p>Address<br><input type ="text" name="address" id="address" cols="50" rows="3" required placeholder="City, State, Country"></p>
        LinkedIn<br><input type ="url" name="linkedin"  required placeholder="www.linkedin.com/in/ 
abhishek-tiwari-a812a7216
"><br>
        GitHub<br><input type ="url" name="github" required placeholder="https://github.com/abhishektiwari47" https://github.com/abhishektiwari47/><br>
</div>
</fieldset>
<br><br>



<fieldset>
<legend><b>Experience</b></legend> 
<div class="container"> 
<br><input type ="text" name="exname" id="exname" cols="5" rows="1" required placeholder="Microsoft">
<input type ="text" name="ex2name" id="ex2name" cols="5" rows="1" required placeholder="Google">
<br><textarea name="ex" id="ex" cols="100" rows="10" required placeholder="Web Developer at Cool Magics(2018-2021)
*Worked on new search feature.
*Worked on enhancing the speed of website."></textarea>

<textarea name="ex2" id="ex2" cols="100" rows="10" required placeholder="Web Developer at Cool Magics(2018-2021)
*Worked on new search feature.
*Worked on enhancing the speed of website."></textarea>

</div>
</fieldset>       
 <br><br>



<fieldset>
 <legend><b>Education</b></legend>
<div class="container">   

<br><input type ="text" name="edu" id="edu" cols="50" rows="1" required placeholder="75% in Intermediate, Agra Public School"></textarea>
<br><input type ="text" name="higher" id="higher" cols="50" rows="1" required placeholder="80% in Bechelor of Technology, Computer Science, UNSIET, VBSPU Jaunpur"></textarea>
<br><input type ="text" name="higher2" id="higher2" cols="50" rows="1"  placeholder="90% in Master of Technology, Computer Science , IIT Bombay"></textarea>
       
</div> </fieldset><br><br>
        


        <fieldset>
<legend><b>Skills</b></legend> 
<div class="container">       
        
<br><input type ="text" name="skill" id="skill" cols="50" rows="5" required placeholder="C++">
<input type ="text" name="skill2" id="skill2" cols="50" rows="5" required placeholder="Node.js">
<input type ="text" name="skill3" id="skill3" cols="50" rows="5" placeholder="Python">
<input type ="text" name="skill4" id="skill4" cols="50" rows="5" placeholder="Java">
<input type ="text" name="skill5" id="skill5" cols="50" rows="5" placeholder="BootStrap">
<input type ="text" name="skill6" id="skill6" cols="50" rows="5" placeholder="MySQL">
       
</div></fieldset><br><br>
        


 <fieldset>
<legend><b>Projects</b></legend> 
<div class="container">        
<br><input type ="text" name="other" id="other" cols="5" rows="1" required placeholder="Music App">
<input type ="text" name="other2" id="other2" cols="5" rows="1" required placeholder="Blogging Website">
<br><textarea name="otherdes" id="otherdes" cols="100" rows="10" required placeholder="A Music Application with auto song suggetion feature. || A Music Application with auto playlist creation feature."></textarea>
<textarea name="otherdes2" id="otherdes2" cols="100" rows="10" required placeholder="A blogging website with auto correction feature. || A blogging website with auto best blog suggestion feature."></textarea>
      
</div></fieldset><br><br>

 
<fieldset>
<legend><b>Experties</b></legend> 
<div class="container">       
<input type ="text" name="aoe" id="aoe" cols="50" rows="5" required placeholder="Linux">      
<input type ="text" name="aoe2" id="aoe2" cols="50" rows="5" required placeholder="Android Development">
<input type ="text" name="aoe3" id="aoe3" cols="50" rows="5" placeholder="AWS">
<input type ="text" name="aoe4" id="aoe4" cols="50" rows="5" placeholder="Git and GitHub">
<input type ="text" name="aoe5" id="aoe5" cols="50" rows="5" placeholder="Docker and Kubernetes">
<input type ="text" name="aoe6" id="aoe6" cols="50" rows="5" placeholder="Internet of Things">
                                       
        </div></fieldset><br><br>
<div class="sub">         
        <input type = "submit" name = "submit" value="CREATE">
</div>
    </form>
    </div>
</fieldset>

    

</body>
</html>