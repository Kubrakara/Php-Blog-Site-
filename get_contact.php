<?php
$dbFile = 'veri.db';

try {
    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM contact_form";
    $stmt = $pdo->query($query);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) > 0) {
        foreach ($rows as $row) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Full Name: " . $row['fullname'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Subject: " . $row['subject'] . "<br>";
            echo "Message: " . $row['message'] . "<br><br>";
        }
    } else {
        echo "Tabloda hiç veri yok.";
    }
} catch (PDOException $e) {
    die("Hata: " . $e->getMessage());
}
?>