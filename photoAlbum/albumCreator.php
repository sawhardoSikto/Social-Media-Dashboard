<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Album Creator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="album-body">
    <div class="container">
        <h2>Create a New Album</h2>
        <form onsubmit="return validateAlbumForm()">
            <input type="text" placeholder="Album Name" id="albumName"><br>
            <p id="albumNameError" class="error-message"></p><br>
            <textarea placeholder="Album Description"></textarea><br><br>
            <input type="file" multiple accept="image/*" id="albumImage">
            <p class="note">Drag and drop images to rearrange (simulated)</p>
            <button type="submit">Save Album</button>
            <p id="albumSuccessMsg" class="success-message"></p>
        </form>
        <a href="bulkSelector.php" class="nav-link">Go to Bulk Selector</a>
    </div>

    <script>
        function validateAlbumForm() {
            var albumName = document.getElementById("albumName").value;
            var albumNameError = document.getElementById("albumNameError");
            var successMsg = document.getElementById("albumSuccessMsg");
            var isValid = true;

            albumNameError.innerHTML = "";
            successMsg.innerHTML = "";

            if (albumName === "") {
                albumNameError.innerHTML = "Album name cannot be empty.";
                isValid = false;
            }

            if (isValid) {
                successMsg.innerHTML = "Album saved successfully!";
            }

            return false;
        }
    </script>
</body>

</html>