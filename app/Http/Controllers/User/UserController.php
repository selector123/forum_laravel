<?php

namespace App\Http\Controllers\User;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showlogin()
    {
        $email = '';
        $password = '';
        if (isset($_SESSION['user'])) {
            $id = $_SESSION['user'];
            $username = User::getUserById($id);
        }
        
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!Users::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!Users::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (!Users::checkUserPas($email, $password)) {
                $errors[] = 'Пароли не совпадают!';
            }


            
            // Проверяем существует ли пользователь
            $userId = Users::checkUserData($email, $password);
            $isadmin = Users::isAdmin($userId);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                if ($isadmin['role'] == 'admin') {
                    Users::auth($userId);
                    header("Location: /adminpanel/"); 
                } else{
                // Если данные правильные, запоминаем пользователя (сессия)
                Users::auth($userId);
                $result = true;
                // Перенаправляем пользователя в закрытую часть - кабинет 
                
            }
            }
            }
    	if (view()->exists('v_userlogcontent')) {
    		#если файл существует
    		return view('v_userlogcontent',['title'=>'Вход','errors'=>@$errors,'result'=>@$result]);//key=>value
    	}
    
}

    public function showregistration()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            
            if (!Users::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (Users::isAz($name)) {
                $errors[] = 'В имени пользователя разрешены только буквы английского алфавита';
            }
            
            if (!Users::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!Users::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (Users::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if ($errors == false){
                $result = Users::registr($name, $email, $password);
                if ($result) {
                echo 'OK';
            }
            }
            
        }
    	if (view()->exists('v_showuserregcontent')) {
            #если файл существует
            return view('v_showuserregcontent',['title'=>'Вход','errors'=>@$errors,'result'=>@$result]);//key=>value
        }
    }
    public function showcabinet()
    {
        if (view()->exists('v_showcabinetcontent')) {
            #если файл существует
            return view('v_showcabinetcontent',['title'=>'Вход','errors'=>@$errors,'result'=>@$result]);//key=>value
        }
    }
}
