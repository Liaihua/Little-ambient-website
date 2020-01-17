<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.01.20
 * Time: 13:42
 */

$link = mysqli_connect("192.168.200.79", "user", "user", "1131_vov");

function fetch_articles($link)
{
    mysqli_query($link, 'SELECT * FROM table_article');
}

function fetch_categories($link)
{
    mysqli_query($link, 'SELECT * FROM table_category');
}

function fetch_article($id,$link)
{

    if(!isset($id))
        return fetch_categories($link);
    $result = mysqli_query($link, "SELECT * FROM table_article WHERE id = $id");
}