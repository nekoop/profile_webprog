<?php
include 'database.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $comment = mysqli_real_escape_string($conn, $_POST['comment']); 

    
    $sql = "INSERT INTO user_comment (comment) VALUES ('$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "Comment submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>