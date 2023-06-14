@extends('layouts.app')
@section('content')


<html lang="fr">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Comment Créer un beau Formulaire de Contact en HTML & CSS</title>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.cdnfonts.com/css/australia-custom" rel="stylesheet">
  </head>
  <body>
 <style>
                @import url(https://fonts.googleapis.com/css?family=Roboto:400,900);

    h1{
        font-family: 'Australia Custom', sans-serif;
        color : black;
  font-size : 5em;
  font-weight : bold;
  text-transform : uppercase;
  animation : translate1 3s infinite;
    }
 </style>

  <form  action="dataInsert2" method="post">
    @csrf


        <td>
            <br><br>
         <h1>mon panier</h1>



            </td>
            <br><br>
      <h2>Contactez-nous</h2>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
            <div class="groupe">
                <label>Votre nom</label>
                <input type="text" autocomplete="off"  name="nomclient" />
                <i class="fas fa-user"></i>
              </div>
          <div class="groupe">
            <label>Votre Prénom</label>
            <input type="text" autocomplete="off"  name="prenomclient" />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="text" autocomplete="off"  name="emailclient"/>
            <i class="fas fa-envelope"></i>
          </div>
          <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text" autocomplete="off" name="telclient"/>
            <i class="fas fa-mobile"></i>
          </div>
          <div class="groupe">
            <label>réference du produit</label>
            <input type="text" autocomplete="off" name="id_product"/>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>


      </div>

      <div class="pied-formulaire" align="center">
        <button type="submit">Envoyer le message</button>
      </div>
    </form>
    @endsection
  </body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");

body {
  margin: 0px;
  padding: 0px;
  background-color: #fef1df;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Roboto", sans-serif;
  font-weight: bold;
}

form {
  padding: 30px;
  background-color: white;
  border-radius: 10px;
}
form h1 {
  font-size: 20px;
}
form .separation {
  width: 100%;
  height: 1px;
  background-color: #747cdf;
}
form .corps-formulaire {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 30px;
}
form .corps-formulaire .groupe {
  position: relative; /* Pour mettre positionner l’élément dans le flux normal de la page */
  margin-top: 20px;
  display: flex;
  flex-direction: column;
}
form .corps-formulaire .gauche .groupe input {
  margin-top: 5px;
  padding: 10px 5px 10px 30px;
  border: 1px solid #c9c9c9;
  outline-color: #747cdf;
  border-radius: 5px;
}
form .corps-formulaire .gauche .groupe i {
  position: absolute; /* positionné par rapport à son parent le plus proche positionné */
  left: 0;
  top: 25px;
  padding: 9px 8px;
  color: #747cdf;
}
form .corps-formulaire .droite {
  margin-left: 40px;
}
form .corps-formulaire .droite .groupe {
  height: 100%;
}
form .corps-formulaire .droite .groupe textarea {
  margin-top: 5px;
  padding: 10px;
  background-color: #f1f1f1;
  border: 2px solid #747cdf;
  outline: none;
  border-radius: 5px;
  resize: none;
  height: 72%;
}
form .pied-formulaire button {
  margin-top: 10px;
  background-color: #747cdf;
  color: white;
  font-size: 15px;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  transition: transform 0.5s;
}
form .pied-formulaire button:hover {
  transform: scale(1.05);
}

@media screen and (max-width: 920px) {
  form .corps-formulaire .droite {
    margin-left: 0px;
  }
}

</style>
