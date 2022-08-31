<?php

namespace  app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;



class AuthController extends  Controller
{
    public function login(Request  $request)
    {
        if($request -> isPost())
        {
            if(isset($_POST["login"]))
            {
                if($_POST["select"]=="admin")
                {
                    return $this->render('admin');
                }
                if($_POST["select"]=="doctor")
                {
                    return $this->render('doctorRegister');
                }
                if($_POST["select"]=="Patient")
                {
                    return $this->render('home');
                }
            }
        }

        return $this->render('login');
     }





    public function register(Request  $request)
    {
        if($request -> isPost())
        {
           return 'Handeled submited Data ';

        }
      return $this->render('register');
    }






    public function doctorRegister(Request  $request)
    {
        if($request -> isPost())
        {
            return 'Handeled submited Data ';
        }
        return $this->render('doctorRegister');
    }





    public function part(Request  $request)
    {
        if($request -> isPost())
        {
            return 'Handeled submited Data ';
        }

        return $this->render('part');
    }




    public function admin(Request  $request)
    {


        if(isset($_POST["part"]))
        {
            return $this->render('part');
        }
        if(isset($_POST["doctor"]))
        {
            return $this->render('showDoctor');
        }
        if(isset($_POST["admin"]))
        {
            return $this->render('showAdmin');
        }


        return $this->render('admin');
    }




    public function showAdmin(Request  $request)
    {
        if($request -> isPost())
        {
            return 'Handeled submited Data ';
        }

        return $this->render('showAdmin');
    }




    public function showDoctor(Request  $request)
    {
        if($request -> isPost())
        {
            return 'Handeled submited Data ';
        }

        return $this->render('showDoctor');
    }


}