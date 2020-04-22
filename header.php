<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Blog Code Dạo - Tổng Hợp Và Chia Sẻ Các Bài Viết Về Ngành Lập Trình</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="./"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <?php
                            require($_SERVER['DOCUMENT_ROOT'] . '/codedao/Controller/HomeController.php');
                            $home = new HomeController();
                            $listCategory = $home->getCategory();
                            while ($row = $listCategory->fetch_assoc()) {
                                echo "<li class='nav-item'><a class='nav-link' href=./category.php?category={$row['category_id']}>{$row['name']}</a></li>";
                            } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">liên hệ</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <!-- Search form -->
                            <form action="/Controller/SearchController.php" method="$_POST">
                                <span><input type="text" class="form-control" placeholder="Search..." name="s"><i class="fa fa-search"></i></span>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header>