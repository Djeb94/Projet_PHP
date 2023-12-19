<style>
    h1{
    font-family: 'Kdam Thmor Pro', sans-serif;
    color : white;
    text-align: center;
    font-size: 80px;
    }
    .containeur{
        display: flex;
        margin-top: 100px;;
        justify-content: center;
    }
    #submit {
           width: 100px;;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-left:5px;
    background-color: rgb(13, 161, 235);
        border:none;
        }

        #submit:hover {
            
    background-color: rgb(12, 122, 176);
       color:white;
    
        }
        p{
    padding-top: 20px;;
        text-align: center;
        color: red;
        font-family: 'Kdam Thmor Pro', sans-serif;
        margin-top: 0px;
    }
        [x-cloak] { display: none !important; }
    </style>
<p id="erreur"><?=@$_SESSION['erreur_message'] ?></p>
<h1><?=$_SESSION['money']?> &#8364;</h1>
<div class="containeur">  
<form action="" method="post">
<input type="text" value="5" name="cinq" style="display: none;">
<button id="submit"type="submit" >+ 5&#8364;</button>
</form>

<form action="" method="post"> 
<input type="text" value="10" name="dix" style="display: none;">
<button id="submit"type="submit" >+ 10&#8364;</button>
</form>

<form action="" method="post">
<input type="text" value="50" name="cinquante" style="display: none;">
<button id="submit"type="submit" >+ 50&#8364;</button>
</form>

<form action="" method="post">
<input type="text" value="100" name="cent" style="display: none;">
<button id="submit"type="submit" >+ 100&#8364;</button>
</form>
  </div>
