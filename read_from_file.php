<?php
declare(strict_types=1);

// Specify the file path
$filePath = 'data.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the content of the file into a string
    $fileContent = file_get_contents($filePath);

    // Output the content of the file
    echo $fileContent;
} else {
    echo "The file does not exist.";
}

