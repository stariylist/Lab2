<?php

function video($db)
{
    $statement = $db->distinct("title", ["carrier"=>"видеокассета"]);
    echo "<div id='content1'>Фильмы на кассетах:<br>";
    foreach ($statement as $data) {
        echo "$data;<br>";
    }
    echo "</div>";
}

function filmByActor($db, $actor)
{
    $statement = $db->find(["actors"=>['$in' => [$actor]]]);
    echo "<div id='content1'> Фильм с $actor:<br>";
    foreach ($statement as $data) {
        echo $data["title"]."<br>";
    }
    echo "</div>";
}

function newFilm($db)
{
    $date = new \MongoDB\BSON\UTCDateTime(strtotime(date("Y-01-01")) * 1000);
    $statement = $db->find(["year"=>['$gt' => $date]]);
    echo "<div id='content1'> Новые фильмы:<br>";
    foreach ($statement as $data) {
        echo $data["title"]."<br>";
    }
    echo "</div>";
}

