<?php
   $ldapHost = "ldap://ad.example.com";
   $ldapPort = "389";
   $ldapUser = "your_ldap_user";
   $ldapPswd = "your_ldap_password";

   $ldapconn = ldap_connect($ldapHost, $ldapPort) 
               or die("Can't establish LDAP connection");

   ldap_bind($ldapconn, $ldapUser, $ldapPswd) 
             or die("Can't bind to the server.");
?>