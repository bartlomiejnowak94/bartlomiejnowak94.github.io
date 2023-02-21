<head>
        <meta charset="utf-8">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <title>Bartlomiej Nowak</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/flexboxgrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/academicons.min.css"/>
        <!-- JS SCRIPTS -->
        <script src="https://kit.fontawesome.com/5a842aaa5f.js" crossorigin="anonymous"></script>
        <script src="js/slideshow.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/to-top.js"></script>
        <link rel="icon" type="image/x-icon" href="images/WPPT logo.svg">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180571576-1"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
        <script type="text/javascript" id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-180571576-1');
        </script>
</head>
<body>
    <!-- HEADER -->
    <header id="main-header">
        <div class="container">
            <div class="row row-menu end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-8 col-lg-8">
                    <div class="dropdown">
                        <input id="check01" type="checkbox" name="menu" />
                        <label for="check01"><span class="fa fa-bars"></span></label>
                        <ul class="submenu">
                            <li><a class="<?php if ($selected == "index") echo ' current'; ?>" href="index.php">Home</a></li>
                            <li><a class="<?php if ($selected == "research") echo ' current'; ?>" href="research.php">Research</a></li>
                            <li><a class="<?php if ($selected == "students") echo ' current'; ?>" href="students.php">Students</a></li>
                        </ul>
                    </div>
                    <nav id="navbar">
                        <ul>
                            <li class="<?php if ($selected == "index") echo ' current'; ?>"><a href="index.php">Home</a></li>
                            <li class="<?php if ($selected == "research") echo ' current'; ?>"><a href="research.php">Research</a></li>
                            <li class="<?php if ($selected == "students") echo ' current'; ?>"><a href="students.php">Students</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>