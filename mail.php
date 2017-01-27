<html>
<head>
<title>Recommendation form</title>
<script language="javascript">
<!--

function reset() {
document.tellafriend.name.value="";
document.tellafriend.email.value="";
document.tellafriend.fmail1.value="";
document.tellafriend.fmail2.value="";
document.tellafriend.fmail3.value="";
}

function validate() {


if (document.tellafriend.fmail1.value.length==0) {
alert("Oops! you'll need to enter a friend's email address");
return false;
}

if (document.tellafriend.email.value.length==0) {
alert("Oops! you forget to enter your email address");
return false;
}
if (document.tellafriend.name.value.length==0) {
alert("Oops! you forgot to enter your name");
return false;
}

document.tellafriend.submit()
return true;
}

//-->
</script>
</head>
<body onload="reset()" topmargin="0" leftmargin="0"> 
<p> 
<center>
</center>
<table width="450" cellpadding="0" cellspacing="0" align="center">
<tr valign="top">
<td valign="middle" align="center">&nbsp;
Vul onderstaande gegevens in om de link naar iw zakenpartner te sturen:<br>
<? $refurl = $_SERVER['HTTP_REFERER']; ?>
<? print $refurl;?>
<form name="tellafriend" action="tellafriend.php" method="post" onsubmit="return checkfields()">&nbsp;
<div align="center">
<center>
<table border="0" cellpadding="10" cellspacing="0">
<tr>
<td> *naam:</td>
<td>
<input size="30" name="name" maxlength="45">
</td>
</tr>
<tr>
<td>*email:</td>
<td>
<input size="30" name="email" maxlength="45">
</td>
</tr>
<tr>
<td colspan="2">
<p align="center">schrijf het email adres van uw zakenpartner:</td>
</tr>
<tr>
<td>*email:</td>
<td>
<input size="30" name="fmail1" maxlength="50">
</td>
</tr>
<tr>
<td colspan="2">
<p align="center">
    De email die verzonden wordt bevat uw naam en email adres.
 <br>
<input onclick="validate();" type="button" value="click once to send">
<input type=hidden name=refurl value="<? print $refurl;?>"> 

</td>
</tr>
</table>
</center>
</div>
</form>
</td>
</tr>
<tr valign="top">
<td valign="middle" align="center"> 
&nbsp;
</td>
</tr>
</table>
</body>
</html>

