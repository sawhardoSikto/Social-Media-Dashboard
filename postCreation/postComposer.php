<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post Composer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="composer-body">
    <div class="composer-container">
        <h2>Create a Post</h2>
        <form action="mediaUploader.php" onsubmit="return validatePostComposerForm()">
            <textarea class="composer-textarea" placeholder="What's on your mind?"></textarea>

            <div class="composer-options">
                <label>
                    <input type="checkbox" name="tags"> Tag Friends
                </label>
                <label>
                    <input type="checkbox" name="location"> Add Location
                </label>
            </div>

            <div class="composer-tools">
                <button type="button">😊 Emoji</button>
                <button type="button"><b>B</b></button>
                <button type="button">• List</button>
            </div>
            <p id="composeError" class="error-message"></p>

            <button type="submit" class="composer-next-btn">Next: Upload Media</button>
        </form>
    </div>
    <script>
        function validatePostComposerForm() {
            var postText = document.querySelector(".composer-textarea").value;
            var composeError = document.getElementById("composeError");
            var isValid = true;

            composeError.innerHTML = "";

            if (postText === "") {
                composeError.innerHTML = "Post content cannot be empty.";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>