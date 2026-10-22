<?php
   $mailserver = "{imap.example.com:143/imap/notls}INBOX";
   $mbox = "events";
   $imapUser = "your_imap_user";
   $imapPassword = "your_imap_password";
   $ms = imap_open($mailserver, $imapUser, $imapPassword);
   imap_createmailbox($ms,$mailserver."/".$mbox);
   imap_close($ms);
?>