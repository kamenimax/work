<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDSC</title>  

    <style>  

    
*{

}         

body{ 
            box-sizing:border-box;
            margin:0;
            padding:0;
            color:black;
            font-size: 32px;  
            display:flex;
            align-items:center;
        }
     #titre-formulaire{
         font-size: 40px;
         color:blue;
         width: 100%;
         display: flex;
         align-items: center;
         justify-content:space-between;
         padding: 10px 10px 10px 10px;
         margin-top:0px;
         margin-left:30px;

    }
    form{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .contenu-champ{
        display:flex;
        flex-direction: column;
        align-items: flex start;
        justify-content: flex start;
        margin : 12px ;
        
    } 
    .contenu-champ label{
        margin-bottom :6px;
        font-size : 30px;
         
    }
    .contenu-champ input{
        padding:12px;
        width:360px;
        font-size:16px;
        border:1px solid #eaeaea;
        border-radius: 8px;
    }
    .button{
        padding:10px;
        width:80px;
        font-size:20px;
        border-radius: 8px;
        font-size:14px;
        font-weight : 500;
        color: #fff;
        background-color:#C21827;
        border : none;
        margin-left:12px;

    }
    form{
        display: flex;
        align-items:flex-start;
        flex-direction: column;
        padding-left :40px;

    }
    label{
        background color: blue;
    
    }
    img{
        height: 420px;;
        width:  420px;;
        display:flex;
        
        
        }

    
        
    

    
    </style>
</head>
<body>

    
    <?php
     ?>
    <img src='./img/Plan de travail 1-2.png' alt="" srcset="" >
    
    </div>


    
   
<form>
      <div class='contenu-champ'>
      <label >Nom d'utilisateur</label>
      <input type="text" placeholder="Entrer votre nom d'utilisateur"/>
      </div>
      <div class='contenu-champ'>
      <label>Adresse mail</label>
      <input type="email" placeholder="Entrer votre email"/>
      </div>
      <div class='contenu-champ'>
      <label>Mot de passe</label>
      <input type="password" placeholder="8+ caracteres"/>
      </div>

      <input type="submit" value="confirmer" class="button" />

    

      

      
      
 </form>

</body>
</html>