<?php
require_once "../includes/init_db.php";

$sql = "SELECT
            `id`,
            `name`,
            `logo`,
            `alt`,
            `link`
        FROM
            `partner`
        WHERE
            `id` = :id
        LIMIT
            1
;";

$stmt = $db->prepare($sql);
$stmt->bindParam(":id",$_GET['id'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
    header("Location: ./?error");
}
?>


<html lang="en" dir="ltr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?=$row['name']?>
        </title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/adminPanel/adminHeader.css">
        <link rel="stylesheet" href="../css/adminPanel/adminShow.css">
    </head>
<body>
<header class="adminHeader">
            <h1 class="adminHeader_title">
                <a class="adminHeader_title_link" href="../admin.php">Admin Panel</a>
            </h1>
            <a class="adminHeader_returnLink" href="./">Revenir à la liste</a>
        </header>
        
        <section class="adminShow">

        <h2 class="adminShow_title">Détails du partenaire</h2>
    <h3 class="adminShow_label">id</h3>
    <p class="adminShow_text"><?=htmlspecialchars($row['id'])?></p>
    <h3 class="adminShow_label">name</h3>
    <p class="adminShow_text"><?=htmlspecialchars($row['name'])?></p>
    <h3 class="adminShow_label">logo</h3>
    <img class="adminShow_img" width="300px" src="../uploads/partner/<?php echo $row['id'] . "." . $row['logo']; ?>" alt="<?=$row['alt']?>">
    <h3 class="adminShow_label">alt</h3>
    <p class="adminShow_text"><?=htmlspecialchars($row['alt'])?></p>
    <h3 class="adminShow_label">link</h3>
    <p class="adminShow_text"><?=htmlspecialchars($row['link'])?></p>


    </section>
    <section class="adminButtonSection">
            <a class="adminButtonSection_editLink" href="edit.php?id=<?=$_GET['id']?>">Modifier</a>
            <a class="adminButtonSection_deleteLink" href="delete.php?id=<?=$_GET['id']?>">Supprimer</a>
        </section>
</body>

</html>