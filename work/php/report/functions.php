<?php

/**
 * Open the database file and catch the exception it it fails
 *
 * @var array $dsn with connection details
 *
 * @return object database connection
 */
function connectDatabase(array $dsn)
{
    try {
        $db = new PDO(
            $dsn["dsn"],
            $dsn["username"],
            $dsn["password"]
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }

    return $db;
}

function wildCardSearch($db, $search){
    try{
        $like = "%$search%";

        $sql = "SELECT * FROM person WHERE
        ID = ?
        OR LastName LIKE ?
        OR FirstName LIKE ?
        OR Age LikE ?
    ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like, $like]);
    $res = $stmt->fetchAll();
    }
    catch(PDOException $e){
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }

    return $res;
}
