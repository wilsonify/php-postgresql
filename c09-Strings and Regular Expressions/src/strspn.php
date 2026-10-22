<?php
   $passphrase = "3312345";
   if (strspn($passphrase, "1234567890") == strlen($passphrase))
      echo "The password cannot consist solely of numbers!";
?>