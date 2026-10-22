<?php
   $passphrase = "a12345";
   if (strcspn($passphrase, "1234567890") == 0) {
      print "Password cannot consist solely of numbers! ";
   }
?>