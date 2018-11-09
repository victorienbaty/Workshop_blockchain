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
#Dashboardrevendeurs {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 5%;
}

#Dashboardrevendeurs td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#Dashboardrevendeurs tr:nth-child(even){background-color: #f2f2f2;}

#Dashboardrevendeurs tr:hover {background-color: #ddd;}

#Dashboardrevendeurs th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #c5c4c4;
    color: white;
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
       
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f1c927;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #0db469;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
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

<table id="Dashboardrevendeurs">
  <tr>
    <th>ID</th>
    <th>Date ouverture</th>
    <th>Pecheur</th>
    <th>Quota manquant kg</th> 
    <th>Montant a recevoir en euro</th>
    <th>Statut</th>
  </tr>
   <tr>
    <td>0158</td>
    <td>12/06/2017</td>
    <td>Maria Anders</td>   
    <td>5054</td>
    <td>2779</td>
    <td>En cours</td>
   
       
  </tr>
  <tr>
    <td>0159</td>
    <td>21/12/2018</td>
    <td>Christina Berglund</td>
    <td>10000</td>   
    <td>7800</td>
    <td>En cours</td>
   
  </tr>
  <tr>
    <td>0160</td>
    <td>30/05/2015</td>       
    <td>Francisco Chang</td>
    <td>120</td>
    <td>62,4</td>
    <td>Valide</td>
   
  </tr>
  
</table>
       
   </body>
   
</html> 
