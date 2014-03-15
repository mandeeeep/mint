<div class="sidemenu">	
    <h3><?=$category_name?></h3>
    <ul>
        <? foreach($headlines as $news):?>
        <li><a href="index.html"><?=$news['title'];?></a></li>
        <?endforeach;?>
    </ul>	
</div>