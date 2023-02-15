<?php
namespace App\Model;

class Noticia
{
    //Variables o atributos
    var $key;
    var $title;
    var $slug;
    var $subtitle;
    var $text;
    var $active;
    var $home;
    var $date;
    var $author;
    var $image;

    function __construct($data=null){

        $this->key = ($data) ? $data->key : null;
        $this->title = ($data) ? $data->title : null;
        $this->slug = ($data) ? $data->slug : null;
        $this->subtitle = ($data) ? $data->subtitle : null;
        $this->text = ($data) ? $data->text : null;
        $this->active = ($data) ? $data->active : null;
        $this->home = ($data) ? $data->home : null;
        $this->date = ($data) ? $data->date : null;
        $this->author = ($data) ? $data->author : null;
        $this->image = ($data) ? $data->image : null;

    }

}
