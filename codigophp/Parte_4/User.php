<?php

class User{

    // Properties
    private $username;
    private $email;
    private $password;

    // Getters / setters

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username): void{
        $this->username = $username;
    }

    public function setEmail($email): void{
        $this->email = $email;
    }

    public function setPassword($password): void{
        $this->password = $password;
    }

    // Constructors

    public function __construct( $username, $email, $password) {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;

    }

    // Methods


    public function login(){

        $connection = mysqli_connect("dbP4", "user", "user", "quizz-app-p4");
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $sql = "select password from users where username=?";

        $prepared = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($prepared, "s", $username);
        mysqli_stmt_execute($prepared);
        mysqli_stmt_bind_result($prepared, $storedPassword);
        mysqli_stmt_fetch($prepared);

        if (password_verify($password, $storedPassword)){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: quizFiles/index.php");
            mysqli_query($connection, $sql);
            mysqli_close($connection);
            exit;
        }

        mysqli_query($connection, $sql);
        mysqli_close($connection);
        return  false;
    }



    public function register(){
        $connection = mysqli_connect("dbP4", "user", "user", "quizz-app-p4");
        $newUsername = mysqli_real_escape_string($connection, $_POST['newUsername']);
        $newEmail = mysqli_real_escape_string($connection, $_POST['newEmail']);
        $newPassword = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $newPasswordEncripted = password_hash($newPassword, PASSWORD_DEFAULT);

        $sql = "insert into users (username, email, password) values
                ('$newUsername',
                 '$newEmail',
                 '$newPasswordEncripted')";

        mysqli_query($connection, $sql);
        mysqli_close($connection);
    }



}