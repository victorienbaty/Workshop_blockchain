<html>
	
   <head>	
      <title>Dashboard Pecheurs</title>
      
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
#Dashboardpecheur {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 5%;
}

#Dashboardpecheur td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#Dashboardpecheur tr:nth-child(even){background-color: #f2f2f2;}

#Dashboardpecheur tr:hover {background-color: #ddd;}

#Dashboardpecheur th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #c5c4c4;
    color: white;
}

       </style>
           
          <ul>
              <li><a href="dashboardpecheurs.php">Dashboard</a></li>
              <li><a href="ajoutincidents.php">Incidents</a></li>
              <li><a href="meteo.php">Previsions meteo</a></li>            
              <li style="float:right"><a class="active" href="logout.php">Deconnexion</a></li>
            
         </ul> 
       
    
<table id="Dashboardpecheur">
  <tr>
    <th>ID</th>
    <th>Date ouverture</th>   
    <th>Type intemperie</th>
    <th>Date debut</th>
    <th>Date fin</th>
    <th>Quota manquant en kg</th>    
  </tr>
   <tr>
    <td>0158</td>
    <td>12/06/2017</td>
    <td>Pluie</td>
    <td>07/06/2017</td>
    <td>11/06/2017</td>
    <td>5054</td>
  </tr>
  <tr>
    <td>0159</td>
    <td>21/12/2018</td>
    <td>Grele</td>
    <td>15/12/2018</td>
    <td>17/12/2018</td>
    <td>10000</td>       
  </tr>
  <tr>
    <td>0160</td>
    <td>30/05/2015</td>
    <td>Glissement de terrain</td>
    <td>28/05/2015</td>
    <td>30/05/2018</td>
    <td>10</td>
  </tr>
  
</table>
   </body>