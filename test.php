<?php

require __DIR__ . '/src/mysqli_wrapper.php';

/* Configuration */
const DB_HOST = '127.0.0.1';
const DB_USERNAME = 'username';
const DB_PASSWORD = 'password';
const DB_NAME = 'db name';

/* Create the mysqli_wrapper instance */
$connection = new mysqli_wrapper(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$username = 'test';

/* Execute our query */
$query = $connection->query('SELECT * FROM users WHERE username=?', [$username]);

/* Get query data as an associative array */
$data = $query->fetch_assoc();
