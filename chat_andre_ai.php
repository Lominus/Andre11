<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1f2833 0%, #0b0c0f 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            overflow: hidden; /* Hide overflow to prevent scrollbars during loading */
        }

        /* Loading Screen Styles */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0b0c0f;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        .spinner {
            width: 80px;
            height: 80px;
            border: 5px solid rgba(102, 252, 241, 0.2);
            border-top: 5px solid #66fcf1;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .developer-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #66fcf1;
            margin-top: 2rem;
            text-transform: uppercase;
        }

        .glow {
            text-shadow: 0 0 5px #66fcf1, 0 0 10px #66fcf1, 0 0 20px #66fcf1;
            animation: glow 1.5s infinite alternate ease-in-out;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Main Menu Styles */
        #menu-container {
            background-color: #2a323c;
            padding: 2.5rem;
            border-radius: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            text-align: center;
            max-width: 550px;
            width: 100%;
            transition: all 0.3s ease-in-out;
            opacity: 0;
            visibility: hidden;
        }

        @media (max-width: 600px) {
            #menu-container {
                padding: 1.5rem;
                border-radius: 1.5rem;
            }
        }

        .logo-text {
            font-size: 3.5rem;
            font-weight: 900;
            color: #66fcf1;
            text-shadow: 0 0 5px #66fcf1, 0 0 10px #66fcf1, 0 0 20px #66fcf1;
            animation: glow 1.5s infinite alternate ease-in-out;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px #66fcf1, 0 0 10px #66fcf1, 0 0 20px #66fcf1;
                transform: scale(1);
            }
            to {
                text-shadow: 0 0 10px #66fcf1, 0 0 30px #66fcf1, 0 0 50px #66fcf1;
                transform: scale(1.02);
            }
        }

        h1 {
            font-size: 2.75rem;
            font-weight: 700;
            color: #c5c6c7;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .menu-button {
            width: 100%;
            padding: 1rem;
            font-size: 1.25rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #45a29e, #66fcf1);
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 8px 16px rgba(102, 252, 241, 0.2);
            margin-bottom: 1rem;
        }

        .menu-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(102, 252, 241, 0.3);
        }

        .menu-button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>

    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="spinner"></div>
        <div class="developer-text glow">Andre developer</div>
    </div>

    <!-- Main Menu Container -->
    <div id="menu-container">
        <div class="logo-text">Andre</div>
        <h1 class="text-3xl font-bold mb-8 text-white">Pilih Game</h1>
        <a href="tictactoe.html">
            <button class="menu-button">Tic-Tac-Toe</button>
        </a>
        <a href="susunkata.html">
            <button class="menu-button">Susun Kata</button>
        </a>
        <a href="chat_ai.html">
            <button class="menu-button">Chat AI</button>
        </a>
    </div>

    <script>
        const loadingScreen = document.getElementById('loading-screen');
        const menuContainer = document.getElementById('menu-container');

        window.addEventListener('load', () => {
            // Wait for 2 seconds then fade out the loading screen
            setTimeout(() => {
                loadingScreen.style.opacity = '0';
                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                    menuContainer.style.opacity = '1';
                    menuContainer.style.visibility = 'visible';
                }, 1000); // Wait for the fade-out transition to complete
            }, 2000); // Display loading screen for 2 seconds
        });
    </script>
</body>
</html>
