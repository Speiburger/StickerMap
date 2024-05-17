<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'vendor/autoload.php';

use StickerApi\DatabaseConnection;

$pdo = (new DatabaseConnection())->connect();
if ($pdo != null)
    echo 'Connected to the SQLite database successfully!';