<!DOCTYPE HTML!>
<html>
<head>
  <title>Ruudi Plaatimine</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="../stylesheets/style.css"/>
</head>
<header>
<nav>
      <ul>
        <a href="index.php"><li>Avaleht</li></a>
        <a href="#"><li>Tehtud tööd</li></a>
        <a href="#"><li>Minust</li></a>
        <a href="#"><li>Plaatimisest</li></a>
        <a href="#"><li>Hinnakiri</li></a>
        <a href="kontakt.php"><li>Kontakt</li></a>
      </ul>
</nav>      
</header>
  <form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
</html>