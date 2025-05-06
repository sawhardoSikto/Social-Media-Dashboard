<?php
session_start();
if (isset($_SESSION['status'])){


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search & Filter</title>
    <style>
        body {
            font-family: arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);

        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .post {
            background-color: #f1f1f1;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 5px solid #007bff;
            border-radius: 5px;
        }

        .no-result {
            text-align: center;
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header align="center">

    </header>
    <main>
        <h2>Search & Filter</h2>
        <div class="container">
            <input type="text" name="" id="searchInput" placeholder="Search..." onkeyup="filterPost()">

            <select name="" id="filter" onchange="filterPost()">
                <option value="">All Categories</option>
                <option value="technology">Technology</option>
                <option value="sports">Sports</option>
                <option value="music">Music</option>
                <option value="news">News</option>
            </select>
            

            <div class="post" data-category="technology">Post 1: Category: Technology</div>
            <div class="post" data-category="news">Post 2: Category: News</div>
            <div class="post" data-category="sports">Post 3: Category: Sports</div>
            <div class="post" data-category="music">Post 4: Category: Music</div>
            <div class="post" data-category="technology">Post 5: Category: Technology</div>

            <div id="noResult" class="no-result" style="display: none;">No posts found!</div>
        </div>
    </main>
    <script>
        function filterPost() {
            const searchText = document.getElementById("searchInput").value.toLowerCase();
            const category = document.getElementById("filter").value;
            const posts = document.querySelectorAll(".post");
            let found = false;

            for (let i = 0; i < posts.length; i++) {
                let postText = posts[i].innerText.toLowerCase();
                let postCategory = posts[i].getAttribute("data-category");
                if (postText.includes(searchText) && (category === "") || category == postCategory) {
                    posts[i].style.display = "block";
                    found = true;
                }
                else {
                    posts[i].style.display = "none"
                }
            }
            if (found) {
                document.getElementById("noResult").style.display = "none";
            } else {
                document.getElementById("noResult").style.display = "block";
            }


        }
    </script>
</body>

</html>

<?php
}
else

    {
        header('location: commonFeatureS/loginAuth.html');

    }
?>


















