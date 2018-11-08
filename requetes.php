<html>
	
   <head>	
      <title>Dashboard Revendeurs</title>
      
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

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

.closebtn {
    padding-left: 10px;
    color: #888;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer;
}

.closebtn:hover {
    color: #000;
}
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
</style>
   </head>
   
   <body>
        <ul>
              <li><a href="dashboardrevendeurs.php">Dashboard</a></li>   
              <li><a href="requetes.php">Requetes</a></li>
              <li style="float:right"><a class="active" href="logout.php">Deconnexion</a></li>
            
         </ul> 
       
     
<div class="container">
  <div style="text-align:center">
    <h2>Contactez nous</h2>
    <label class="prout">Pour ouvrir une requete, veuillez remplir les champs suivants</label>
  </div>
    <br>
  <div class="row">
    <div class="column">
    <h4>Vos interlocuteurs</h4><br>
       <div class="chip">
  <img src="asiat.jpg" alt="Person" width="96" height="96">
  Elliot Eldragon
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
 
</div> 

  <div class="chip">
  <br>
  <img src="femme.jpg" alt="Person" width="96" height="96">
  Jeanne Oskour
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div> 
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="demandeur">Prenom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prenom...">    
                        <label for="lname">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom...">
        <label for="idticket">Id du ticket</label>
        <select id="idticket" name="idticket">
          <option value="1">0158</option>
          <option value="2">0159</option>
          <option value="3">0160</option>
        </select>
        <label for="sujet">Sujet</label>
        <textarea id="sujet" name="sujet" placeholder="Precisez votre requete..." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>        
   </body>
   
</html> 