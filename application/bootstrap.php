<?php

// Load .env file
$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

// Load global helpers
require __DIR__ . '/helpers.php';