<style>
    .containeur-connexion {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 500px;
        margin: 0;
        
    }
    h2{
            font-family: 'Kdam Thmor Pro', sans-serif;
             color: white;
        }
    #form {
        background-color: rgb(117, 117, 117);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    .containeur-connexion input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }
    .formulaire{
        margin-left: auto;
    margin-top: 40px;
    justify-content: space-between; 
    align-items: center;
    background-color: rgb(85, 85, 85);
    padding: 0px 0px;
    width:  300px;
    border: none;
    border-radius: 25px;
    display: flex;
    }
    .formulaire input{
    margin-bottom: 0px;
    padding: 15px 0px 15px 0px;
    border: none ;
    margin-left: 20px;
    background-color: transparent;
    font-size: 10px;
    flex-basis: auto;
      color:white;
    }
    .input-formulaire {
    
    border: none;
    background-color: transparent;
    font-size: 10px;
    flex-basis: auto;
}

.input-formulaire::placeholder {
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: rgb(177, 177, 177);
    font-size: 13px;
    margin-top: 15px;
    margin-bottom: 0px;
}

.input-formulaire:focus {
    outline: none;
    border: none;
    color:white;
    font-size: 13px; /* Supprime la bordure lorsqu'un champ obtient le focus */
}
#lock{
    color: white;
    margin-left: 10px;
}

    #submit {
        color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-left:5px;
    background-color: rgb(13, 161, 235);
        border:none;
        margin-top: 40px;
    }

    #submit:hover {
        background-color: #45a049;
    }
    #submit:hover{
    background-color: rgb(12, 122, 176);
       color:white;
    }
    .alert-message{
        text-align:center;
        color:red;
        font-family: 'Kdam Thmor Pro', sans-serif;
    }
    p{
        padding-top: 20px;;
        text-align: center;
        color: white;
        font-family: 'Kdam Thmor Pro', sans-serif;
        margin-top: 0px;
    }
    a{
        text-decoration: underline;
        color: white;
        font-family: 'Kdam Thmor Pro', sans-serif;
    }
    #erreur{
        color: red;
    }
</style>
<p id="erreur"><?=@$_SESSION['erreur_message'] ?></p>
<div class="containeur-connexion">

    <form id="form" action="" method="post" onsubmit="return validateForm()">
    <h2>Connexion</h2>
    <div class="formulaire">
        <span id="lock" class="material-symbols-outlined">email</span>
        <input class="input-formulaire" type="text" id="email" placeholder="email" name="email" required>
    </div>

    <div class="formulaire">
        <span id="lock" class="material-symbols-outlined">lock</span>
        <input class="input-formulaire" type="password" id="password" name="mdp"  placeholder="mot de passe" required>
        </div>

        <button id='submit' type="submit">Connexion</button>
        <p>Pas de compte, <a href="href=?page=inscription">créez-en un ici</a></p>
    </form>
</div>
