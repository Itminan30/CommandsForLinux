<!Doctype html>

<head>
    <title>Display Get Parameters</title>
</head>

<body>
    <?php
    if (isset($_GET["message"])) {
        $message = $_GET["message"];
        echo "<p>" . $message . "</p>";
    } else {
        echo "<p>No Message Found!!!</p>";
    }
    ?>
</body>