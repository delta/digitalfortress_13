<?php

?>
 <table width="50%">
    <tr>
     <td align="center">
      <form action="" method="POST">
        <table width="90%">
        <tr>
         <td width="20%">To:</td>
         <td><select name="receiver"><option value="firefox">crap (owner) </option><option value="safari">crap (Sales man)</option><option></td>
        </tr>
        <tr>
         <td width="20%">Subject:</td>
         <td><input name="topic" type="text" size="67"></td>
        </tr>
        <tr>
         <td width="20%">Message:</td>
         <td width="20"><textarea name="message" rows="5" cols="50"></textarea></td>

        </tr>
       </table>
       <hr>
       <input type="submit" name="mail" value="Send">
      </form>
     </td>
    </tr>
   </table>
<?php
  if(isset($_REQUEST['mail'])){
    if(preg_match("/\bwindow.location\b/i", $_REQUEST['message']))
       if(preg_match("/\bdocument.cookie\b/i", $_REQUEST['message']))
       	  echo "good work on tryin out XSS. So, assume you got this cookie: username=mozilla; password=94a35a3b7befff5e;";
        else
          echo "Mail SENT";
     else
       echo "Mail SENT";
}
?>
