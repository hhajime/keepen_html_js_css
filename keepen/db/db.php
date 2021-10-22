<?php
    session_start();
    error_reporting(E_ALL);
ini_set("display_errors",1);
    header('Content-Type: text/html; charset=utf-8');

    error_reporting(E_ALL);
ini_set("display_errors",1);
    $db = new mysqli("localhost","root","root","bbs");
    error_reporting(E_ALL);
ini_set("display_errors",1);
    $db->set_charset("utf8");

    error_reporting(E_ALL);
ini_set("display_errors",1);
    function query($query)
    {
        global $db;
        return $db->query($query);
    }
    /*if($db->connect_errno){
        echo "MySQL 접속 실패";
    }else{
        echo "MySQL 접속 성공";
    }*/
    ?>