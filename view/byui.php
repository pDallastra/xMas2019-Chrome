<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>BYU Idaho</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <section class="flex row">
        <div class="sidebar flex col">
            <?php require_once('sidebar.php'); ?>
        </div>
        <div class="main-container flex col center">
            <div class="flex center">
                <h1>BYU - Idaho</h1>
            </div>
            <div class="img-triple flex row center">
                <div class="img-text flex col">
                    <img src="../img/byui1.jpg" style="transform: rotate(0deg);" alt="">
                    <p>I will never forget how hard the first semester was. My English could have been enough to get into college, but I suffered a lot until get used to it.</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/byui2.jpg" alt="">
                    <p>Software Engineering. Technology has been a passion in my life since I was 6 and playing Pokemon Silver in a Windows 94 Operational System. I felt I 
                    should stop only enjoying technology to start using it to create greate things. I will get there one day</p>
                </div>
                <div class="img-text flex col">
                    <img src="../img/byui3.jpg" alt="">
                    <p>My third semester, I was coming to school at 8am and leaving around 8pm everyday. This is the building where I spend most of time. I'm grateful for the opporunity
                    to be there learning and becoming a grate professional.</p>
                </div>
            </div>
            <div class="flex row center">
                <button><a href="english.php">Previous</a></button>
                <button><a href="derek.php">Next</a></button>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
    </section>
</body>

</html>