<?php
$connexion = new PDO('mysql:host=localhost;dbname=culture_numerique','root','' );



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #17a2b8;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
form{
    display: flex;
    flex-direction: column;
    background-color: #fff;
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    height: 100%;
}
h4{
    text-align: center;
    font-size: 1Opx;
}
hr{
    margin: 20px 0;
    background-color: #ccc;
    border: 0;
    height:1px ;
    width: 100%;
}
.name-field{
    display: flex;
    width: 100%;
    justify-content: space-between;
}
.name-field div{
    display: flex;
    flex-direction: column;
}
.name-field div {
    width: 49%;

}
label{
    margin-bottom: 6px;
}
input{
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid rgba(0,0,0,0.4);
}
input:focus{
    border: 1px solid  #17a2b8;
}
input[type="submit"]{
    margin-top: 15px;
    background-color:  #17a2b8;
    color: #fff;
    border: 1px solid  #17a2b8;
    cursor: pointer;
}
p{
    text-align: center;
    margin: 5px 0;
    font-size: 14px;
}
p a{
    text-decoration: 0;
    color: #17a2b8;
}
p a:hover{
    text-decoration: underline;
}
</style>
<body>
  <div class="conntainer">
    <form action="">
        <h4>Inscription</h4>
        <hr>
        <div class="name-field">
            <div>
                <label for="">nom</label>
                <input type="text">
            </div>
            <div>
                <label for="">prenom</label>
                <input type="text">
            </div>
        </div>
        <label for="">email</label>
        <input type="email">
        <label for="">mot_de_passe</label>
        <input type="password">
        <input type="submit" value="s'inscrire">
        <p>vous avez déjà un compte? <a href="#">se connecter</a></p>
    </form>
  </div>  
</body>
</html>