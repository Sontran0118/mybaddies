<?php

class Login
{

  private $error="";

  public function evaluate($data)
  {

    $email = addslashes($data['email']);
    $password = addslashes($data['password']);


    $query = "select * from users where email = '$email' limit 1";
    
    $DB = new Database();
    $result = $DB->read($query);

    if($result)
    {
        $row = $result[0];
        if($password == $row['password'])
        {
            //create a session data
            session_start();
            $_SESSION['mybaddies_user_id'] = $row['user_id'];

        }else{
            $this->error .= "Wrong password or email!<br>";
        }

    }
    else 
    {
         $this->error .= "No such email or password was found!<br>";
    }
    return $this->error;
   
    }



    public function check_login($id)
    {

        $query = "select user_id from users where user_id = '$id' limit 1";
        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
           return true;
        }
          return false;

    }
}




