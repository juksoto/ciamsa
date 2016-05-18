    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro LandingPage</title>
        <link rel="stylesheet" href="resources/css/style.css">
        <link rel="stylesheet" href="resources/css/foundation.css" />
        <script src="resources/js/vendor/modernizr.js"></script>
        <script type="text/javascript" src="resources/jquery-1.7.1.min.js"></script>
        <!-- incluyo el archivo que tiene mis funciones javascript -->
        <script type="text/javascript" src="resources/functions.js"></script>
        <!-- incluyo el framework css , blueprint. -->
        <link rel="stylesheet" type="text/css" href="resources/screen.css" />
        <!-- incluyo mis estilos css -->
        <link rel="stylesheet" type="text/css" href="resources/style.css" />
    </head>
   <body>
    <div id ="block"></div>
    <div class="container">
        <h1 class="title"><?php echo $title ?></h1>
        <div id="popupbox"></div>
        <div id="content">
            <?php include_once ($view->contentTemplate); // incluyo el template que corresponda ?>
        </div>
    </div>
    <script src="resources/js/foundation/foundation.orbit.js"></script>
    <script src="resources/js/foundation.min.js"></script>
    <script> $(document).foundation();</script>
</body>
</html>