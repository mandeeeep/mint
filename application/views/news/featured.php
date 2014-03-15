<h3>Featured</h3>		
    <? foreach($featured as $article):?>
    <div class="featured-post">

        <h4><a href="index.html"><?=$article['title']?></a></h4>
        <p class="post-info">Posted by <a href="index.html"><?=$article['author']?></a> on <?=$article['posted_on']?> </p>
        <p>
            <a href="http://getfirefox.com/">
                <img src="images/image.gif" width="160" height="100" alt="firefox" class="float-left" />
            </a>
            <?=$article['content'];?> 				 				
        </p>	
        <p><a class="more-link" href="index.html">continue reading</a></p>
    </div>
    <? endforeach;?>