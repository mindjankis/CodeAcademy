<?php
declare(strict_types=1);


// Specify the file path
$filePath = 'data.txt';

// String to be written to the file
$content = 'labas vakaras';

// Write the content to the file
if (file_put_contents($filePath, $content, FILE_APPEND  | LOCK_EX) !== false) {
    echo "Content has been written to the file successfully.";
} else {
    echo "Failed to write content to the file.";
}


