<?php
include "../functions/functions.php";
$connection = connect();
$queryStr = "
    DELETE FROM
        `news`
    WHERE
        `id` = :id
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
header("Location: ../../news.php");