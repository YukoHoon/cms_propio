<?php
namespace App\Model;

class Noticia
{
    //Variables o atributos
    var $id;
    var $title;
    var $slug;
    var $subtitle;
    var $full_text;
    var $activen;
    var $home;
    var $access_date;
    var $author;
    var $image;

    function __construct($data=null){

        $this->id = ($data) ? $data->id : null;
        $this->title = ($data) ? $data->title : null;
        $this->slug = ($data) ? $data->slug : null;
        $this->subtitle = ($data) ? $data->subtitle : null;
        $this->full_text = ($data) ? $data->full_text : null;
        $this->activen = ($data) ? $data->activen : null;
        $this->home = ($data) ? $data->home : null;
        $this->access_date = ($data) ? $data->access_date : null;
        $this->author = ($data) ? $data->author : null;
        $this->image = ($data) ? $data->image : null;

    }

}
