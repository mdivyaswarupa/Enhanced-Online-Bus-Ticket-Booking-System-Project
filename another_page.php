<!DOCTYPE html>
<html>
<head>
    <title>Another Page</title>
</head>
<body>
    <?php
    // Retrieve the status message from the URL parameter
    $statusMessage = isset($_GET['status']) ? urldecode($_GET['status']) : '';

    // Display the status message
    echo '<p>' . $statusMessage . '</p>';
    ?>
</body>
</html>
