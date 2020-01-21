<?php
require_once("database_layer.php");

$link = mysqli_connect("192.168.200.79", "user", "user", "1131_vov");

function format_text($string_parameter)
{
    return "<p class='card-text'>$string_parameter</p>";
}

function format_article_card($article) // для генерации превью статьи
{
    echo
                "<div class=\"card\" style=\"background-color:#00000011;border:none; border-radius: 0%;\">
                    <img src=\"". $article["image_url"] . "\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title ambient_genre\">" . $article["title"] . "</h4>
                        <p class=\"card-text\">" . $article["intro"] . "</p>
                    </div>
                </div>";
}

function format_article_full($article) // для генерации всего текста статьи
{
    echo
                "<<div class=\"card\" style=\"background-color:#00000011;border:none; border-radius: 0%;\">
                    <img src=\"" . $article["image_url"] . "\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title ambient_genre\">" . $article["title"] . "</h4>
                        <h5 class=\"card-title ambient_genre\">" . $article["intro"] . "</h5>
                        <p class=\"card-text\">" . $article["text"] . "</p>
                    </div>
                </div>";
}

function format_category($category) // форматирование блока с ссылкой на отдельную категорию
{
    echo
    "
        <li>
            <div style='background-color: rgba(12%, 40%, 90%, 0.5);'>
                <a href='article.php?category_id=" . $category["id"] . "'>" . $category["category_name"] . "</a>
            </div>
        </li>
    ";
}