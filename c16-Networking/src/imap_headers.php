<?php

   // Designate a mailbox and establish a connection
   $mailserver = "{mail.example.com:143/imap/notls}INBOX/Staff/CEO";
   $imapUser = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open($mailserver, $imapUser, $imapPassword);

   // Retrieve message headers
   $headers = imap_headers($ms);

   // Display total number of messages in mailbox
   echo "<strong>".count($headers)." messages in the mailbox</strong><br />";
?>