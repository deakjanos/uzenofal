<?php
include 'config.php';

if($_POST['submit']) {

    if(!$_POST['author']) {
        echo 'Hiba! Név hiányzik.';
        die;
    }
    if(!$_POST['email']) {
        echo 'Hiba! Email hiányzik.';
        die;
    }
    if(!$_POST['message']) {
        echo 'Hiba! Üzenet hiányzik.';
        die;
    }

    $message = strip_tags($_POST['message'], '');
    $email = strip_tags($_POST['email'], '');
    $author = strip_tags($_POST['author'], '');

    $message_length = strlen($message);
    $author_length = strlen($author);
    if($message_length > 150) {
        echo "Hiba! Maximum 150 karakter lehet az üzenet.";
        die;
    }
    if($author_length > 150) {
        echo "Hiba! Maximum 150 karakter lehet a név.";
        die;
    }

    mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());

    mysql_select_db($db_name) or die(mysql_error());

    $date = date("h:i A dS M");

    $query = "INSERT INTO fal (message, author, email, date, ip)
VALUES ('$message','$author','$email','$date','$_SERVER[REMOTE_ADDR]')";
    mysql_query($query);
    mysql_close();

    echo "Üzenet elküldve, köszönjük<BR>";
    echo "<A HREF=\"fal.php\">V I S S Z A</A>";

} else {

    mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());

    mysql_select_db($db_name) or die(mysql_error());

    $query = "SELECT message, author, email, date, ip
	
	echo 
	
FROM fal order by id DESC LIMIT 5";
    $result = mysql_query($query);
    echo "<TABLE>";
    while($r=mysql_fetch_array($result))    
    {

        echo "<TR>
            <TD><strong><font size='2'>
$r[author]</A></font></strong></TD>
        </TR>
        <TR>
            <TD><font size='2'>$r[message]</font></TD>
        </TR>
        <TR>
            <TD><HR></TD>
        </TR>";
        
    }
    echo "</TABLE>";
$a=mysql_query("select * from fal");


?>
    <link href="css.css" rel="stylesheet" type="text/css">
	<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	background-image: url(431.png);
}
-->
</style>
<FORM METHOD=POST ACTION="fal.php">
    <p>&nbsp;</p>
    <TABLE width="428" border="1" align="center" background="431.png" bgcolor="#CCCCCC">
    <TR>
      <TD background="431.png" bgcolor="#999999"><img src="users.gif" width="48" height="49" />
        <INPUT NAME="author" TYPE="text" value="Név" size="60"></TD>
    </TR>
    <TR>
      <TD background="431.png" bgcolor="#999999"><img src="newsletter.gif" width="48" height="47" />
        <INPUT NAME="email" TYPE="text" value="E-mail" size="60"></TD>
    </TR>
    <TR>
      <TD background="431.png" bgcolor="#999999"><img src="banners.gif" width="49" height="50" />
        <INPUT NAME="message" TYPE="text" value="Üzenet" size="60"></TD>
    </TR>
    <TR>
      <TD background="431.png" bgcolor="#999999"><div align="right">
        <INPUT name="submit" TYPE="submit" value="M e h e t">
        <br>
        <a href="JavaScript: document.location.reload()">Frissítés</a><br>
  ?sszes &uuml;zenet: (<?php print mysql_num_rows($a); ?>) / Mindig a legutolsó 5 üzenet látható. </div></TD>
    </TR>
  </TABLE>
</FORM>
<?php
}
?> 