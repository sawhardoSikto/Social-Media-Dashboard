<?php
session_start();
if (isset($_SESSION['status'])){


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Messaging</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }

        main {
            display: flex;
            height: 100vh;
        }

        .list {
            width: 350px;
            background-color: #fff;
            border-right: 1px solid #ccc;
            padding: 20px;
            overflow-y: auto;
        }

        .list input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        .multiSelect {
            width: 100%;
            height: 100px;
            padding: 5px;
            margin-bottom: 10px;
        }

        .list button {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .list button:hover {
            background-color: #0056b3;
        }

        .Chat-header {
            font-weight: bold;
            margin: 20px 0 10px 0;
        }

        .list ul {
            list-style: none;
        }

        .list li {
            padding: 8px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .list li:hover {
            background-color: #f1f1f1;
        }

        .chat {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            background-color: #e9ebee;
            overflow-y: auto;
        }

        .chat p {
            font-style: italic;
            color: #888;
            margin-bottom: 10px;
        }

        .chat > div {
            margin-bottom: 15px;
        }

        .chat span {
            font-weight: bold;
        }

        .chat div div {
            margin-top: 5px;
            color: #555;
        }

        textarea {
            width: 100%;
            padding: 10px;
            resize: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="button"] {
            margin-top: 5px;
            padding: 8px 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #218838;
        }

        /* Optional: Chat bubble style */
        .chat-message {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            max-width: 60%;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .chat-message.you {
            align-self: flex-end;
            background-color: #dcf8c6;
        }

    </style>
</head>

<body>
    <header></header>
    <main>
        <div class="list">
            <div>
                <input type="text" placeholder="Enter new Group name" />
                <div>Select Friends</div>
                <select class="multiSelect" multiple>
                    <option value="">Select a Friend</option>
                    <option value="sikto">Sikto</option>
                    <option value="pranto">Pranto</option>
                    <option value="bikash">Bikash</option>
                    <option value="ridoy">Ridoy</option>
                </select>
                <button>Create Group</button>
            </div>

            <div>
                <div class="Chat-header">Direct Message</div>
                <ul>
                    <li>Shikto</li>
                    <li>Bikahs</li>
                    <li>Panic</li>
                    <li>Sajal</li>
                    <li>Soham</li>
                    <li>Shanto</li>
                    <li>Redip</li>
                    <li>Tanmay</li>
                </ul>
            </div>
        </div>

        <div class="chat">
            <p>Arpi is typing...</p>

            <div class="chat-message">
                <span>Arpi:</span> Hey, how are you?
                <div>❤️ 😂 👍</div>
            </div>

            <div class="chat-message you">
                <span>You:</span> I am fine! And you?
                <div>❤️ 😂 👍</div>
            </div>

            <div>
                <textarea placeholder="Type a message..." rows="3"></textarea><br />
                <input type="file" />
                <input type="button" value="Send" />
            </div>
        </div>
    </main>
    <script>
        
document.addEventListener("DOMContentLoaded", function () {
    const sendButton = document.querySelector('input[type="button"]');
    const messageInput = document.querySelector('textarea');
    const chatArea = document.querySelector('.chat');

    sendButton.addEventListener('click', function () {
        const message = messageInput.value.trim();
        if (message === '') return;

      
        const userMessage = document.createElement('div');
        userMessage.className = 'chat-message you';
        userMessage.innerHTML = `<span>You:</span> ${message}<div>❤️ 😂 👍</div>`;
        chatArea.insertBefore(userMessage, chatArea.lastElementChild);

       
        messageInput.value = '';

        
        setTimeout(() => {
            const botMessage = document.createElement('div');
            botMessage.className = 'chat-message';
            botMessage.innerHTML = `<span>Arpi:</span> I am fine !<div>❤️ 😂 👍</div>`;
            chatArea.insertBefore(botMessage, chatArea.lastElementChild);
        }, 1000);
    });
});
</script>

</body>

</html>


<?php
}
else

    {
        header('location: loginAuth.html');

    }
?>













