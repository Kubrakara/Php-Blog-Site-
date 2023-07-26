<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color: #f36c21;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        main {
            padding: 2rem;
        }

        h1 {
            margin-bottom: 1rem;
        }

        .content {
            border: 1px solid #ccc;
            padding: 1rem;
            background-color: #fff;
        }

        form {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #f36c21;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 0.5rem;
            text-align: left;
        }

        th {
            background-color: #f36c21;
            color: #fff;
        }

        footer {
            background-color: #f36c21;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Admin Panel</h1>
    </header>

    <main>
        <div class="content">
            <h3>Yeni Blog Postu Ekle</h3>
            <form action="add_blog_post.php" method="post">
                <label for="postTitle">Başlık:</label>
                <input type="text" name="postTitle" id="postTitle" required>

                <label for="postDescription">Açıklama:</label>
                <textarea name="postDescription" id="postDescription" required></textarea>

                <button type="submit">Blog Postu Ekle</button>
            </form>

            <h3>Mesajlar</h3>
            <table>
                <?php
                include 'get_contact.php';
                ?>
            </table>
        </div>
    </main>

    <footer>
        <p>Admin Panel - © 2023 All rights reserved.</p>
    </footer>

</body>

</html>
