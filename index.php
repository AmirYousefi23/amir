<?php

// Array med alla stationer längs tåglinje 19
$linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 
            'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 
            'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan', 'Odenplan', 'S:T Eriksplan', 
            'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 
            'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 
            'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];

// Funktion för att beräkna restid och ankomsttid
function calculateJourney($from, $to) {
    global $linje19;
    
      // Hitta index för avresestation och destination
      $fromIndex = array_search($from, $linje19);
      $toIndex = array_search($to, $linje19);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tågresa</title>
</head>
<body>
    <h2>Välj avresestation och destination</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Från station:
        <select name="from_station">
            <?php
            foreach ($linje19 as $station) {
                echo "<option value='$station'>$station</option>";
            }
            ?>
        </select>
        <br><br>
        Till station:
        <select name="to_station">
            <?php
            foreach ($linje19 as $station) {
                echo "<option value='$station'>$station</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Beräkna">
    </form>
    
</body>
</html>


    
</body>
</html>