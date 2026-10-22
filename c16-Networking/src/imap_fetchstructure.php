<?php

   // Open an IMAP connection
   $user = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open("{imap.example.com:143}INBOX", $user, $imapPassword);

   // Retrieve information about message number 5.
   $message = imap_fetchstructure($ms,5);
   echo "Message lines: ".$message->lines."<br />";
   echo "Message size: ".$message->bytes." bytes<br />";

?>