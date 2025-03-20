<?php

include("classes/connect.php");
include("classes/login.php");

$email = "";
$password = "";

 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {

  $login = new Login();
  $result = $login->evaluate($_POST);

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

    header("Location: profile.php");
    die;

  }
  $email = $_POST['email'];
  $password = $_POST['email'];
 }



 

?>



<html>

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
      background-color: white;width: 800px;height: 200px; margin: auto; margin-top: 50px;
      padding: 10px;
      padding-top: 70px;
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

     <div id ="bar" >
       <div style="font-size: 40px;">My baddies </div>
       <div id = "Signup_button" ">Signup</div>
     </div>

     <div id="bar2">

      
      <form method="post">
        Log in into my baddies<br><br>
        <input name="email" value="<?php echo $email ?>" "type="text" id="text" placeholder="Email or Phone number" ><br><br>
        <input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password"><br><br>
        <input type="submit" id="button" value="Log in" >
      </form>


     </div>
     


   </body>


</html>