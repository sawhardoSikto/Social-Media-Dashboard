<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Media Uploader</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="uploader-body">
    <div class="uploader-container">
        <h2>Upload Photos/Videos</h2>
        <form action="previewMode.php" enctype="multipart/form-data" onsubmit="return validateMediaUploadForm()">
            <input type="file" name="mediaFiles" class="uploader-input" accept="image/*,video/*" multiple
                id="uploadImage">

            <div class="uploader-schedule">
                <label for="scheduleDate">Schedule Post:</label>
                <input type="datetime-local" id="scheduleDate" name="scheduleDate">
            </div>
            <p id="mediaError" class="error-message"></p>

            <button type="submit" class="uploader-next-btn">Next: Preview Post</button>
        </form>
    </div>
    <script>
        function validateMediaUploadForm() {
            var mediaInput = document.getElementById("uploadImage");
            var mediaError = document.getElementById("mediaError");
            var isValid = true;

            mediaError.innerHTML = "";

            var files = mediaInput.files;
            if (files.length === 0) {
                mediaError.innerHTML = "Please select at least one photo or video.";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>
<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>