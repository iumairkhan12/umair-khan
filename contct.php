<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <h1>Contact Form</h1>
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];

        // Validate form fields (you can add more validation if needed)
        if (empty($name) || empty($email) || empty($message)) {
            echo "Please fill in all fields.";
        } else {
            // Connect to the database
            $conn = mysqli_connect('localhost', 'root', '', 'travel');

            // Check the database connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Insert the message into the database
            $sql = "INSERT INTO contct (name, email, message) VALUES ('$name', '$email', '$message')";
            if (mysqli_query($conn, $sql)) {
                echo "Message sent successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        }
    }
    ?>
     <div class="contct">
  <div class="box9">
  <h1>Contact Us</h1>
  
  <form action="contact.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea><br><br>
    
    <a href="contct.php"><input type="button" value='submit'></a>
  </form>
  </div>
</div>
</body>
</html>