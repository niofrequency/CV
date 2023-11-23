<?php
$subscribersFile = 'subscribers.txt';

if (!file_exists($subscribersFile)) {
    // Create the file if it doesn't exist
    file_put_contents($subscribersFile, '');
}

$subscribers = file($subscribersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (!empty($subscribers)) {
    echo '<ul class="list-group">';
    foreach ($subscribers as $subscriber) {
        echo '<li class="list-group-item">' . htmlspecialchars($subscriber) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<li class="list-group-item">No subscribers yet.</li>';
}
?>
