<?php
$file = 'count.txt';

if (file_exists($file)) {
    $count = file_get_contents($file);
    $count = intval($count);
} else {
    $count = rand(109, 121);
}

// Update the count
$increment = intval($_GET['increment']);
$count += $increment;
$count = min(max($count, 101), 261);

// Save the updated count back to the file
file_put_contents($file, $count);

// Return the new count as JSON
echo json_encode($count);
?>
