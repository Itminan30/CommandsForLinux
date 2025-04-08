<!Doctype html>
<html>

<head>
    <title>
        Add Users to DB
    </title>
</head>

<body>
    <div>
        <form action="./includes/insert-to-db.inc.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your Name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Your Email">
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" placeholder="Your Age">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <!-- <?php phpinfo() ?> -->
</body>

</html>