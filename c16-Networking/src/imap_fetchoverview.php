<?php
   // Open an IMAP connection
   $user = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open("{imap.example.com:143}INBOX", $user, $imapPassword);

   // Retrieve total number of messages
   $nummsgs = imap_num_msg($ms);
   $messages = imap_fetch_overview($ms,"1:$nummsgs");

   // If message not flagged as seen, output info about it
   while(list($key,$value) = each($messages)) {
      if ($value->seen == 0) {
         echo "<p>Subject: ".$value->subject."<br />";
         echo "Date: ".$value->date."<br />";
         echo "From: ".$value->from."</p>";
      }
   }
?>