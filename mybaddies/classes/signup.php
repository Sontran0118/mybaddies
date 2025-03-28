<?php

class Signup 
{

  private $error="";

  public function evaluate($data)
  {
   
    foreach ($data as $key => $value){
        if(empty($value)){
            $this->error = $this->error . $key . " is empty<br>";
        }

        if($key == "email")
        {
            if(!preg_match("/([\w\-]+\@[\w\]+\.[\W\-]+)/",$value)){
                $this->error = $this->error ."invalid email address!<br>";
            }
        }

        if($key == "first_name")
        {
            if(is_numeric($value)){
                $this->error = $this->error ."first name cannot be a number!<br>";
            }
        }

        if($key == "last_name")
        {
            if(is_numeric($value)){
                $this->error = $this->error ."last name cannot be a number!<br>";
            }
        }
    }



    if($this->error == "")
    {

        $this->create_user($data);

    } else{
        return $this->error;
    }

  }

  public function create_user($data)
  {
    
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $email = $data['email'];
    $password = $data['password'];


    $url_address = strtoLower($first_name) . "." . strtoLower($last_name);
    $userid = $this->create_userid();

    

    $query = "insert into users (user_id,first_name,last_name,gender,email,password,url_address)
     values ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
    
    $DB = new Database();
    $DB->save($query);
   
  
  }

  private function create_userid() {
    $length = rand(4, 19);
    $number = ""; // Initialize the number variable

    for ($i = 0; $i < $length; $i++) { // Corrected $length
        $new_rand = rand(0, 9);
        $number .= $new_rand; // Append the random digit
    }

    return $number; // Return the generated user ID
}


}

