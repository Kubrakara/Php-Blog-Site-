<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postTitle = $_POST["postTitle"];

    $postDescription = $_POST["postDescription"];
    try {
        $pdo = new PDO('sqlite:database.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
    }

    $sql = "INSERT INTO blog_posts (postTitle, postDescription) VALUES (:postTitle, :postDescription)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':postTitle', $postTitle);
    $stmt->bindParam(':postDescription', $postDescription);

    try {
        $stmt->execute();
        header('Location: admin_panel.php');
        exit;
    } catch (PDOException $e) {
        die("Blog postu eklenirken bir hata oluştu: " . $e->getMessage());
    }
}
?>
