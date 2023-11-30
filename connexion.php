<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<style>
*{
  margin: 0;
  padding: 0;
  outline: none;  
}
body{
  background: linear-gradient(45deg,#FC466B,#3F5EFB); 
  height: 100vh; 
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Arial,  sans-serif;
}
.container{
    position: relative;
}
form{
    background: rgba(255, 255,255, .3);
    padding: 3rem;
    height: 450px;
    width: 350px;
    border-radius: 20px;
    border-left:1px solid rgba(255, 255,255, .3);
    border-top:1px solid rgba(255, 255,255, .3) ;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    -moz-bacdrop-filter: blur(10px);
    box-shadow: 20px 20px 40px -6px rgba(0,0,0,.2);
    text-align: center;

}

p{
    color: white;
    font-weight: 500;
    opacity: .7;
    font-size: 1.4rem;
    margin-bottom: 60px;
    text-shadow: 2px 2px 4px rgba(0,0,0,.2);
}
a{
    color: #ddd;
    text-decoration: none;
    font-size: 12px;
    transition: all .3s;
}
a:hover{
    text-shadow: 2px 2px 6px rgb(0,0,0,);
    
}
input{
    background: transparent;border: none;
    border-left: 1px solid rgba(255, 255,255, .3) ;
    border-top: 1px solid rgba(255, 255,255, .3) ;
    padding: 1rem;
    width: 250px;
    height: 35px;
    border-radius: 30px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    -moz-bacdrop-filter: blur(5px);
    box-shadow: 4px 4px 70px rgba(0,0,0,.2);
    color: white;
    font-weight: 500;
    text-shadow: 2px 2px 4px rgba(0,0,0,.2);
    transition: all .3s;
    margin-bottom: 3em;
 
}

::placeholder{
    color: white;
}
input:hover,
input[type="email"]:focus,
input[type="password"]:focus{
background: rgba(255, 255,255, .1);
box-shadow: 4px 4px 60px 8px rgba(0,0,0,.2);
}
input[type="button"]{
    cursor: pointer;
    margin-top: 10px;
    font-size: 1rem;
    width: 150px;
    height: 50px;
}

.drop{
    background: rgba(255, 255,255, .3) ;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    -moz-bacdrop-filter: blur(10px);
    position: absolute;
    border-left: 1px solid rgba(255, 255,255, .3) ;
    border-top: 1px solid rgba(255, 255,255, .3) ;
    border-radius: 10px;
    box-shadow: 10px 10px 60px -8px rgba(0,0,0,.2);
}
.drop-1{
    height: 80px; width: 80px;
    top: -20px; left: -40px;
    z-index: -1;
}
.drop-2{
    height: 80px; width: 80px;
    bottom: -30px; right: -40px;
}
.drop-3{
    height: 100px; width: 100px;
    bottom: 120px; right: -50px;
    z-index: -1;
}
.drop-4{
    height: 120px; width: 120px;
    top: -60px; right: -50px;
}
.drop-5{
    height: 60px; width: 60px;
    bottom: 170px; left: 90px;
    z-index: -1;
}
</style>
<body>
<div class="container">
   <form action="">
    <p>Bienvenue</p>
    <input type="email" name="email" id="email" placeholder="email"> <br>
    <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="mot_de_passe"> <br>
    <input class="button" type="button" value="connexion"> <br>
    <a href="">mot de passe oublié</a>
   </form> 
   
   <div class="drop drop-1"></div>
   <div class="drop drop-2"></div>
   <div class="drop drop-3"></div>
   <div class="drop drop-4"></div>
   <div class="drop drop-5"></div>
</div>
</body>
</html>