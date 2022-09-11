<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00077-pet-jQuery</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/gallery.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="https://e7.pngegg.com/pngimages/197/457/png-clipart-round-multicolored-logo-vanamo-logo-icons-logos-emojis-tech-companies.png" alt="logo">
                </a>
            </div>
            <ul id="menu">
                <li><a href="#">test 1</a></li>
                <li><a href="#">test 2</a></li>
                <li><a href="#">test 3</a></li>
                <li><a href="#">test 4</a></li>
                <li><a href="#">test 5</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="button">-</div>
            <div class="gallery">
                <div class="big">
                    <img src="./img-matrix-500px/1.png" alt="">
                </div>
                <div class="small">
                    <a href="./img-matrix-500px/1.png"><img src="./img-matrix-500px/1.png" alt="" class="_active"></a>
                    <a href="./img-matrix-500px/2.png"><img src="./img-matrix-500px/2.png" alt=""></a>
                    <a href="./img-matrix-500px/3.png"><img src="./img-matrix-500px/3.png" alt=""></a>
                    <a href="./img-matrix-500px/4.png"><img src="./img-matrix-500px/4.png" alt=""></a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <?= date('Y'); ?> &copy; all right reserved, John Carpenter
        </div>
    </footer>
    <!-- <div class="onmouse"></div> -->
</body>

<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/gallery.js"></script>

</html>