<?php

// Get the root directory of the main project
$rootDirectory = __DIR__ . '/../..'; // Adjust the relative path according to your project structure

// Move the files from src directory to the root directory
$srcDirectory = __DIR__ . '/src';
$files = glob($srcDirectory . '/*');

foreach ($files as $file) {
    $filename = basename($file);
    $destination = $rootDirectory . '/' . $filename;
    copy($file, $destination);
}

// Remove the src directory
$srcDirectory = realpath($srcDirectory);
if ($srcDirectory) {
    system('rm -rf ' . escapeshellarg($srcDirectory));
}

echo 'Package installed successfully.';
