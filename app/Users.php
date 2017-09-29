<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * Регистрация пользователя 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */
    public static function registr($name, $email, $password)
    {

        $result = DB::insert("INSERT INTO `users` (`name`,`email`,`password`) VALUES (?,?,?)",[
                    $name,$email,$password
                ]);
        if ($result) {
        	return $result;
        }

        
    }

    /**
     * Редактирование данных пользователя
     * @param string $name
     * @param string $password
     */
    public static function edit($id,$name,$email,$password)
    {
        $result = DB::update("UPDATE `users` SET `name`= :name,`email`=:email,`name`=:name WHERE id=:id",['name'=>$name ,'email'=>$email ,'password'=> $password ]);
        if ($result) {
        	return $result;
        }
        
    }
    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : ingeger user id or false
     */
    public static function checkUserData($email, $password)
    {

        $result = DB::select("SELECT * FROM `users` WHERE email=:email AND password = :password",['email'=>$email,'password'=>$password]);
        if ($result) {
        	return $result['id'];
        }

        

        return false;
    }
     public static function checkUserPas($email, $password)
    {

        $result = DB::select("SELECT * FROM `users` WHERE email=:email AND password = :password",['email'=>$email,'password'=>$password]);
        if ($result) {
        	return $result;
        }
    }

    /**
     * Запоминаем пользователя
     * @param string $email
     * @param string $password
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
                return true;
        }
        return false;
    }
    public static function passwordMatch($email, $password)
    {
        $db_pas = checkUserPas($email, $password);
        $result_pas = password_verify($password, $db_pas);

    }

    /**
     * Проверяет email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {

        $result = DB::select("SELECT COUNT(*) FROM users WHERE email = :email",['email'=>$email]);
        
    }

    /**
     * Returns user by id
     * @param integer $id
     */
    public static function getUserById($id)
    {
        if ($id) {
            $result = DB::select("SELECT * FROM `users` WHERE id=:id",['id'=>$id]);

           if ($result) {
           	return $result;
           }
        }
    }
    public static function isAdmin($id)
    {
        if ($id) {
            $result = DB::select("SELECT * FROM `users` WHERE id=:id",['id'=>$id]);
            if ($result) {
            	return $result;
            }


        }
    }
public static function isAz($name)
{
    if (preg_match('~[^A-Za-z-]~', $name)) {
        return true;
    } else{
        return false;
    }





}
}
