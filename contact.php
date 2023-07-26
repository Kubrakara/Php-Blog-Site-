<?php
$databasePath = "veri.db";

$fullname = $_POST['fullname-surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

try {
    $pdo = new PDO("sqlite:" . $databasePath);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "INSERT INTO contact_form (fullname, email, subject, message) VALUES (:fullname, :email, :subject, :message)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':subject', $subject);
    $statement->bindParam(':message', $message);
    $statement->execute();

    echo "Veriler başarıyla veritabanına eklendi.";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?>
