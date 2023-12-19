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
    color : rgb(177, 177, 177);
    }
    h2{
        margin-top: 300px;;
    margin-left:40px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color:rgb(177, 177, 177);
    text-align: center;
    }
    #vosJeux{
        color: white;
    text-align: left;
    margin-left: 40px;
}
hr{
    margin-top:30px;
}
</style>
<h1>Mon panier : (<?=@$_SESSION['panier']?>)</h1>
<hr>
<?php 
if(isset($_SESSION['nom'])){
foreach ($catalogue as $jeux){
    if($jeux[$_SESSION['nom']."Panier"] == true){?>
    
        <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
        <div id="n<?php echo $jeux['id'] ?>">
            
            <img src="<?php echo $jeux['image'] ?>"></img>
            <p><?= $jeux['name'] ?></p>
           
</div>
</a>


  <?php  }else {?>

  <?php }
} 
} 