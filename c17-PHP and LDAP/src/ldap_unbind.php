<?php
   $ldapUser = "your_ldap_user";
   $ldapPswd = "your_ldap_password";
   $ldapconn = ldap_connect("ldap://ad.example.com", 389) 
               or die("Can't establish LDAP connection");
   ldap_bind($ldapconn, $ldapUser, $ldapPswd)
               or die("Can't bind to LDAP.");

   /* Execute various LDAP-related commands. */
   ldap_unbind($ldapconn) 
               or die("Could not unbind from LDAP server.");
?>