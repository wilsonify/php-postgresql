<?php

   $mailserver = "{mail.example.com:143/imap/notls}";
   $imapUser = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open($mailserver, $imapUser, $imapPassword);

   // Retrieve all of the attributes
   $status = imap_status($ms, $mailserver."INBOX",SA_ALL);

   // How many unseen messages?
   echo $status->unseen;
   imap_close($ms);

?>