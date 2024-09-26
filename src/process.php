<?php

$mysqli = new mysqli("mysql:3306", 'root', 'm1ndfulness!', 'article_service') or die(mysqli_error($mysqli));

if (isset($_POST['title']) && isset($_POST['body'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    $editor_id = 1;
   
    //thumbnail_id = $_POST['thumbnail_id];는 아직..
    $mysqli->query("INSERT INTO articles (editor_id, title, body) VALUES('$editor_id', '$title', '$body')") or die($mysqli->error);
} 
/* if (isset($_POST['tags'])){
    $tags_id = $POST['tags'];
    $article_id = '';
    $mysqli->query("INSERT INTO article_tags (article_id, tag_id) VALUES('$tags')") or die($mysqli->error);
} outputs Column count doesn't match value count at row 1 */