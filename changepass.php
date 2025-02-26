<?php
session_start();
// Database credentials (replace with your actual values)
$servername = "localhost";
$username = "root";
$password = "raji";
$dbname = "project";

// Function to sanitize input
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Password Change Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["change_password"])) {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Input validation
    if (empty($old_password) || empty($new_password) || empty($confirm_password)) {
        $password_error = "All fields are required.";
    } elseif ($new_password !== $confirm_password) {
        $password_error = "New password and confirm password do not match.";
    } elseif (strlen($new_password) < 8) {  // Add more password complexity checks
        $password_error = "Password must be at least 8 characters long.";
    } else {
        // Database connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $admin_id = $_SESSION["admin_id"];

        // Retrieve current password from the database
        $sql = "SELECT password FROM admins WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $admin_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($db_password);
            $stmt->fetch();

            // Verify the old password  (Use password_verify() in production with a hashed password)
            if ($old_password == $db_password) { // Use password_verify($old_password, $db_password) in production if you have hashed password

                // Hash the new password (REQUIRED for security)
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database using prepared statements
                $update_sql = "UPDATE admins SET password = ? WHERE id = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("si", $hashed_password, $admin_id);

                if ($update_stmt->execute()) {
                    $password_success = "Password changed successfully!";
                } else {
                    $password_error = "Error updating password: " . $update_stmt->error;
                }
                $update_stmt->close();

            } else {
                $password_error = "Incorrect old password.";
            }
        } else {
            $password_error = "Admin not found.";  // This should generally not happen if the session is valid
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
</head>
<body>

  <h2>Change Password</h2>

  <?php if (isset($password_error)): ?>
    <p style="color: red;"><?php echo $password_error; ?></p>
  <?php endif; ?>

  <?php if (isset($password_success)): ?>
    <p style="color: green;"><?php echo $password_success; ?></p>
  <?php endif; ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="old_password">Old Password:</label>
    <input type="password" id="old_password" name="old_password" required><br><br>

    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password" required><br><br>

    <label for="confirm_password">Confirm New Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="submit" name="change_password" value="Change Password">
  </form>

</body>
</html>