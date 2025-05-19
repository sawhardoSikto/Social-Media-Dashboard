<?php
session_start();
if (isset($_SESSION['status'])) {


    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity Feed</title>
        <style>
            body {
                font-family: arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 20px;
            }

            .avater {
                width: 24px;
                background-color: rgb(229, 229, 229);
                padding: 6px;
                border-radius: 50%;
                cursor: pointer;
            }

            .userInfo {
                position: relative;
                top: 0;
            }

            .userInfo li {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .userInfo li a {
                display: block;
                padding: 12px 32px;
                border-bottom: 1px solid rgba(238, 238, 238, 1);
                text-decoration: none;
                color: black;

            }

            .userInfo li a:hover {
                background-color: rgba(0, 0, 0, .25);
            }

            .topOption {
                margin-top: 20px;
            }

            .bottomOption {
                margin-bottom: 20px;
                border: none !important;
            }

            .userInfo>ul {
                left: 10px;
                top: 40px;
                position: absolute;
                border: 1px solid rgba(0, 0, 0, .25);
                background-color: white;
                margin: 0;
                padding: 0;
            }

            .d-none {
                display: none;
            }

            main {
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 16px rgba(0, 0, 0, .25);
                max-width: 800px;
                margin: auto;
            }

            .message-button {
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #28a745;
                color: white;
                padding: 10px 15px;
                text-decoration: none;
                border-radius: 5px;
                font-weight: bold;
                z-index: 1000;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                transition: background-color 0.3s;
            }

            .message-button:hover {
                background-color: #218838;
            }

            .search-button {
                position: absolute;
                top: 20px;
                right: 50%;
                background-color: #3e6146;
                color: white;
                padding: 10px 15px;
                text-decoration: none;
                border-radius: 5px;
                font-weight: bold;
                z-index: 1000;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                transition: background-color 0.3s;
            }

            .search-button:hover {
                background-color: #218838;
            }

            h2,
            h3,
            h4 {
                color: #333;
            }

            #feedTypeLabel {
                margin-top: 10px;
                font-weight: bold;
                color: #28a745;
            }

            .story-label {
                display: inline-block;
                background-color: #e0e0e0;
                color: #333;
                width: 40px;
                height: 40px;
                line-height: 40px;
                text-align: center;
                border-radius: 50%;
                margin: 5px;
                cursor: pointer;
                font-weight: bold;
                transition: 0.3s;


            }

            .story-label:hover {
                background-color: #4CAF50;
                color: white;
            }

            .post {
                border: 1px solid #ccc;
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 5px;
                background-color: #fdfdfd;

            }

            .controls a {
                margin-right: 10px;
                text-decoration: none;
                color: #007bff;

            }

            .controls a:hover {
                text-decoration: underline;

            }

            .controls:hover {}

            .comment-input {
                padding: 5px 10px;
                width: 70%;
                margin-top: 10px;

            }

            button {
                padding: 5px 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                margin-left: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }

            .create-post-button {
                display: inline-block;
                background-color: #007bff;
                color: white;
                padding: 8px 16px;
                font-size: 16px;
                text-decoration: none;
                border-radius: 6px;
                font-weight: bold;
                margin-bottom: 20px;
                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
                transition: background-color 0.3s;
            }

            .create-post-button:hover {
                background-color: #0056b3;
            }


            .create-post-button:hover {
                background-color: #0056b3;
            }


            .create-post-button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <div class="userInfo">
            <img class="avater" src="usericon.svg" />
            <ul class="options d-none">
                <li><a href="profileManagement/view-profile.php">View Profile</a></li>
                <li><a href="dashboard/homeDashboard.php">DashBoard</a></li>
                <li><a class="topOption" href="PrivacySetting.php">Settings and Privacy</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Activity Log</a></li>
                <li><a href=" ../controller/logoutCheck.php" class="bottomOption">logout</a></li>
            </ul>
        </div>
        <header></header>
        <main>


            <script>
                let userInfo = document.querySelector(".userInfo");
                let options = document.querySelector(".options");

                userInfo.addEventListener("click", () => {
                    options.classList.toggle("d-none");
                })

            </script>
            <a href="DirectMessaging.php" class="message-button">💬 Message</a>
            <a href="Search_Filter.php" class="search-button">Search</a>


            <h2>Activity Feed</h2>
            <div>
                <label for=""><input type="radio" name="feedtype" id="" onclick="showFeedType('Most Recent')" checked>Most
                    Recent</label>
                <label for=""><input type="radio" name="feedtype" id="" onclick="showFeedType('Top Posts')">Top
                    Posts</label>
                <p id="feedTypeLabel" style="color: green;"> Showing: Most Recent</p>

            </div>
            <div>
                <h4>Story</h4>
                <label class="story-label" for="">A</label>
                <label class="story-label" for="">B</label>
                <label class="story-label" for="">C</label>
                <label class="story-label" for="">D</label>
                <label class="story-label" for="">E</label>
            </div>
            <div> <a href="postCreation/postComposer.php" class="create-post-button">➕ Create Post</a>
            </div>
            <div>
                <h3>Feed post</h3>
                <div class="post">
                    <p> <strong>@sawhardo</strong> waching movie!</p>
                    <p class="controls">
                        <a href="#" onclick="likepost(this)">Like (<span class="like-count">10</span>)</a>
                        <a href="#">See all comments (20)</a>
                        <br />
                        <br />
                        <input type="text" class="comment-input" placeholder="Write a comment...">
                        <button>comment</button>
                    <div class="comment"></div>
                    </p>
                </div>
                <br />
                <div class="post">
                    <p> <strong>@sawhardo</strong> playing badminton!</p>
                    <p class="controls">
                        <a href="#" onclick="likepost(this)">Like (<span class="like-count">10</span>)</a>
                        <a href="#">See all comments (20)</a>
                        <br />
                        <br />
                        <input type="text" class="comment-input" placeholder="Write a comment...">
                        <button>comment</button>
                    <div class="comment"></div>
                    </p>
                </div>
            </div>
        </main>
        <script>
            function likepost(link) {
                const like = link.querySelector(".like-count")
                let count = parseInt(like.innerHTML);
                like.innerHTML = count + 1;


            }
            function showFeedType(type) {
                const lebel = document.getElementById("feedTypeLabel")
                lebel.innerHTML = "Showing: " + type;
            }

        </script>
    </body>

    </html>
    <?php
} else {
    header('location: LoginAuth.html');

}
?>