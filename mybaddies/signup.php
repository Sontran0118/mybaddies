<?php

include("classes/connect.php");
include("classes/signup.php");

$first_name = "";
$last_name = "";
$gender = "";
$email= "";
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {

  $signup = new Signup();
  $result = $signup->evaluate($_POST);

  if($result !=""){
    echo "<div style='text-align: center;
    font-size: 12px;
    color: white;
    background-color: grey;'
    >";


    echo "The following errors occur:  <br>";
    echo $result;
    echo "</div>";
  }else{

    header("Location: login.php");
    die;

  }

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
 }



 

?>

 
  




<html>

   <title>
    My baddies|Sign Up
   </title>

   <head>
    <title>baddies</title>
   </head>

   <style>
    #bar{height:100px; 
      background-color:rgb(15, 106, 148);
      color: rgb(236, 226, 226); 
  
    }
    #Signup_button{
      background-color: rgb(90, 155, 5);
      width: 70px;
      text-align: center;
      padding: 4px;
      border-radius: 4px;
      float: right;
    }

    #bar2{
      background-color: white;width: 800px;height: auto; margin: auto; margin-top: 50px;
      padding: 10px;
      padding-top: 70px;
      padding-bottom: 70px;
      text-align: center;
      font-family: tahoma;

    }

    #text{
      height: 40px;
      width: 300px;
      border-radius: 4px;
      border: solid 1px rgb(224, 221, 221);

    }

    #button{
      height: 40px;
      width: 300px;
      border-radius: 4px;
      border: solid 1px rgb(224, 221, 221);
      background-color:rgb(15, 106, 148);
      color: white;
    }
    
   </style>
   <body style="font-family: tahoma; background-color: #e9ebee;">

     <div id ="bar">
       <div style="font-size: 40px;">My baddies </div>
       <div id = "Signup_button" ">Log in</div>
     </div>

     <div id="bar2" >
       
      <span style="font-weight: bold;">Sign up into my baddies </span> <br><br>

      <form method="post" action="signup.php">
          <input value = "<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name" ><br><br>
          <input value = "<?php echo $last_name ?>"name="last_name"type="text" id="text" placeholder="Last Name" ><br><br>
          <span style="font-size: normal;">Gender: </span><br>
          <select name="gender" id="text" > 
            <option> <?php echo $gender ?></option>
            <option> Male</option>
            <option> Female</option>
          </select>
          <br><br>
          <input value = "<?php echo $email ?>"name="email" type="text" id="text" placeholder="Email or Phone number" ><br><br>
          <input name="password"type="password" id="text" placeholder="Password"><br><br>
          <input name="password2"type="password" id="text" placeholder="Confirm Password"><br><br>
          <input type="submit" id="button" value="Sign up" >
      </form>


     </div>
     


   </body>


</html>