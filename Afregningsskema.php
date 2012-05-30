<html>
    <body>
<form method="POST" action="Afregningsskema.php"> 
Sag<BR>
<input type=text name=sag size=15><BR>
Dato<BR>
<input type=text name=dato size=15><BR>
Konto<BR>
<input type=text name=konto size=15><BR>
Beløb<BR>
<input type=text name=beløb size=15><BR>
<input type=submit  value="Opret sag">
</form> 
    
<?php
    mysql_connect("localhost", "root", "123") or die("Ingen forbindelse");
    mysql_select_db("adb")or die("Ingen forbindelse");
    
    $Sagstring = $_POST["sag"];
    $Sag = "INSERT INTO Afregningsskema (Sag) VALUES ('$Sagstring')";
    $query1 = mysql_query($Sag);
    
    $Datostring = $_POST["dato"];
    $Dato = "INSERT INTO Afregningsskema (Dato) VALUES ('$Datostring')";
    $query2 = mysql_query($Dato);
    
    $Kontostring = $_POST["konto"];
    $Konto = "INSERT INTO Afregningsskema (Konto) VALUES ('$Kontostring')";
    $query3 = mysql_query($Konto);
    
    $Belobstring = $_POST["Belob"];
    $Belob = "INSERT INTO Afregningsskema (Belob) VALUES ('$Belobstring')";
    $query4 = mysql_query($Belob);
?>
        
<form enctype="multipart/form-data" action="Afregningsskema.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input name="userfile" type="file" />
    <input type="submit" value="Upload" />
</form>
    
<?php

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Filen er uploadet\n";
} else {
    echo "Der er sgu noget galt!\n";
}

echo 'Her gik det galt:';
print_r($_FILES);

?>
    </body>
</html>