<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.01.20
 * Time: 13:42
 */

function fetch_articles($link, $category) // Получение списка статей, совпадающих по категории (или всех, если категории нет)
{
    $query = "SELECT table_article.id, title, intro, image_url, category_id, category_name FROM table_article, table_category WHERE table_category.id = table_article.category_id";
    if(isset($category))
        $query .= "AND WHERE category_id = $category";

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