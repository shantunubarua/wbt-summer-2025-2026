<?php
/* ---------- Database connection settings ---------- */
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "portfolio_db";

/* ---------- Connect to MySQL ---------- */
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* ---------- Create table automatically if it does not exist ---------- */
$createTable = "
CREATE TABLE IF NOT EXISTS workspace_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    dob DATE NOT NULL,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(255) NOT NULL,
    updates TINYINT(1) NOT NULL DEFAULT 0,
    terms TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn, $createTable);
?>