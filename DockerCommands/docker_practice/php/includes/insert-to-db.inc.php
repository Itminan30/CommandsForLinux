<?php
require __DIR__ . "/db-conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);

    // Check if the email is of valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !isset($email)) {
        die("Proper Email Required!!!");
    }

    // Check if the Name is not a whitespace
    if (strlen(trim($name)) === 0 || !isset($name)) {
        die("Proper Name Required!!!");
    }

    // Check if the age is a Number
    if (!filter_var($age, FILTER_VALIDATE_INT) || !isset($age)) {
        die("Age Should be a Number!!!");
    }

    try {
        $stmt = $conn->prepare("INSERT INTO userlist (name, email, age) VALUES(:name, :email, :age)");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":age", $age);

        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    echo "User Added Successfully!!!";
}