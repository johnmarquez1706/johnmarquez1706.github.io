<?php
$file = 'count.txt';

if (file_exists($file)) {
    $count = file_get_contents($file);
    $count = intval($count);
} else {
    $count = rand(109, 121);
}

// Save the current count back to the file
file_put_contents($file, $count);

// Return the count as JSON
echo json_encode($count);
?>
