<?php require "./header.php"; ?>
<div class="page-title lb single-wrapper">
    <div class="container">
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/codedao/Controller/CategoryController.php');
        $categoryID = (int) $_GET['category'];
        $categoryController = new CategoryController();
        $categoryInfo = $categoryController->getCategoryInfo($categoryID);
        $result = $categoryInfo->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-star bg-orange"></i> <?php echo ucwords($result['name']) ?> <small class="hidden-xs-down hidden-sm-down"> <?php echo $result['category_description'] ?> </small></h2>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">

                        <?php
                        $listPost = $categoryController->showPostByCategory($categoryID);
                        while ($row = $listPost->fetch_assoc()) {
                            echo "<div class='blog-box row'>
                            <div class='col-md-4'>
                                <div class='post-media'>
                                    <a href='tech-single.html' title=''>
                                        <img src='upload/tech_blog_01.jpg' alt='' class='img-fluid'>
                                        <div class='hovereffect'></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                        
                            <div class='blog-meta big-meta col-md-8'>
                                <h4><a href='./post.php?post={$row['post_id']}' title=''>{$row['title']}</a></h4>
                                <p>{$row['description']}</p>
                                <small class='firstsmall'><a class='bg-orange' href='tech-category-01.html' title=''>{$row['name']}</a></small>
                                <small><a href='tech-single.html' title=''>{$row['create_day']}</a></small>
                                <small><a href='tech-author.html' title=''>by {$row['display_name']}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        
                        <hr class='invis'>";
                        }

                        ?>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->
                <div class="row">
                    <!-- <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <?php require_once "./widget.php" ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php require "./footer.php"; ?>