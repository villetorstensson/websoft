<?php

$pageTitle = "Search";
require __DIR__ . "/view/header.php";


/**
 * A page controller
 */
require "config.php";
require "functions.php";

// Get incoming values
$search = $_GET["search"] ?? null;
$like = "%$search%";
//var_dump($_GET);

if ($search) {
    // Connect to the database
    $db = connectDatabase($dsn);
    $res = wildCardSearch($db, $search);
}
?>

<body class="schools">


<h1>Search the database</h1>
<form>
    <p>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

<?php if ($search) : ?>
    <table id ="person">
        <tr>
            <th>ID </th>
            <th>Lastname </th>
            <th>Firstname </th>
            <th>Age</th>
        </tr>

    <?php 
    if(is_array($res) || is_object($res)) :
    foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["ID"] ?></td>
            <td><?= $row["LastName"] ?></td>
            <td><?= $row["FirstName"] ?></td>
            <td><?= $row["Age"] ?></td>
        </tr>
    <?php endforeach; 
endif; ?>
    </table>
<?php endif; ?>

<?php require __DIR__ . "/view/footer.php"; ?>

    

   
