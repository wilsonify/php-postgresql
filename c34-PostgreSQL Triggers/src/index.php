<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Script Links</title>
</head>
<body>
    <h1>Available PHP Scripts</h1>
    <ul>
        <?php
        // Path to the directory containing PHP scripts
        $directory = __DIR__;

        // Scan the directory for PHP files
        $files = array_filter(scandir($directory), function($file) {
            return pathinfo($file, PATHINFO_EXTENSION) === 'php' && $file !== 'index.php';
        });

        // Generate links for each PHP file
        foreach ($files as $file) {
            echo '<li><a href="' . htmlspecialchars($file) . '">' . htmlspecialchars($file) . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>
