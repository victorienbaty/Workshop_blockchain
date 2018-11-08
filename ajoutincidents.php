<html lang="fr">	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <head>	
      <title>Incidents</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
		    background-color:#e9e9e9
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

      </style>
   </head>
   
   <body>
       
       <style>
           ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #cdcdcd;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #333;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

       </style>
           
          <ul>
              <li><a href="dashboardpecheurs.php">Dashboard</a></li>
              <li><a href="ajoutincidents.php">Incidents</a></li>
              <li><a href="meteo.php">Previsions meteo</a></li>            
              <li style="float:right"><a class="active" href="logout.php">Deconnexion</a></li>
            
         </ul> 
       
       <div>  
           <br>
           <br>
           <label for="titre" style="font-size: 25px">Ajouter un incident</label>
           <br><br>
           <br>
           <br>
           <form action="/envoi_incident.php">
                        <label for="demandeur">Prenom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prenom...">

                        <label for="lname">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom...">

                        <label for="country"></label>
                        <select id="country" name="country">
                          <option value="grele">Grele</option>
                          <option value="terrain">Glissement de terrain</option>
                          <option value="pluie">Pluie</option>
                          <option value="volcan">Eruption volcanique</option>
                          <option value="neige">Neige</option>
                          <option value="tempete">Tempete</option>
                          <option value="innondation">Innondation</option>
                        </select>

                        <label for="datedebut">Date de debut d'incident</label>
                        <br>
                        <input type="date">

                        <label for="datefin">Date de fin d'incident</label>
                        <br>
                        <input type="date">

                        <label for="quantitepoisson">Quantite de poisson peches</label>
                        <input type="text" id="nom" name="nom" placeholder="Quantite en kilogrammes...">


                        <input type="submit" value="Envoyer rapport">
        </form>
       
  </div>
   </body>