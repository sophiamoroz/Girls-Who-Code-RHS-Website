?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Profile</title>
</head>
<body>
    <?php include "common/header.php" ?>
    <form action="create_profile.php" method="POST" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" required></textarea>
        <br>

        <label for="profile_image">Profile Image:</label>
        <input type="file" id="profile_image" name="profile_image" required>
        <br>

        <button type="submit">Create Profile</button>
    </form>
    <?php include "common/footer.php" ?>
</body>
</html>

<?php
session_start();
include_once 'db_connect.php'; // Include your database connection

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: ../login_page.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['userid']; // Use the logged-in user's ID
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $profile_image = $_FILES['profile_image']['name'];

    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);

    // Insert into database
    $stmt = $connection->prepare("INSERT INTO profiles (user_id, first_name, last_name, email, bio, profile_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $user_id, $first_name, $last_name, $email, $bio, $profile_image);

    if ($stmt->execute()) {
        header("Location: profile_view.php?id=" . $stmt->insert_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}

