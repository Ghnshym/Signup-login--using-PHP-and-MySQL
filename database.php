<?php
// Replace these variables with your MySQL server credentials
$hostname = 'localhost';
$username = 'root';
$password = '';

// Connect to MySQL server
$connection = new mysqli($hostname, $username, $password);

// Check for connection errors
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Create the database
$databaseName = 'users';
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $databaseName";

if ($connection->query($createDatabaseQuery) === TRUE) {
    echo "Database created successfully.\n";
} else {
    echo "Error creating database: " . $connection->error . "\n";
}

// Select the database
$connection->select_db($databaseName);

// Create the table
$createTableQuery = "
CREATE TABLE IF NOT EXISTS user (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(50) UNIQUE,
    phone VARCHAR(15),
    password VARCHAR(255),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($connection->query($createTableQuery) === TRUE) {
    echo "Table created successfully.\n";
} else {
    echo "Error creating table: " . $connection->error . "\n";
}

// Close the connection
$connection->close();
?>
