<html>
<head>
  <h2 style="text-align:center">Forecast Search</h2>


<script type ="text/javascript">
function myFunction() {
  document.forms["myform"]["street"].value="";
  document.forms["myform"]["city"].value="";
  document.forms["myform"]["states"].value="test";
  document.forms["myform"]["temp"].value="ftemp";
    document.getElementById("weathertable").innerHTML="";
    
    }


  function checkForm()
  {
    if(myform.street.value == "") {
      alert("Please enter value for Street Address");
      myform.street.focus();
      return false;
    }
    
   else if(myform.city.value == "") {
      alert("Please enter value for City");
      myform.city.focus();
      return false;
    }

 var x = document.forms["myform"]["states"].value;
     if (x == "test") {
         alert("Please select one state");
         myform.states.focus();
         return false;
     }

    /*if(document.getElementById("ctemp").checked = true)
    {
     document.getElementById("ftemp").checked=false;
    }*/


      }

</script>
<style type="text/css">
table{
                border-color:black;
                border:3px;
                margin:auto;
                border-style:solid;
                padding:10px 30px 10px 10px;
            }
            #forecast{
                text-align:center;
            }

       </style>
</head>
<body>

<form id="myform"  name="myform" style="text-align:center" method="post" action="forecast.php">
      <table>
                <tr>
                    <td><label id="1">Street Address:*</label></td><td><input type="text" name="street" value="<?php echo isset($_POST['street']) ? $_POST['street']: ''; ?>"></td>
                </tr>
    <tr>
      <td><label id="1">City:*</label></td><td><input type="text" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city']: ''; ?>"></td></tr>
<tr>
             <td><label id="1">State:*</label></td><td><select name="states" id="states">
<option value="test">Select Your State...
</option>  
<option value="AL" <?php if (isset($_POST['states']) && ($_POST['states']=='AL')) echo 'selected="selected"'; ?>>Alabama</option>
  <option value="AK" <?php if (isset($_POST['states']) && ($_POST['states']=='AK')) echo 'selected="selected"'; ?>>Alaska</option>
  <option value="AZ" <?php if (isset($_POST['states']) && ($_POST['states']=='AZ')) echo 'selected="selected"'; ?>>Arizona</option>
  <option value="AR" <?php if (isset($_POST['states']) && ($_POST['states']=='AR')) echo 'selected="selected"'; ?>>Arkansas</option>
  <option value="CA" <?php if (isset($_POST['states']) && ($_POST['states']=='CA')) echo 'selected="selected"'; ?>>California</option>
  <option value="CO" <?php if (isset($_POST['states']) && ($_POST['states']=='CO')) echo 'selected="selected"'; ?>>Colorado</option>
  <option value="CT" <?php if (isset($_POST['states']) && ($_POST['states']=='CT')) echo 'selected="selected"'; ?>>Connecticut</option>
  <option value="DE" <?php if (isset($_POST['states']) && ($_POST['states']=='DE')) echo 'selected="selected"'; ?>>Delaware</option>
  <option value="DC" <?php if (isset($_POST['states']) && ($_POST['states']=='DC')) echo 'selected="selected"'; ?>>District Of Columbia</option>
  <option value="FL" <?php if (isset($_POST['states']) && ($_POST['states']=='FL')) echo 'selected="selected"'; ?>>Florida</option>
  <option value="GA" <?php if (isset($_POST['states']) && ($_POST['states']=='GA')) echo 'selected="selected"'; ?>>Georgia</option>
  <option value="HI" <?php if (isset($_POST['states']) && ($_POST['states']=='HI')) echo 'selected="selected"'; ?>>Hawaii</option>
  <option value="ID" <?php if (isset($_POST['states']) && ($_POST['states']=='ID')) echo 'selected="selected"'; ?>>Idaho</option>
  <option value="IL" <?php if (isset($_POST['states']) && ($_POST['states']=='IL')) echo 'selected="selected"'; ?>>Illinois</option>
  <option value="IN" <?php if (isset($_POST['states']) && ($_POST['states']=='IN')) echo 'selected="selected"'; ?>>Indiana</option>
  <option value="IA" <?php if (isset($_POST['states']) && ($_POST['states']=='IA')) echo 'selected="selected"'; ?>>Iowa</option>
  <option value="KS" <?php if (isset($_POST['states']) && ($_POST['states']=='KS')) echo 'selected="selected"'; ?>>Kansas</option>
  <option value="KY" <?php if (isset($_POST['states']) && ($_POST['states']=='KY')) echo 'selected="selected"'; ?>>Kentucky</option>
  <option value="LA" <?php if (isset($_POST['states']) && ($_POST['states']=='LA')) echo 'selected="selected"'; ?>>Louisiana</option>
  <option value="ME" <?php if (isset($_POST['states']) && ($_POST['states']=='ME')) echo 'selected="selected"'; ?>>Maine</option>
  <option value="MD" <?php if (isset($_POST['states']) && ($_POST['states']=='MC')) echo 'selected="selected"'; ?>>Maryland</option>
  <option value="MA" <?php if (isset($_POST['states']) && ($_POST['states']=='MA')) echo 'selected="selected"'; ?>>Massachusetts</option>
  <option value="MI" <?php if (isset($_POST['states']) && ($_POST['states']=='MI')) echo 'selected="selected"'; ?>>Michigan</option>
  <option value="MN" <?php if (isset($_POST['states']) && ($_POST['states']=='MN')) echo 'selected="selected"'; ?>>Minnesota</option>
  <option value="MS" <?php if (isset($_POST['states']) && ($_POST['states']=='MS')) echo 'selected="selected"'; ?>>Mississippi</option>
  <option value="MO" <?php if (isset($_POST['states']) && ($_POST['states']=='MO')) echo 'selected="selected"'; ?>>Missouri</option>
  <option value="MT" <?php if (isset($_POST['states']) && ($_POST['states']=='MT')) echo 'selected="selected"'; ?>>Montana</option>
  <option value="NE" <?php if (isset($_POST['states']) && ($_POST['states']=='NE')) echo 'selected="selected"'; ?>>Nebraska</option>
  <option value="NV" <?php if (isset($_POST['states']) && ($_POST['states']=='NV')) echo 'selected="selected"'; ?>>Nevada</option>
  <option value="NH" <?php if (isset($_POST['states']) && ($_POST['states']=='NH')) echo 'selected="selected"'; ?>>New Hampshire</option>
  <option value="NJ" <?php if (isset($_POST['states']) && ($_POST['states']=='NJ')) echo 'selected="selected"'; ?>>New Jersey</option>
  <option value="NM" <?php if (isset($_POST['states']) && ($_POST['states']=='NM')) echo 'selected="selected"'; ?>>New Mexico</option>
  <option value="NY" <?php if (isset($_POST['states']) && ($_POST['states']=='NY')) echo 'selected="selected"'; ?>>New York</option>
  <option value="NC" <?php if (isset($_POST['states']) && ($_POST['states']=='NC')) echo 'selected="selected"'; ?>>North Carolina</option>
  <option value="ND" <?php if (isset($_POST['states']) && ($_POST['states']=='ND')) echo 'selected="selected"'; ?>>North Dakota</option>
  <option value="OH" <?php if (isset($_POST['states']) && ($_POST['states']=='OH')) echo 'selected="selected"'; ?>>Ohio</option>
  <option value="OK" <?php if (isset($_POST['states']) && ($_POST['states']=='OK')) echo 'selected="selected"'; ?>>Oklahoma</option>
  <option value="OR" <?php if (isset($_POST['states']) && ($_POST['states']=='OR')) echo 'selected="selected"'; ?>>Oregon</option>
  <option value="PA" <?php if (isset($_POST['states']) && ($_POST['states']=='PA')) echo 'selected="selected"'; ?>>Pennsylvania</option>
  <option value="RI" <?php if (isset($_POST['states']) && ($_POST['states']=='RI')) echo 'selected="selected"'; ?>>Rhode Island</option>
  <option value="SC" <?php if (isset($_POST['states']) && ($_POST['states']=='SC')) echo 'selected="selected"'; ?>>South Carolina</option>
  <option value="SD" <?php if (isset($_POST['states']) && ($_POST['states']=='SD')) echo 'selected="selected"'; ?>>South Dakota</option>
  <option value="TN" <?php if (isset($_POST['states']) && ($_POST['states']=='TN')) echo 'selected="selected"'; ?>>Tennessee</option>
  <option value="TX" <?php if (isset($_POST['states']) && ($_POST['states']=='TX')) echo 'selected="selected"'; ?>>Texas</option>
  <option value="UT" <?php if (isset($_POST['states']) && ($_POST['states']=='UT')) echo 'selected="selected"'; ?> >Utah</option>
  <option value="VT" <?php if (isset($_POST['states']) && ($_POST['states']=='VT')) echo 'selected="selected"'; ?>>Vermont</option>
  <option value="VA" <?php if (isset($_POST['states']) && ($_POST['states']=='VA')) echo 'selected="selected"'; ?>>Virginia</option>
  <option value="WA" <?php if (isset($_POST['states']) && ($_POST['states']=='WA')) echo 'selected="selected"'; ?>>Washington</option>
  <option value="WV" <?php if (isset($_POST['states']) && ($_POST['states']=='WV')) echo 'selected="selected"'; ?>>West Virginia</option>
  <option value="WI" <?php if (isset($_POST['states']) && ($_POST['states']=='WI')) echo 'selected="selected"'; ?>>Wisconsin</option>
  <option value="WY" <?php if (isset($_POST['states']) && ($_POST['states']=='WY')) echo 'selected="selected"'; ?>>Wyoming</option>
</select></td>
</tr> 
     <tr>
      <td><label id="1">Degree:*</label></td><td> <input type="radio" name="temp" value="ftemp" id="ftemp" checked <?php if (isset($_POST['temp']) && $_POST['temp']=="ftemp") echo "checked";?>>Fahrenheit
  <input type="radio" name="temp" value="ctemp" id="ctemp"<?php if (isset($_POST['temp']) && $_POST['temp']=="ctemp") echo "checked";?>> Celsius</td></tr>
  <tr>
    <td></td>
<td><button type="submit" onclick="checkForm()" name="search">Search</button>
<button type="button  " onclick="myFunction()" >Clear</button></td></tr>
<tr><td><i> * - Mandatory Fields </i><br></td></tr>
<tr><td colspan="2" id="forecast"><p><a href="http://forecast.io/"><u>Powered By Forecast.io</u></a></p></td></tr>
</table>
</form>



<?php
if (isset($_POST["search"])&& ($_POST["street"]!="")&&($_POST["city"]!="")&&($_POST["states"]!="test")) {
     // collect value of input field
//if($_POST["search"])

       $streetaddress = $_POST['street']; 
          $city = $_POST['city'];
               $state = $_POST['states']; 
               $temp=$_POST['temp'];
               //if(myFunction()==false)
               //{
                if(isset($_POST["street"]) && isset($_POST["city"]) && $state!="blank")
        {
               $rw= 'https://maps.googleapis.com/maps/api/geocode/xml?address=';
              // echo $rw . rawurlencode($streetaddress) . rawurlencode($city) . rawurlencode($state) . '&' . rawurlencode('key=AIzaSyBoVapgBhg0oz1YgLvPeKRu4vYrkE6DiS0');   
    $geocode = file_get_contents( $rw . rawurlencode($streetaddress) . rawurlencode($city) . rawurlencode($state) . '&' . rawurlencode('key=AIzaSyBoVapgBhg0oz1YgLvPeKRu4vYrkE6DiS0'));
          $xml = simplexml_load_string($geocode);
          //print_r($xml);
          if($xml->status[0]!="ZERO_RESULTS")
          {
$lat = (string) $xml->result[0]->geometry[0]->location->lat;
$long = (string) $xml->result[0]->geometry[0]->location->lng;

if($temp=='ftemp')
{
  $unit='us';
}
else
{
  $unit='si';
}
$forekey='https://api.forecast.io/forecast/e4299f518db8f8a7e4e1852c6e961bb5/';
$fore=$forekey .rawurlencode($lat) . ',' . rawurlencode($long) . '?' . 'units=' . rawurlencode($unit) . '&exclude=flags';
$contents=file_get_contents($fore);
$obj=json_decode($contents,'/n');
//var_dump($obj);
//echo json_encode($obj);  
  $current=$obj['currently'];
  $time=$obj['timezone'];
date_default_timezone_set("$time");

    $summary=$current['summary'];
  if($current['icon']=="partly-cloudy-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";
            }
            else if($current['icon']=="partly-cloudy-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
            }
            else if($current['icon']=="clear-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
            }
            else if($current['icon']=="clear-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
            }
            else if($current['icon']=="rain")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
            }
            else if($current['icon']=="snow")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
            }
            else if($current['icon']=="sleet")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
            }
            else if($current['icon']=="wind")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
            }
            else if($current['icon']=="fog")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
            }
            else if($current['icon']=="cloudy")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png";
            } 
            else 
            {
              $icon="";
            }
            $precipIntensity=$current['precipIntensity'];

if($unit=="si")
{
  $precipIntensity=($current['precipIntensity']/24.5);
}
if($precipIntensity==0 && $precipIntensity<0.002)
{
  $precipIntensityvalue="None";
}
else if ($precipIntensity>=0.02 && $precipIntensity<0.017)
 {
   $precipIntensityvalue="Very Light";
}
else if ($precipIntensity>=0.017 && $precipIntensity<0.1)
 {
   $precipIntensityvalue="Light";
}
else if ($precipIntensity>=0.1&& $precipIntensity<0.4)
 {
   $precipIntensityvalue="Moderate";
}
else if ($precipIntensity>=0.4)
 {
   $precipIntensityvalue="Heavy";
}
else
$precipIntensityvalue="";

$temperature=round($current['temperature']);
$apparentTemperature=$current['apparentTemperature'];
$precipprob=$current['precipProbability']*100;
$windspeed=round($current['windSpeed']);
$dewpoint=round($current['dewPoint']);
$humidity=$current['humidity']*100;
$visibility=round($current['visibility']);
$sunrisetime=$obj['daily']['data'][0]['sunriseTime'];
$sunrisetimenew=date("h:i A",$sunrisetime);
$sunsettime=$obj['daily']['data'][0]['sunsetTime'];
$sunsettimenew=date("h:i A",$sunsettime);


echo "<table align='center' id='weathertable'>";
  
  echo "<col width='200px'>";

         echo "<tr align='center'><th colspan='2'>$summary</th></tr>";
         echo "<br>";
         echo "<tr align='center'><th colspan='2'>$temperature";
         echo "&deg;";
         if($temp=='ftemp')
         {
echo "F";
         }
         else
         {
          echo "C";
         }
         echo "<br>";

         echo '<tr><th colspan="2"><img src="' . $icon . '" title = " '.$summary.' "align="middle"></th></tr>';
                  
         echo "<tr><td>Precipitation</td>";
         echo "<td>$precipIntensityvalue</td>";
         echo "</tr>"; 
         echo "<tr><td>Chance of Rain</td>";
         echo "<td>$precipprob";
         echo "%</td></tr>";
         if($unit=="si")
         {
          echo "<tr><td>Wind Speed</td>";
         echo "<td>$windspeed";
         echo " mps</td></tr>";
         }
         else
         {
         echo "<tr><td>Wind Speed</td>";
         echo "<td>$windspeed";
         echo " mph</td></tr>";
       }
       if($unit=="si")
         {
         echo "<tr><td>Dew Point</td>";
         echo "<td>$dewpoint";
         echo "&deg;";
         echo "C</td></tr>";
       }
      else
         {
         echo "<tr><td>Dew Point</td>";
         echo "<td>$dewpoint";
         echo "&deg;";
         echo "F</td></tr>";
       }

         echo "<tr><td>Humidity</td>";
         echo "<td>$humidity";
         echo "%</td></tr>";
         if($unit=="si")
         {
          echo "<tr><td>Visibility</td>";
         echo "<td>$visibility";
         echo " km</td></tr>";
       }
       else
       {
         echo "<tr><td>Visibility</td>";
         echo "<td>$visibility";
         echo " mi</td></tr>";
       }
         echo "<tr><td>Sunrise</td>";
         echo "<td>$sunrisetimenew</td></tr>";
         echo "<tr><td>Sunset</td>";
         echo "<td>$sunsettimenew</td></tr>";
        
                }
                else 
                  echo "Wrong Address";
        }
        
      }



?>
</noscript>   

</body>
</html>