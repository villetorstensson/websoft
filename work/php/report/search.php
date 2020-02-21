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

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM person
WHERE
    Personid = ?
    OR LastName LIKE ?
    OR FirstName LIKE ?
    OR Age LIKE ?
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like, $like ]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
}




?><h1>Search the database</h1>

<form>
    <p>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

<?php if ($search) : ?>
    <table id = "myTable">
        <tr>
            <th>ID </th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Age</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["Personid"] ?></td>
            <td><?= $row["LastName"] ?></td>
            <td><?= $row["FirstName"] ?></td>
            <td><?= $row["Age"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>

<?php require __DIR__ . "/view/footer.php"; ?>
