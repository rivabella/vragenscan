<?php
if($_SERVER['REMOTE_ADDR'] == "213.125.227.218" OR $_SERVER['REMOTE_ADDR'] == "83.80.193.242") { 
	error_reporting(E_ALL);
	ini_set('display_errors',1);
}
?>
<html>
<head>
    
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
include 'array.php';
$faseErr1= $faseErr2=$faseErr3=$faseErr4=$faseErr5=$faseErr6=$faseErr7=$faseErr8=$faseErr9=$faseErr10="";
$faseErr11=$faseErr12=$faseErr13=$faseErr14=$faseErr15=$faseErr16=$faseErr17=$faseErr18=$faseErr19="";
$vraag1 = $vraag2 = $vraag3 = $vraag4 = $vraag5 = $vraag6 = $vraag7 = $vraag8= $vraag9 = $vraag10 ="";
$vraag11 = $vraag12 = $vraag13 = $vraag14 = $vraag15 = $vraag16 = $vraag17 = $vraag18= $vraag19 = "";
$count=0;
$fase = $_GET['fase'];
                   
$faseVragen="";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                     if(empty($_POST["vraag1"])){
                        $faseErr1 = "U moet een keuze maken";
                    }else{
                        $vraag1 = test_input($_POST["vraag1"]);
                       if( $vraag1 == 'ja') { 
                           $count++;
                       }
                        
                       
                    }
                    if(empty($_POST["vraag2"])){
                        $faseErr2 = "U moet een keuze maken";
                    }else{
                        
                        $vraag2 = test_input($_POST["vraag2"]);
                        if( $vraag2 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag3"])){
                        $faseErr3 = "U moet een keuze maken";
                    }else{
                        $vraag3 = test_input($_POST["vraag3"]);
                        if( $vraag3 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag4"])){
                        $faseErr4 = "U moet nog een keuze maken bij vraag 4";
                    }else{
                        $vraag4 = test_input($_POST["vraag4"]);
                        if( $vraag4 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag5"])){
                        $faseErr5 = "U moet een keuze maken";
                    }else{
                        $vraag5 = test_input($_POST["vraag5"]);
                        if( $vraag5 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag6"])){
                        $faseErr6 = "U moet een keuze maken";
                    }else{
                        $vraag6 = test_input($_POST["vraag6"]);
                        if( $vraag6 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag7"])){
                        $faseErr7 = "U moet een keuze maken";
                    }else{
                        $vraag7 = test_input($_POST["vraag7"]);
                        if( $vraag7 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag8"])){
                        $faseErr8 = "U moet een keuze maken";
                    }else{
                        $vraag8 = test_input($_POST["vraag8"]);
                        if( $vraag8 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag9"])){
                        $faseErr9 = "U moet een keuze maken";
                    }else{
                        $vraag9 = test_input($_POST["vraag9"]);
                        if( $vraag9 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag10"])){
                        $faseErr10 = "U moet een keuze maken";
                    }else{
                        $vraag10 = test_input($_POST["vraag10"]);
                        if( $vraag10 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag11"])){
                        $faseErr11 = "U moet een keuze maken";
                    }else{
                        $vraag11 = test_input($_POST["vraag11"]);
                        if( $vraag11 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag12"])){
                        $faseErr12 = "U moet een keuze maken";
                    }else{
                        $vraag12 = test_input($_POST["vraag12"]);
                        if( $vraag12 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag13"])){
                        $faseErr13 = "U moet een keuze maken";
                    }else{
                        $vraag13 = test_input($_POST["vraag13"]);
                        if( $vraag13 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag14"])){
                        $faseErr14 = "U moet een keuze maken";
                    }else{
                        $vraag14 = test_input($_POST["vraag14"]);
                        if( $vraag14 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag15"])){
                        $faseErr15 = "U moet een keuze maken";
                    }else{
                        $vraag15 = test_input($_POST["vraag15"]);
                        if( $vraag15 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag16"])){
                        $faseErr16 = "U moet een keuze maken";
                    }else{
                        $vraag16 = test_input($_POST["vraag16"]);
                        if( $vraag16 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag17"])){
                        $faseErr17 = "U moet een keuze maken";
                    }else{
                        $vraag17 = test_input($_POST["vraag17"]);
                        if( $vraag17 == 'ja') { 
                           $count++;
                       }
                    }
                    if(empty($_POST["vraag18"])){
                        $faseErr18 = "U moet een keuze maken";
                    }else{
                        $vraag18 = test_input($_POST["vraag18"]);
                        if( $vraag18 == 'ja') { 
                           $count++;
                       }
                    }
                     if(empty($_POST["vraag19"])){
                        $faseErr19 = "U moet een keuze maken";
                    }else{
                        $vraag19 = test_input($_POST["vraag19"]);
                        if( $vraag19 == 'ja') { 
                           $count++;
                       }
                    }
                                          
                   if ($count <= 5) {
                        $faseVragen = "1";
                        } elseif ($count>14) {
                        $faseVragen = "3";
                        } else {
                        $faseVragen = "2";
                        }
                   
                    if ( is_numeric($fase) && is_numeric($faseVragen) ) {
                        if($fase>$faseVragen){
                        $absolute_difference = -abs( $fase - $faseVragen );
                        echo "$absolute_difference";
                        }
                        else{
                           $absolute_difference = abs( $fase - $faseVragen );
                        echo "$absolute_difference";  
                        }
                        }
                        switch ($absolute_difference) {
                            case 0:
                             switch ($fase) {
                                        case 1:
                                        header("Location: uitslagen.php?item=neutraal1");
                                            break;
                                         case 2:
                                        header("Location: uitslagen.php?item=neutraal2");
                                            break;
                                        case 3:
                                        header("Location: uitslagen.php?item=neutraal3");
                                            break;
                                        default:
                                            break;
                                    }
                                        
                                        break;
                            case -2:
                                header("Location: uitslagen.php?item=min2fase");
                                break;
                            case -1:
                                    switch ($fase) {
                                        case 1:
                                        header("Location: uitslagen.php?item=min1fase1");
                                            break;
                                         case 2:
                                        header("Location: uitslagen.php?item=min1fase2");
                                            break;
                                        case 3:
                                        header("Location: uitslagen.php?item=min1fase3");
                                            break;
                                        default:
                                            break;
                                    }
                                        
                                        break;
                              
                            case 1:
                                switch ($fase) {
                                        case 1:
                                        header("Location: uitslagen.php?item=plus1fase1");
                                            break;
                                         case 2:
                                        header("Location: uitslagen.php?item=plus1fase2");
                                            break;
                                        default:
                                            break;
                                    }
                                        
                                        break;
                            case 2:
                                header("Location: uitslagen.php?item=plus2fase");
                                break;
                            default:
                                break;
                        }
                     
        }
       
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
        }
        
        ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?fase=<?php echo $fase;?>"> 
<h1>vragen</h1>
       Is het duidelijk waar de verandwoordelijkheden liggen?<span class="error">*<?php echo $faseErr1;?></span><br/><br/>
                    <input type="radio" name="vraag1" <?php if (isset($vraag1) && $vraag1=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag1" <?php if (isset($vraag1) && $vraag1=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Staat u er voor open om feedback te ontvangen?<span class="error"><?php echo $faseErr2;?></span><br/><br/>
                    <input type="radio" name="vraag2" <?php if (isset($vraag2) && $vraag2=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag2" <?php if (isset($vraag2) && $vraag2=="nee") echo "checked";?>
                            value="nee">nee<br/><br/>
        Zou uw zaken relatie slecht nieuws proactief met u delen?<span class="error"><?php echo $faseErr3;?></span><br/><br/>
                    <input type="radio" name="vraag3" <?php if (isset($vraag3) && $vraag3=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag3" <?php if (isset($vraag3) && $vraag3=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Geeft u uw zakenrelatie de ruimte om verandwoordelijkheid te nemen?<span class="error"><?php echo $faseErr4;?></span><br/><br/>
                    <input type="radio" name="vraag4" <?php if (isset($vraag4) && $vraag4=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag4" <?php if (isset($vraag4) && $vraag4=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
       
        Informeren jullie elkaar proactief van de stand van zaken?<span class="error"><?php echo $faseErr5;?></span><br/><br/>
                    <input type="radio" name="vraag5" <?php if (isset($vraag5) && $vraag5=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag5" <?php if (isset($vraag5) && $vraag5=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Doet uw zakenrelatie er alles aan om beloftes waar te maken?<span class="error"><?php echo $faseErr6;?></span><br/><br/>
                    <input type="radio" name="vraag6" <?php if (isset($vraag6) && $vraag6=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag6" <?php if (isset($vraag6) && $vraag6=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
         Mag uw zakenrelatie een fout maken?<span class="error"><?php echo $faseErr7;?></span><br/><br/>
                    <input type="radio" name="vraag7" <?php if (isset($vraag7) && $vraag7=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag7" <?php if (isset($vraag7) && $vraag7=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Zijn elkaars verwachtingen al een overtroffen?<span class="error"><?php echo $faseErr8;?></span><br/><br/>
                    <input type="radio" name="vraag8" <?php if (isset($vraag8) && $vraag8=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag8" <?php if (isset($vraag8) && $vraag8=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Doet uw zakenrelatie weleens iets belangeloos voor u?<span class="error"><?php echo $faseErr9;?></span><br/><br/>
                    <input type="radio" name="vraag9" <?php if (isset($vraag9) && $vraag9=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag9" <?php if (isset($vraag9) && $vraag9=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Mag uw zakenrelatie u alles vragen?<span class="error"><?php echo $faseErr10;?></span><br/><br/>
                    <input type="radio" name="vraag10" <?php if (isset($vraag10) && $vraag10=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag10" <?php if (isset($vraag10) && $vraag10=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Durft u zich kwetsbaar op te stellen?<span class="error"><?php echo $faseErr11;?></span><br/><br/>
                    <input type="radio" name="vraag11" <?php if (isset($vraag11) && $vraag11=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag11" <?php if (isset($vraag11) && $vraag11=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Heeft u of uw zakenrelatie al eens nee verkocht?<span class="error"><?php echo $faseErr12;?></span><br/><br/>
                    <input type="radio" name="vraag12" <?php if (isset($vraag12) && $vraag12=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag12" <?php if (isset($vraag12) && $vraag12=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Zijn de zwaktes binnen uw zakenrelatie al een besproken?<span class="error"><?php echo $faseErr13;?></span><br/><br/>
                    <input type="radio" name="vraag13" <?php if (isset($vraag13) && $vraag13=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag13" <?php if (isset($vraag13) && $vraag13=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Laat u het achterste van uw tong zien aan uw zakenrelatie?<span class="error"><?php echo $faseErr14;?></span><br/><br/>
                    <input type="radio" name="vraag14" <?php if (isset($vraag14) && $vraag14=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag14" <?php if (isset($vraag14) && $vraag14=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Zijn jullie goed op de hoogte van elkaars strategische doelen?<span class="error"><?php echo $faseErr15;?></span><br/><br/>
                    <input type="radio" name="vraag15" <?php if (isset($vraag15) && $vraag15=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag15" <?php if (isset($vraag15) && $vraag15=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        Ervaart u een klant-leverancier verhouding met uw zakenrelatie?<span class="error"><?php echo $faseErr16;?></span><br/><br/>
                    <input type="radio" name="vraag16" <?php if (isset($vraag16) && $vraag16=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag16" <?php if (isset($vraag16) && $vraag16=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
       Weten ook uw collega's uw zakenrelatie te vinden op verschillende niveaus?<span class="error"><?php echo $faseErr17;?></span><br/><br/>
                    <input type="radio" name="vraag17" <?php if (isset($vraag17) && $vraag17=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag17" <?php if (isset($vraag17) && $vraag17=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
       Worden nieuwe opdrachtmogelijkeden eerst aan elkaar voorgelegd?<span class="error"><?php echo $faseErr18;?></span><br/><br/>
                    <input type="radio" name="vraag18" <?php if (isset($vraag18) && $vraag18=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag18" <?php if (isset($vraag18) && $vraag18=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
       Deeld u regelmatig uw visie en toekomstplannen met elkaar?<span class="error"><?php echo $faseErr19;?></span><br/><br/>
                    <input type="radio" name="vraag19" <?php if (isset($vraag19) && $vraag19=="ja") echo "checked";?>
                         value="ja">ja
                     <input type="radio" name="vraag19" <?php if (isset($vraag19) && $vraag19=="nee") echo "checked";?>
                         value="nee">nee<br/><br/>
        
       <input type="submit" name="submit" value="Submit">
                
                          
       
    </body>
</html>   
     </form>