<?php

   // Open an IMAP connection
   $user = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open("{imap.example.com:143}INBOX", $user, $imapPassword);

   // How many messages in user jason's inbox?
   $msgnum = imap_num_msg($ms);
   echo "<p>User $user has $msgnum messages in his inbox.</p>";

?>