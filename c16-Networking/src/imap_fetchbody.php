<?php

   // Open an IMAP connection
   $user = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open("{imap.example.com:143}INBOX", $user, $imapPassword);

   $message = imap_fetchbody($ms,1,"","FT_PEEK");
   echo $message;

?>