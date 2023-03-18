<?php

    class RegisterUser
    {
        public $name;
        public $email;
        public $username;
        public $pass;
        public $Cpass;
        public $gender;
        public $mobile;
        public $error;
        public $success;
        public $stored_users;
        public $storage="../Data/data.json";
        public $new_user;

        public function __construct($name, $email, $username, $pass, $Cpass, $gender, $mobile)
        {
            $this->name = filter_var($name, FILTER_SANITIZE_STRING);
            $this->email = filter_var($email, FILTER_VALIDATE_EMAIL);
            $this->username = filter_var($username, FILTER_SANITIZE_STRING);
            $this->pass = $pass;
            $this->Cpass = $Cpass;
            $this->gender = $gender;
            $this->mobile = $mobile;
            $this->stored_users = json_decode(file_get_contents($this->storage), true);

            $this->new_user = [
                "name" => $this->name,
                "email" => $this->email,
                "username" => $this->username,
                "pass" => $this->pass,
                "gender" => $this->gender,
                "mobile" => $this->mobile,
            ];

            if($this->checkFieldValues())
            {
                $this->insertUser();
            }
        }

        public function checkFieldValues()
        {
            if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->pass) || empty($this->Cpass) || empty($this->gender) || empty($this->mobile))
            {
                $this->error = "<label class='text-danger'>*Please fillup the form correctly.</label>";
                return false;
            }
            else
            {
                return true;
            }
        }

        public function usernameExists()
        {
            foreach($this->stored_users as $user)
            {
                if($this->username == $user['username'])
                {
                    $this->error = "<label class='text-danger'>Username already taken, choose another one</label>";
                    return true;
                }
            }
            return false;
        }

        public function emailExists()
        {
            foreach($this->stored_users as $user)
            {
                if($this->email == $user['email'])
                {
                    $this->error = "<label class='text-danger'>Email already taken, choose another one</label>";
                    return true;
                }
            }
            return false;
        }

        public function confirmPassword()
        {
            if($this->pass != $this->Cpass)
            {
                $this->error = "Password did not match!";
                return true;
            }
            else
            {
                return false;
            }
        }

        public function insertUser()
        {
            if(($this->usernameExists() || $this->emailExists()) == false)
            {
                array_push($this->stored_users, $this->new_user);
                if(file_put_contents($this->storage, json_encode($this->stored_users)))
                {
                    return $this->success = "Successfully registered";
                }
                else
                {
                        return $this->error = "Something went wrong, please try again";
                }
                
            }
        }
    }
    ?>