<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaiser Hub</title>
    <style>
        /* Định nghĩa hiệu ứng lấp lánh */
        @keyframes twinkle {
            0% { opacity: 0.6; }
            50% { opacity: 1; }
            100% { opacity: 0.6; }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: white;
            text-align: center;
        }

        header {
            background: linear-gradient(45deg, #ff00ff, #00ffff, #ff0000, #ffff00);
            background-size: 400% 400%;
            animation: twinkle 3s infinite alternate; /* Đảm bảo hiệu ứng lấp lánh liên tục */
            color: white;
            padding: 20px;
            font-size: 24px;
            text-shadow: 0 0 10px #fff, 0 0 20px #ff00ff, 0 0 30px #00ffff;
        }

        .search-box {
            margin: 20px auto;
            max-width: 400px;
        }

        input {
            width: 80%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
            text-align: center;
            outline: none;
            background-color: #111;
            color: white;
            box-shadow: 0 0 10px rgba(255, 0, 255, 0.8);
            /* Không áp dụng hiệu ứng lấp lánh cho input */
        }

        input:focus {
            border-color: #ff00ff;
            box-shadow: 0 0 15px rgba(255, 0, 255, 1);
        }

        .container {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .script-card {
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 0, 255, 0.3), rgba(0, 255, 255, 0.3), rgba(255, 0, 0, 0.3));
            background-size: 400% 400%;
            animation: twinkle 3s infinite alternate; /* Đảm bảo hiệu ứng lấp lánh liên tục */
            padding: 15px;
            width: 250px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
            text-align: center;
            transition: all 0.3s ease;
        }

        .script-card:hover {
            transform: translateY(-5px);
        }

        .script-card img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            box-shadow: 0 0 10px white;
            margin-bottom: 10px;
        }

        .script-card p {
            font-size: 16px;
            font-weight: bold;
            text-shadow: 0 0 8px white;
            color: #ff00ff;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            color: white;
            padding: 10px 15px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            text-shadow: 0 0 5px white;
        }

        .btn:hover {
            background: linear-gradient(45deg, #ff0000, #ffff00);
            text-shadow: 0 0 10px #fff;
        }
    </style>
</head>
<body>
    <header>🌟 Kaiser Hub - Tìm Kiếm Script 🌟</header>

    <div class="search-box">
        <input type="text" id="search-input" placeholder="🔎 Tìm Kiếm Script..." onkeyup="searchScript()">
    </div>

    <div class="container" id="script-list">
        <div class="script-card">
            
    </div>

    <script>
        function searchScript() {
            let input = document.getElementById("search-input").value.toLowerCase();
            let cards = document.getElementsByClassName("script-card");

            for (let card of cards) {
                let text = card.innerText.toLowerCase();
                card.style.display = text.includes(input) ? "block" : "none";
            }
        }
    </script>

</body>
</html>
