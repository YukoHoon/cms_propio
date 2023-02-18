<?php
namespace App\Model;

class Usuario {

    //Variables o atributos
    var $id;
    var $username;
    var $password;
    var $access_date;
    var $activen;
    var $aduser;
    var $news;

    function __construct($data=null){

        $this->id = ($data) ? $data->id : null;
        $this->username = ($data) ? $data->username : null;
        $this->password = ($data) ? $data->password : null;
        $this->access_date = ($data) ? $data->access_date : null;
        $this->activen = ($data) ? $data->activen : null;
        $this->aduser = ($data) ? $data->aduser : null;
        $this->news = ($data) ? $data->news : null;

    }

}