<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <title> UAN 2.0 </title>
</head>

<body>
    <header>
        <?php
            require_once ('./mod/header-nav.php');
        ?>
        <link rel="stylesheet" href="css/salones.css">
    </header>

    <section class="container-body ">
        <div class="content-body">
            <div class="tapar"></div>
            <iframe src="https://calendar.google.com/calendar/embed?title=Sala%20201%20-%20Sistemas&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uan.edu.co_g109op40pl9t68td7lm7cncsus%40group.calendar.google.com&amp;color=%2309b422&amp;ctz=America%2FBogota" frameborder="0"></iframe>
            <div class="find"> 
                <?php
                    include_once('./mod/listasRoom.php');
                ?>
            </div>
        </div>
        <footer>
            <?php
            include_once('./mod/footer.php');
          ?>
        </footer>
    </section>
    <script src="js/slide.js"></script>
    <script src="js/soliOut.js"></script>
</body>

</html>
