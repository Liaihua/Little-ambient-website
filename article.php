<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.01.20
 * Time: 12:28
 */

include ('article_generator.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css-folder/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="images/ambient-icon.jpg">
    <title>Ambient Website</title>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send E-mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Итак, вы посмотрели мой веб-сайт, и, возможно, хотите мне выразить пожелания, жалобы и соболезнования
                :3. Что-ж, вот форма, пишите мне на почту (P.S. я не подключил почту, так что я вас обдурил)

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                           placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Без енотов, пожалуйста</small>

                    <label for="EmailText">Текст</label>
                    <textarea class="form-control" name="EmailText" id="#textArea" rows="3"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ambient Website</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#modelId" data-toggle="modal" data-target="#modelId">Send E-mail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Articles</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <!-- Здесь будет код на ПХП -->
    <div class="card text-md-center rounded-0 ambient_title"
         style="background-color: #00000000; border: none; border-radius: 0%;">
        <div class="card-block">
            <p class="card-text">
                Статьи
            </p>
            <h4 class="card-footer" style="background-color: #00000011">
                Публикации, посвященные музыкальной (и не только) тематике
            </h4>
        </div>
    </div>
    </div>
    <div class="ambient_main">
        <aside class="float-right " style="padding: 0%;">
            Категории статей
            <ul style="display: flex">
                <!-- Здесь будет вывод категорий с использованием format_categories() -->
                <?php
                    foreach (fetch_categories(mysqli_connect('192.168.200.79', 'user', 'user', '1131_vov'), 1) as $category) {
                        format_category($category);
                    }
                ?>

            </ul>
        </aside>
        <article>
            <section style="padding: 10%">
                <?php
                    foreach (fetch_articles(mysqli_connect('192.168.200.79', 'user', 'user', '1131_vov'), null) as $article) {
                        format_article_card($article);
                    }

                ?>
            </section>
        </article>
        <!-- Здесь тоже будет код на ПХП -->
    </div>
</main>
<footer class="container-fluid ambient_footer py-5">
    <div class="row">
        <div class="col-6 col-md">
            <h5>На чем версталось это все</h5>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap 4</li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Авторы</h5>
            <ul>
                <li>CapLink (моральная поддержка)</li>
                <li>Илья</li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>