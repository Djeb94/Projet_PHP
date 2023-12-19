<style>
    #lienPageVente{
        margin-left: 0px;
        color: transparent;
    }
    [id^="n"]{
    color: white;
    display: inline-block;
    margin-left: 60px;
    margin-top: 40px;
    }
    [id^="n"] img{
    width: 260px;
    margin-left: 0px;
    margin-top: 0px;
    }
    [id^="n"] p{
    margin-left: 0px;
    font-size: 18px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    }
    h1{
    margin-left:40px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    }
    h1{
    margin-left:40px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    }
    #vosJeux{
        color: white;
        font-family: 'Kdam Thmor Pro', sans-serif;
    }
</style>

<?php
foreach ($foundGames as $game) { ?>
               

<a id="lienPageVente" href="?page=pageVente<?php echo $game['id'] ?>">
        <div id="n<?php echo $game['id'] ?>">
            
            <img src="<?php echo $game['image'] ?>"></img>
            <p><?= $game['name'] ?></p>
            <?php if($game['price'] == 0){
     echo '<p>'.'Gratuit'.'</p>';
    }else {
        echo  '<p>' . $game['price'] . '&#8364;</p>';
    }?>
           
</div>
</a> <?php

            }