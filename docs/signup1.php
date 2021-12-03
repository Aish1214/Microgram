<?php

class signup


{
    private $error = "";
    public  function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error = $this->error . $key . " is empty!";

            }


//
//
//            if ($key == "first_name") {
//                if (is_numeric($value)) {
//                    $this->error = $this->error . " firstname can't have numberical!!";
//                }
//
////                if (strstr($value, " ")){
////                    $this->error = $this->error . "first name can't have space";
////                }
//
//            }
//
//
//
//            if ($key == "last_name")
//            {
//                if (is_numeric($value))
//                {
//                    $this->error = $this->error . "invalid last name!!";
//                }
//
//            }
        }


        if($this->error == "")
        {

            $this->create_user($data);
        }else{
            return $this->error;
        }

    }

    public function create_user($data)
    {


        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $gender = $data['gender'];

        $email = $data['email'];

        $password = $data['password'];


        $url_address = strtolower($first_name) . "." . strtolower($last_name);
        $userid = $this->create_userid();

        $query = "insert into users (userid,first_name,last_name,gender,email,password,url_address)
          values ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";

        $DB = new Database();
        $DB->save($query);

    }


    private function create_userid()
    {
        $length = rand(4,10);
        $number = "";
        for($i=0; $i<$length; $i++)
        {
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }
}