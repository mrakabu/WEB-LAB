<?php
// File to store the visitor count
$counterFile = 'visitor_count.txt';

// Check if the counter file exists
if (!file_exists($counterFile)) {
    // Create the file with an initial count of 0
    file_put_contents($counterFile, 0);
}

// Read the current visitor count
$visitorCount = (int)file_get_contents($counterFile);

// Increment the visitor count
$visitorCount++;

// Update the counter file with the new count
file_put_contents($counterFile, $visitorCount);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visitor Counter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }
    .container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
    }
    p {
      font-size: 1.2em;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Visitor Count</h1>
    <p>Number of visitors to this page: <?php echo $visitorCount; ?></p>
  </div>
</body>
</html>
