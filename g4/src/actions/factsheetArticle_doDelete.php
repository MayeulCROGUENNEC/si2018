<?php
include "../functions/functions.php";
$connection = connect();
$queryStr = "
    DELETE FROM
        `factsheets`
    WHERE
        `id` = :id
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
header("Location: ../../factsheets.php");