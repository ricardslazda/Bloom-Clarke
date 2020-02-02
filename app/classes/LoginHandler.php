<?php


namespace App\classes;


class LoginHandler
{
    public static function login($user){
        if(!Session::has('logged_in') && !Session::has('user')){
            Session::add('logged_in', 'true');
            Session::add('user', $user);
            return true;
        }else{
            echo "User is already logged in";
            return false;
        }
    }
    public static function logout(){
        Session::remove('logged_in');
        Session::remove('user');
    }
    public static function loggedIn(){
        if(Session::has('logged_in') && Session::has('user')){
            return true;
        }else{
            return false;
        }
    }
    public static function user(){
        return Session::get('user');
    }
}