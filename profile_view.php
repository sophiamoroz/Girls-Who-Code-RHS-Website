<?php
include_once 'db_connect.php'; // Include your database connection

// Get the profile ID from the URL
$profile_id = $_GET['id'];

$stmt = $connection->prepare("SELECT * FROM profiles WHERE id = ?");
$stmt->bind_param("i", $profile_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $profile = $result->fetch_assoc();
} else {
    echo "Profile not found.";
    exit();
}

$stmt->close();
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($profile['first_name']) . " " . htmlspecialchars($profile['last_name']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($profile['first_name']) . " " . htmlspecialchars($profile['last_name']); ?></h1>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($profile['email']); ?></p>
    <p><strong>Bio:</strong> <?php echo htmlspecialchars($profile['bio']); ?></p>
    <img src="uploads/<?php echo htmlspecialchars($profile['profile_image']); ?>" alt="Profile Image" style="max-width: 200px;">
</body>
</html>
