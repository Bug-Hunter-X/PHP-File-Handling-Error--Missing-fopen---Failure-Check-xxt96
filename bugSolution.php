```php
$file = fopen("nonexistent.txt", "r");
if ($file === FALSE) {
    // Handle the error appropriately
    $error_message = error_get_last()['message'];
    echo "Error opening file: " . $error_message . "\n";
} else {
    // Process the file
    $contents = fread($file, filesize("nonexistent.txt"));
    fclose($file);
    echo "File contents: $contents\n";
}
```