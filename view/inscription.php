<style>
        .containeur-inscription {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
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

        .containeur-inscription input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
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
        }

        #submit:hover {
            
    background-color: rgb(12, 122, 176);
       color:white;
    
        }
        .alerte{
     color: white;
     margin-top: 15px;;
     font-size: 10px;;
     font-family: 'Kdam Thmor Pro', sans-serif;
    cursor: default;
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
    font-size: 13px; 
}
#lock{
    color: white;
    margin-left: 10px;
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
<div class="containeur-inscription">
<form id="form" action="" method="post">
        <h2>Inscription</h2>

        <div class="formulaire">
        <span id="lock" class="material-symbols-outlined">email</span>
        <input class="input-formulaire" type="text" id="email" placeholder="email" name="email" required>
    </div>
    <div class="formulaire">
        <span id="lock" class="material-symbols-outlined">person</span>
        <input class="input-formulaire" type="text" id="username" name="username" placeholder="nom d'utilisateur" required>
        </div>
        
        <div class="formulaire">
        <span id="lock" class="material-symbols-outlined">smartphone</span>
        <input class="input-formulaire" type="text" id="numero" name="numero" placeholder="numéro" required>
        </div>
       
        <div class="formulaire" id="passworderreur">
        <span id="lock" class="material-symbols-outlined">lock</span>
        <input class="input-formulaire" type="password" id="password" name="mdp"  placeholder="mot de passe" required>
        </div>
        
        <div  class="formulaire" id="ConfirmPassworderreur">
        <span id="lock" class="material-symbols-outlined">lock</span>
        <input class="input-formulaire" type="password" id="ConfirmPassword" name="confirm-password" placeholder="confirmer mot de passe" required>
        </div>
        <p id="résultat2" class="alerte"></p>

       
        <button id="submit"type="submit" onclick="checkPassword2()">S'inscrire</button>
        <p>Déja un compte, <a href="href=?page=authentification">connectez-vous ici</a></p>
    </form>
</div>


    <script>
    function checkPassword2() {
  const reponse2 = document.getElementById("password").value;
  const confirm = document.getElementById("ConfirmPassword").value;
  if (reponse2 !== confirm) {
    event.preventDefault(); 
    passworderreur.style.border = "2px solid red";
    ConfirmPassworderreur.style.border = "2px solid red";
    document.getElementById("résultat2").innerHTML = "Le mot de passe doit être identique";
  }
  else {
    document.getElementById("résultat2").innerHTML = "";
    passworderreur.style.border = "1px solid grey";
    ConfirmPassworderreur.style.border = "1px solid grey";
  }
}
</script>