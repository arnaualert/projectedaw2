<?php

    require_once '../models/User.php';
    require_once '../helpers/session_helper.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'treballador' => trim($_POST['treballador']),
                //'usersEmail' => trim($_POST['usersEmail']),
                'id_treballador' => trim($_POST['id_treballador']),
                'usersPwd' => trim($_POST['usersPwd']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Validate inputs
            if(empty($data['treballador']) || 
            empty($data['usersPwd']) || empty($data['pwdRepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("../signup.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['id_treballador'])){
                flash("register", "Invalid username");
                redirect("../signup.php");
            }

            //if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
            //    flash("register", "Invalid email");
            //    redirect("../signup.php");
            //}

            if(strlen($data['usersPwd']) < 6){
                flash("register", "Invalid password");
                redirect("../signup.php");
            } else if($data['usersPwd'] !== $data['pwdRepeat']){
                flash("register", "Passwords don't match");
                redirect("../signup.php");
            }

            //User with the same email or password already exists
            if($this->userModel->findUserByEmailOrUsername($data['treballador'])){
                flash("register", "Username already taken");
                redirect("../signup.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                redirect("../login.php");
            }else{
                die("Something went wrong");
            }
        }
        public function login(){
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            //Init data
            $data=[
                'name/email' => trim($_POST['name/email']),
                'usersPwd' => trim($_POST['usersPwd'])
            ];
    
            if(empty($data['name/email']) || empty($data['usersPwd'])){
                flash("login", "Please fill out all inputs");
                header("location: ../login.php");
                exit();
            }
    
            //Check for user/email
            if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
                //User Found
                $loggedInUser = $this->userModel->login($data['name/email'], $data['usersPwd']);
                if($loggedInUser){
                    //Create session
                    $this->createUserSession($loggedInUser);
                }else{
                    flash("login", "Password Incorrect");
                    redirect("../login.php");
                }
            }else{
                flash("login", "No user found");
                redirect("../login.php");
            }
        }

    public function createUserSession($user){
       // $_SESSION['id_treballador'] = $user->usersId;
        $_SESSION['treballador'] = $user->usersName;
       // $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("../index.php");
    }

    public function logout(){
        unset($_SESSION['id_treballador']);
        unset($_SESSION['treballador']);
       // unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("../../../../index.html");
    }
}

    $init = new Users;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../index.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../../../../../index.html");
        }
    }

    