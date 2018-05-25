<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovided');
    exit;
}

require_once '../../../includes/connection.php';
require_once '../../../includes/functions.php';

if (!isLogged()) {
    header("location: ../login.php");
    die();
}

$request = "SELECT 
`id`, `category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle` 
FROM 
`articles` 
WHERE 
`id` = :id
;";

$stmt = $pdo->prepare($request);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$cookieData = unserialize($_COOKIE['admin']);
$username = $cookieData['name'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        table {
            width: 1200px;
            margin-top: 30px;
        }
        td, th {
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            text-align: center;
        }
        h1 {
            font-size: 30px;
            font-weight:900;
        }
        th {
            width: 20px;
        }
    </style>
</head>
<body>
<p style="color: #00cc99">Connected as <?=$username?></p>

<form action="../doLogOut.php" style="width: 100px;margin-left:10px;">
    <input class="btn btn-warning" type="submit" value="Log out" style="color:black;">
</form>
<br>
<a href="./">Go back to the article page</a>

<div style="margin-left: 20px;margin-bottom: 20px;">
    <h1>Details of <?=$row['title']?> :</h1>
    <table>
        <tr>
            <th>id</th>
            <th>category</th>
            <th>title</th>
            <th>subtitle</th>
            <th>content</th>
            <th>imgSrc</th>
            <th>imgAlt</th>
            <th>imgTitle</th>
            <th>publishedDate</th>
            <th>author</th>
            <th>signature</th>
            <th>logoSrc</th>
            <th>logoAlt</th>
            <th>logoTitle</th>
        </tr>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['category']?></td>
            <td><?=$row['title']?></td>
            <td><?=$row['subtitle']?></td>
            <td><?=nl2br($row['content'])?></td>
            <td><?=$row['imgSrc']?></td>
            <td><?=$row['imgAlt']?></td>
            <td><?=$row['imgTitle']?></td>
            <td><?=$row['publishedDate']?></td>
            <td><?=$row['author']?></td>
            <td><?=$row['signature']?></td>
            <td><?=$row['logoSrc']?></td>
            <td><?=$row['logoAlt']?></td>
            <td><?=$row['logoTitle']?></td>
        </tr>
    </table>
    <br>
    <a class="btn btn-success" href="editArticle.php?id=<?=$row['id']?>">edit</a>
    <a class="btn btn-danger" href="deleteArticle.php?id=<?=$row['id']?>">delete</a>
</div>
</body>
</html>