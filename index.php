// index.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Advanced PHP Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'about':
                include 'pages/about.php';
                break;
            case 'services':
                include 'pages/services.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }
        ?>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
