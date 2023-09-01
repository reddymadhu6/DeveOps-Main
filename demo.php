<!DOCTYPE html>
<html>
<head>
    <title>Submit Form</title>
</head>
<body>
    <form action="process_form.php" method="POST">
        <!-- Form elements -->

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

    <script>
        // Check if the 'submitted' query parameter exists
        const urlParams = new URLSearchParams(window.location.search);
        const submitted = urlParams.get('submitted');

        // If 'submitted' parameter exists, refresh the form
        if (submitted) {
            window.location.href = "demo.php";
        }
    </script>
</body>
</html>


<?php
// Assuming you have already established a database connection
$conn = new mysqli('localhost', 'root', '', 'demo1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have already created a table named 'elements' with columns: id, element1, element2, element3

// Check if the POST request contains the specific elements
if (isset($_POST['element1']) && isset($_POST['element2']) && isset($_POST['element3'])) {
    $element1 = $_POST['element1'];
    $element2 = $_POST['element2'];
    $element3 = $_POST['element3'];

    // Prepare the INSERT statement
    $stmt = $conn->prepare("INSERT INTO elname (e1, e2, e3) VALUES (?, ?, ?)");

    // Bind the values and execute the statement
    $stmt->bind_param("sss", $element1, $element2, $element3);
    $stmt->execute();

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();

// Redirect back to the form page with a query parameter
header("Location: demo.php?submitted=1");
exit();
?>


