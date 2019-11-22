<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Samuel Palmer Media</title>

    <!-- 
        STYLES
    -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <?php include "./includes/header.php" ?>

    <div class="header-container">
      <div>
        <h3><span class="purp txt-yellow pad-1"><span class="purp txt-yellow pad-1">My Portfolio</span></h3>
      </div>
      <video id="background" src="/src/video.mp4" autoplay muted loop></video>
    </div>

    <div class="container-fw" id="dark-content">
        <div class="fl-2 img-hv img-fw">
            <img src="/img/portfolio/redcity-roar/redcity-roar-uniform-hero.jpg" />
            <div class="img-overlay">
                <div class="img-overlay-content">
                    <h3>Redcity Roar Basket Redesign</h3>
                    <p>Social Content, Branding, Uniform Design, Logo Design</p>
                    <a href="#" class="btn btn-box btn-portfolio">View Featured Project</a>
                </div>
            </div>
        </div>
        <div class="fl-2 img-hv img-fw">
            <img src="/img/portfolio/photography/hero-photography.jpg" />
            <div class="img-overlay">
                <div class="img-overlay-content">
                    <h3>Photography</h3>
                    <p>Vehicle Photography, Event Photography</p>
                    <a href="#" class="btn btn-box btn-portfolio">View My Gallery</a>
                </div>
            </div>
        </div>
        <div class="fl-2 img-hv img-fw">
            <img src="/img/portfolio/photography/hero-photography.jpg" />
            <div class="img-overlay">
                <div class="img-overlay-content">
                    <h3>Photography</h3>
                    <p>Vehicle Photography, Event Photography</p>
                    <a href="#" class="btn btn-box btn-portfolio">View My Gallery</a>
                </div>
            </div>
        </div>
        <div class="fl-2 img-hv img-fw">
            <img src="/img/portfolio/photography/hero-photography.jpg" />
            <div class="img-overlay">
                <div class="img-overlay-content">
                    <h3>Photography</h3>
                    <p>Vehicle Photography, Event Photography</p>
                    <a href="#" class="btn btn-box btn-portfolio">View My Gallery</a>
                </div>
            </div>
        </div>
    </div>

    <?php include "./includes/footer.php" ?>

</body>
</html>