<?php
include('../config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the burger details from the form
    $burgerName = $_POST['burgerName'];
    $burgerDescription = $_POST['burgerDescription'];
    $burgerPrice = $_POST['burgerPrice'];

    // Check if a file is uploaded
    if (isset($_FILES['burgerImage'])) {
        $file = $_FILES['burgerImage'];

        // Get the file details
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Check if the file upload was successful
        if ($fileError === UPLOAD_ERR_OK) {
            // Specify the directory to store the uploaded images
            $uploadDir = 'uploads/';

            // Generate a unique file name
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = uniqid('burger_') . '.' . $fileExtension;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($fileTmpName, $uploadDir . $newFileName)) {
                // File upload success
                // Now you can save the burger details (including the file path) to your database
                $filePath = $uploadDir . $newFileName;

                // Save the burger details and file path into the database
                $insertQuery = "INSERT INTO burgers (name, description, price, image) VALUES ('$burgerName', '$burgerDescription', '$burgerPrice', '$filePath')";
                if (mysqli_query($connection, $insertQuery)) {
                    echo "Burger added successfully!";
                    echo "<script>location.href='../pages/profile.php'</script>";
                } else {
                    echo "Error adding burger: " . mysqli_error($connection);
                }
            } else {
                // Error occurred while moving the uploaded file
                echo "Sorry, there was an error uploading the file.";
            }
        } else {
            // Error occurred during the file upload
            echo "Sorry, there was an error uploading the file.";
        }
    }
}
