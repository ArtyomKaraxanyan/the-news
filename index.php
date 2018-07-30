<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The News Reporter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/font/font.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
    <div class="center">
        <div class="header_area">
            <div class="logo floatleft"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
            <div class="top_menu floatleft">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Subscribe</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
            <div class="social_plus_search floatright">
                <div class="social">
                    <ul>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="https://www.facebook.com/cnn/" target="_blank" class="facebook"></a></li>
                        <li><a href="https://www.youtube.com/user/CNN/videos" target="_blank" class="feed"></a></li>
                    </ul>
                </div>
                <div class="search">
                    <form action="#" method="post" id="search_form">
                        <input type="text" value="Search news" id="s" />
                        <input type="submit" id="searchform" value="search" />
                        <input type="hidden" value="post" name="post_type" />
                    </form>
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <ul id="nav">
                <li><a href="#">world news</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a>
                            <ul>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Politics</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">Economics</a></li>
                <li><a href="#">Movies</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a>
                            <ul>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">entertainment</a></li>
                <li><a href="#">culture</a></li>
                <li><a href="#">Books</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">classifieds</a></li>
                <li><a href="#">blogs</a></li>
            </ul>
        </div>
        <div class="slider_area">
            <div class="slider">
                <ul class="bxslider">
                    <li><img src="images/1.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="images/2.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="images/3.jpg" alt="" title="Slider caption text" /></li>
                </ul>
            </div>
        </div>
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">from   around   the   world</h2>
                        <a class="more" href="#">more</a>
                        <div class="single_left_coloum floatleft"> <img src="images/donald-trump.jpg " alt="" />
                            <?php $link = mysqli_connect('homework','root','','news');

                            $sql = "SELECT * FROM news WHERE id = 1";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            ?>

                            <h3><a href="home.php"><?php echo $myrow['heading']; ?></a></h3>
                            <p>    <?php echo $myrow['text']; ?></p>
                            <p class="data"><?php echo $myrow['data']; ?></p>

                            <?php $sql ="SELECT * FROM categories  WHERE id =1 ";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result); ?>

                            <a class="readmore" href="home.php">read more</a> </div>
                        <div class="single_left_coloum floatleft"> <img src="images/chemp.jpg" alt="" />
                            <?php

                            $sql = "SELECT * FROM news WHERE id = 2";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            ?>
                            <h3> <?php echo $myrow['heading']; ?> </h3>
                            <p><?php echo $myrow['text']; ?> </p>
                            <p class="data"> <?php echo $myrow['data'] ?></p>
                            <?php $sql ="SELECT * FROM categories  WHERE id =3 ";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result); ?>


                            <a class="readmore" href="#">read more</a> </div>
                        <div
                            <?php
                            $sql = "SELECT * FROM news WHERE id = 3";
                            $img = "SELECT * FROM news_images WHERE id = 3";
                            $result = mysqli_query($link,$sql);
                            $res  =     mysqli_query($link,$img);
                            $myrow = mysqli_fetch_assoc($result);
                            $row = mysqli_fetch_assoc($res);
                            ?>
                                class="single_left_coloum floatleft"> <img src="<?php echo $row['path'];  ?>" alt="" />

                            <h3><?php echo $myrow ['heading'];    ?></h3>
                            <p><?php  echo $myrow['text'];   ?> </p>
                            <p><?php echo $myrow ['data'];   ?>  </p>
                            <a class="readmore" href="#">read more</a> </div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">latest  articles</h2>
                        <a class="more" href="#">more</a>

                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                    </div>
                    <div class="single_left_coloum_wrapper gallery">
                        <h2 class="title">gallery</h2>
                        <a class="more" href="#">more</a> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> </div>
                    <div class="single_left_coloum_wrapper single_cat_left">
                        <h2 class="title">tech news</h2>
                        <a class="more" href="#">more</a>
                        <div class="single_cat_left_content floatleft">
                            <?php
                            $sql ="SELECT * FROM news  WHERE id =1 ";
                            $aut ="SELECT * FROM news_authors WHERE  id =1";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res =mysqli_query($link,$aut);
                            $row =mysqli_fetch_assoc($res);
                            ?>
                            <h3><?php echo $myrow['heading']        ?> </h3>
                            <p>US President Donald Trump has stated that if Iran continued to threaten his country, it will suffer consequences...</p>
                            <p class="single_cat_left_content_meta">by <span><?php echo $row ['first_name']  .$row['last_name']  ?></span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <?php
                            $sql ="SELECT * FROM news  WHERE id =2 ";
                            $aut ="SELECT * FROM news_authors WHERE  id =2";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res =mysqli_query($link,$aut);
                            $row =mysqli_fetch_assoc($res);
                            ?>
                            <h3><?php echo $myrow['heading']        ?> </h3>
                            <p>Twenty years after their first World Cup triumph, France are soccer�s world champions again after beating Croatia 4-2 in the World Cup final...</p>
                            <p class="single_cat_left_content_meta">by <span><?php echo $row ['first_name'] . ' ' .$row ['last_name']  ?> </span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <?php
                            $sql ="SELECT * FROM news  WHERE id =3";
                            $aut ="SELECT * FROM news_authors WHERE  id =3";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res =mysqli_query($link,$aut);
                            $row =mysqli_fetch_assoc($res);
                            ?>
                            <h3><?php echo $myrow['heading']        ?> </h3>
                            <p>Facebook shares dove 19 percent Thursday, shedding about $120 billion in market value...</p>
                            <p class="single_cat_left_content_meta">by <span><?php echo $row ['first_name'] . ' ' .$row ['last_name']  ?></span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                            <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                        </div>
                    </div>
                </div>
                <div class="right_coloum floatright">
                    <div class="single_right_coloum">
                        <h2 class="title">The News Videos </h2>
                        <ul>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Trump: If Iran continues to threaten US, it will suffer consequences</h3>
                                    <p><iframe width="210" height="180" src="https://www.youtube.com/embed/EL9YNiVZ1w4"
                                               frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Russia 2018 - An Unforgettable World Cup : France Are Champions </h3>
                                    <p> <iframe width="210" height="180" src="https://www.youtube.com/embed/aocjr_wasCM"
                                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Facebook shares fall by nearly 20%, wiping out over $120 billion in market value</h3>
                                    <p><iframe width="210" height="180" src="https://www.youtube.com/embed/IZTiqOoFM18"
                                               frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                        </ul>
                        <a class="popular_more" href="#">more</a> </div>
                    <div class="single_right_coloum">
                        <h2 class="title">editorial</h2>
                        <div class="single_cat_right_content editorial">
                            <?php
                            $sql = "SELECT * FROM news WHERE id = 1";
                            $img = "SELECT * FROM news_images WHERE id = 1";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res = mysqli_query($link,$img);
                            $row = mysqli_fetch_assoc($res);
                            ?>
                            <img src= "<?php echo $row['path'];?>" alt="" />
                            <h3><?php  echo $myrow['heading']  ?></php></h3>
                        </div>
                        <div class="single_cat_right_content editorial">
                            <?php
                            $sql = "SELECT * FROM news WHERE id = 2";
                            $img = "SELECT * FROM news_images WHERE id = 2";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res = mysqli_query($link,$img);
                            $row = mysqli_fetch_assoc($res);
                            ?>
                            <img src="<?php echo $row['path'];?>" alt="" />
                            <h3><?php  echo $myrow['heading']  ?></h3>
                        </div>
                        <div class="single_cat_right_content editorial">
                            <?php
                            $sql = "SELECT * FROM news WHERE id = 3";
                            $img = "SELECT * FROM news_images WHERE id = 3";
                            $result = mysqli_query($link,$sql);
                            $myrow = mysqli_fetch_assoc($result);
                            $res = mysqli_query($link,$img);
                            $row = mysqli_fetch_assoc($res);
                            ?>
                            <img src="<?php echo $row['path'];?>" alt="" />
                            <h3><?php echo $myrow ['heading']  ?></h3>
                        </div>
                        <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar floatright">
                <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
                <div class="single_sidebar">
                    <div class="news-letter">
                        <h2>Sign Up for Newsletter</h2>
                        <p>Sign up to receive our free newsletters!</p>
                        <form action="#" method="post">
                            <input type="text" value="Name" id="name" />
                            <input type="text" value="Email Address" id="email" />
                            <input type="submit" value="SUBMIT" id="form-submit" />
                        </form>
                        <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
                    </div>
                </div>
                <div class="single_sidebar">
                    <div class="popular">
                        <h2 class="title">Popular</h2>
                        <ul>
                            <li>
                                <div class="single_popular">
                                    <?php $sql ="SELECT * FROM news  WHERE id =1 ";
                                    $result = mysqli_query($link,$sql);
                                    $myrow = mysqli_fetch_assoc($result); ?>

                                    <p><?php echo $myrow['data'] ?></p>
                                    <h3><?php echo $myrow['heading'] ?> <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <?php $sql ="SELECT * FROM news  WHERE id =2 ";
                                    $result = mysqli_query($link,$sql);
                                    $myrow = mysqli_fetch_assoc($result); ?>
                                    <p><?php echo $myrow['data'] ?></p>
                                    <h3> <?php echo $myrow['heading'] ?> <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <?php $sql ="SELECT * FROM news  WHERE id =3 ";
                                    $result = mysqli_query($link,$sql);
                                    $myrow = mysqli_fetch_assoc($result); ?>
                                    <p><?php echo $myrow['data'] ?></p>
                                    <h3> <?php echo $myrow['heading'] ?> <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>Sept 24th 2045</p>
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>Sept 24th 2045</p>
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                        </ul>
                        <a class="popular_more">more</a> </div>
                </div>
                <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
                <div class="single_sidebar">
                    <h2 class="title">ADD</h2>
                    <img src="images/add2.png" alt="" /> </div>
            </div>
        </div>
        <div class="footer_top_area">
            <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
        </div>
        <div class="footer_bottom_area">
            <div class="footer_menu">
                <ul id="f_menu">
                    <li><a href="#">world news</a></li>
                    <li><a href="#">sports</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">entertainment</a></li>
                    <li><a href="#">culture</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">classifieds</a></li>
                    <li><a href="#">blogs</a></li>
                </ul>
            </div>
            <div class="copyright_text">
                <p>Copyright &copy; 2018 The News Reporter Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
                <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript">
    selectnav('nav', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    selectnav('f_menu', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true
    });
</script>
</body>
</html>