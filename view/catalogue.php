<style>
    .containeur{
        margin-top: 50px;;
    }
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
    .trier a{
    color: white;
    text-decoration: none;
   padding-right: 70px;
    font-size: 17px;
    margin-top: 0px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    
    transition: all 200ms;
    }
    a:hover{
    color: rgb(145, 144, 144);
    text-decoration: none;
    }

    mark{
        background-color: transparent;
        font-size: 25px;
        color: white;
    }
    .trier{
        background-color: rgb(50, 50, 50) ;
        margin-top: 150px;
        text-align: center;
        width: 1250px;
        border-radius: 30px;
        padding: 5px 0px 10px 50px;
    }
    .all{
       
        display: flex;
        justify-content: center;
    }
</style>
<div class="all">
<div class="trier">
<a href="?page=catalogue1">Trier par nom de A à Z</a>

<a href="?page=catalogue2">Trier par prix décroissant <mark>&#x2B07;</mark></a>

<a href="?page=catalogue3">Trier par prix croissant <mark>&#x2B06;</mark></a>

<a href="?page=catalogue5">Sortie récemment</a>

<a href="?page=catalogue4">Les meilleures notes</a>
</div>
</div>
<div class="containeur">
<?php foreach ($catalogue as $jeux) { ?>

        <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
        <div id="n<?php echo $jeux['id'] ?>">
            
            <img src="<?php echo $jeux['image'] ?>"></img>
            <p><?= $jeux['name'] ?></p>
            <?php if($jeux['price'] == 0){
     echo '<p>'.'Gratuit'.'</p>';
    }else {
        echo  '<p>' . $jeux['price'] . '&#8364;</p>';
    }?>
           
</div>
</a>


<?php } ?>
</div>

