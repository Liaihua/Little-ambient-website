<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.01.20
 * Time: 13:42
 */

$link = mysqli_connect("192.168.200.79", "user", "user", "1131_vov");

function fetch_articles($link, $category) // Получение списка статей, совпадающих по категории (или всех, если категории нет)
{
    // Нужно юзать джойны ----------------- v вот для этого пацана
    $query = "SELECT id, title, intro, category_id, image_url FROM table_article";
    if(isset($category))
        $query .= "WHERE category_id = $category";
    $result = mysqli_query($link, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function fetch_categories($link) // Получение списка категорий
{
    $result = mysqli_query($link, 'SELECT * FROM table_category');
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function fetch_article($link,$id) // Получение текста статьи
{
    $result = mysqli_query($link, "SELECT * FROM table_article WHERE id = $id");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}