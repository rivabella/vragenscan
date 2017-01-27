<?php
if($_SERVER['REMOTE_ADDR'] == "213.125.227.218" OR $_SERVER['REMOTE_ADDR'] == "83.80.193.242") { 
	error_reporting(E_ALL);
	ini_set('display_errors',1);
}
include 'connection.php';
?>
<!DOCTYPE HTML>  
<html>
<head>
   
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
        <?php
        
        // defineer variabele en zet de lege waardes
        $compNameErr = $nameErr = $mailErr = $faseErr="";
        $compname = $name = $mail =$fase= $vraag1 = $vraag2 = $vraag3 ="";
        
        $error = false; //No errors yet
        if(isset($_POST['submit'])){

                    if (empty($_POST["compname"])){
                        $compNameErr = "U moet uw bedrijfs naam invullen";
                       
                    }else{
                        $compname = test_input($_POST["compname"]);
                        //check of de bedrijfsnaam alleen letters en spates bevat
                        if(!preg_match("/^[a-zA-Z]*$/", $compname)){
                            $compNameErr="Alleen letters en spaties zijn toegestaan";
                           
                        }
                    }
                    if(empty($_POST["name"])){
                        $nameErr = "U moet uw naam invullen";
                       
                     }else{
                         $name = test_input($_POST["name"]);
                         //kijken of de naam letters en spaties bevat
                         if(!preg_match("/^[a-zA-Z]*$/", $name)){
                             $nameErr="Alleen letters en spaties zijn toegestaan";
                            
                         }
                     }
                     
                    if(empty($_POST["email"])){
                        $mailErr = "U moet uw email adres invullen";
                       
                    }else{
                        $mail= test_input($_POST["email"]);
                        //kijken of het adres klopt
                     if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                         $mailErr = "U heeft uw email adres niet goed ingevuld";
                        
                     }                        
                    }
                    
                    if(empty($_POST["fase"])){
                        $faseErr = "U moet een keuze maken";
                       
                    }else{
                        $fase = test_input($_POST["fase"]);
                        
                    }
             
                      
if(!$error) {
    
    
                try {
                   
                     $sql = "CREATE TABLE IF NOT EXISTS  Guests (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                    compname VARCHAR(30) NOT NULL,
                    name VARCHAR(30) NOT NULL,
                    mail VARCHAR(50)NOT NULL,
                    fase VARCHAR(50)NOT NULL);" ; 
                    

                     // use exec() because no results are returned
                    $db->exec($sql);
                    
                    $stmt = $db->prepare("INSERT INTO Guests (compname, name, mail, fase) 
                    VALUES (:compname, :name, :mail, :fase)");
                    $stmt->bindParam(':compname', $compname, PDO::PARAM_STR, 30);
                    $stmt->bindParam(':name', $name, PDO::PARAM_STR, 30);
                    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR, 30);
                    $stmt->bindParam(':fase', $fase, PDO::PARAM_STR,50);

                    $stmt->execute();
                    
                    
                    }
                catch(PDOException $e)
                    {
                    echo "Connection failed: " . $e->getMessage();
                    }
            
                    
                    header("Location: vragen.php?fase=$fase");   
             
             
        }
         
    
}
      function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
        }    
         

       
        ?>
        
    <h2> Formulier</h2>
    <p><span class="error">*verplichte velden</span></p>
    
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        
        Bedrijfs naam:<input type="text" name="compname" value="<?php echo$compname;?>">
        <span class="error">*<?php echo $compNameErr;?></span><br/><br/>
        Naam: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $mail;?>">
        <span class="error">* <?php echo $mailErr;?></span>
        <br><br>
        In welke fase bevind u zich?<span class="error">* <?php echo $faseErr;?></span><br/><br/>
        <input type="radio" name="fase" <?php if (isset($fase) && $fase=="1") echo "checked";?> value="1">Fase 1:
        Deze fase gaat van start op dag &#233;&#233;n van de samenwerking en kan op twee manieren eindigen. Door verstrijken van tijd,
        namelijk na drie jaar. Of op het moment waarop besloten wordt tot een contractverlenging of een uitbreiding van de share wallet.<br/><br/>
        <input type="radio" name="fase" <?php if (isset($fase) && $fase=="2") echo "checked";?> value="2">Fase 2:
        In deze fase heeft u een lange termijn relatie. Dit omdat u langer dan 3 jaar samenwerkt of omdat het contract is verlengd of 
        de share of wallet is uitgebreid.<br/><br/>
        <input type="radio" name="fase" <?php if (isset($fase) && $fase=="3") echo "checked";?> value="3">Fase 3:
        In deze fase is er geen sprake meer van leveranciers of klant. U werkt minimaal 3 jaar samen en de relatie heeft zich ontwikkeld tot 
        een partnership       
       <br><br>
      <input type="submit" name="submit" value="Submit">  
</form>
   
        
       
        
        
    </body>
</html>
