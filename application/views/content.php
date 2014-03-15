<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <title><?=$site_name?></title>

        <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
        <meta name="author" content="Erwin Aligam - styleshout.com" />
        <meta name="description" content="Site Description Here" />
        <meta name="keywords" content="keywords, here" />
        <meta name="robots" content="index, follow, noarchive" />
        <meta name="googlebot" content="noarchive" />

        <link rel="stylesheet" type="text/css" media="screen" href="<?=URL::base()?>css/screen.css" />
        <? foreach($scripts as $src):?>
        <script type="text/javascript" src="<?=URL::base().'js/'.$src; ?>" /></script>
        <? endforeach;?>
    </head>
    <body>

        <!-- header starts-->
        <div id="header-wrap"><div id="header" class="header-content container_16">			



                <!-- navigation -->
                 <div  id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li id="current"><a href="style.html">Newsletters</a></li>
                        <li><a href="blog.html">Magazines</a></li>
                        <li><a href="index.html">Subscriptions</a></li>
<!--                        <li><a href="index.html">Support</a></li>-->
                        <li><a href="index.html">About</a></li>		
                    </ul>		
                </div>		


                <form id="quick-search" action="index.html" method="get" >
                    <p>
                        <label for="qsearch">Search:</label>
                        <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
                        <input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
                    </p>
                </form>					

                <!-- header ends here -->
            </div></div>

        <!-- content starts -->
        <div id="content-outer"><div id="content-wrapper" class="container_16 cw-shadow-2">

                <!-- main -->
                <div id="main" class="grid_12">

                    <?=$content?>

                    <!-- main ends -->				
                </div>

                <!-- left-columns starts -->
                <div id="left-columns" class="grid_4">
                    <?=$sidebar?>
                    <!-- end left-columns -->
                </div>		

                <!-- contents end here -->	
            </div></div>

        <!-- footer starts here -->	
        <div id="footer-wrapper" class="container_16">

            <div id="footer-content">

                <div class="grid_8">

                    <h3>Resource Links</h3>			
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
                        Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
                        posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
                        odio, ac blandit ante orci ut diam. <a href="index.html">Read more...</a>
                    </p>

                    <ul class="footer-list">
                        <li><a href="http://themeforest.net?ref=ealigam" title="Site Templates">Themeforest -
                                <span>Site Templates, Web &amp; CMS Themes</span></a>
                        </li>
                        <li><a href="http://www.4templates.com/?go=228858961" title="Website Templates">4Templates -
                                <span>Low Cost High-Quality Templates</span></a>
                        </li>
                        <li><a href="http://store.templatemonster.com?aff=ealigam" title="Web Templates">TemplateMonster -
                                <span>Delivering the Best Templates on the Net!</span></a>
                        </li>
                        <li><a href="http://graphicriver.net?ref=ealigam" title="Stock Graphics">GraphicRiver -
                                <span>Awesome Stock Graphics</span></a>
                        </li>
                        <li><a href="http://www.dreamhost.com/r.cgi?287326|SSHOUT" title="Web Hosting">DreamHost -
                                <span>Premium Webhosting. Use the promocode <strong>sshout</strong> and save <strong>50 USD</strong>.</span></a>
                        </li>
                    </ul>

                </div>

                <div class="grid_8">

                    <h3>Image Gallery </h3>					
                    <p class="thumbs">
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>	
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>													
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>													
                        <a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
                    </p>	

                    <h3>About</h3>			
                    <p>
                        <a href="http://getfirefox.com/"><img src="images/gravatar.jpg" width="40" height="40" alt="firefox" class="float-left" /></a>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
                        Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
                        posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
                        odio, ac blandit ante orci ut diam.</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
                        Cras id urna. <a href="index.html">Learn more...</a></p>

                </div>	

            </div>

            <div id="footer-bottom">

                <p class="bottom-left">			
                    &nbsp; &copy;2010 All your copyright info here &nbsp; &nbsp;
                    Design by <a href="http://www.styleshout.com/">styleshout</a>
                </p>	

                <p class="bottom-right" >
                    <a href="index.html">Home</a> |
                    <a href="index.html">Sitemap</a> |
                    <a href="index.html">RSS Feed</a> |						
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
                    <a href="http://validator.w3.org/check/referer">XHTML</a>
                </p>

            </div>	

        </div>
        <!-- footer ends here -->

    </body>
</html>
