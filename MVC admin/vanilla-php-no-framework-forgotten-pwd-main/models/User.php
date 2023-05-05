<?php
require_once '../libraries/Database.php';

class User {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($username){
        $this->db->query('SELECT * FROM users_treballador WHERE treballador = :treballador');
        $this->db->bind(':treballador', $username);
//        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User
    public function register($data){
        $this->db->query('INSERT INTO users_treballador (id_treballador, treballador, password, created_at,targeta) 
        VALUES (:Uid, :name, :password, :null, :null)');
        //Bind values
        $this->db->bind(':name', $data['treballador']);
        //$this->db->bind(':email', $data['usersEmail']);
        $this->db->bind(':Uid', $data['id_treballador']);
        $this->db->bind(':password', $data['password']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->usersPwd;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE users_treballador SET password=:pwd WHERE treballador=:name');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':name', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}