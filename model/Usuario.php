<?php
namespace App\Model;

class Usuario {

    //Variables o atributos
    var $key;
    var $username;
    var $password;
    var $access_date;
    var $active;
    var $admin;
    var $news;

    function __construct($data=null){

        $this->key = ($data) ? $data->key : null;
        $this->username = ($data) ? $data->username : null;
        $this->password = ($data) ? $data->password : null;
        $this->access_date = ($data) ? $data->access_date : null;
        $this->active = ($data) ? $data->active : null;
        $this->admin = ($data) ? $data->admin : null;
        $this->news = ($data) ? $data->news : null;

    }

}