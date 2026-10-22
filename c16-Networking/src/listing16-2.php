<form action="netaddr.php" method="post">
<p>
IP Address:<br />
<label for="ip_1">Octet 1</label>
<input id="ip_1" type="text" name="ip[]" size="3" maxlength="3" value="" />.
<label for="ip_2">Octet 2</label>
<input id="ip_2" type="text" name="ip[]" size="3" maxlength="3" value="" />.
<label for="ip_3">Octet 3</label>
<input id="ip_3" type="text" name="ip[]" size="3" maxlength="3" value="" />.
<label for="ip_4">Octet 4</label>
<input id="ip_4" type="text" name="ip[]" size="3" maxlength="3" value="" />
</p>

<p>
Subnet Mask:<br />
<label for="sm_1">Octet 1</label>
<input id="sm_1" type="text" name="sm[]" size="3" maxlength="3" value="" />.
<label for="sm_2">Octet 2</label>
<input id="sm_2" type="text" name="sm[]" size="3" maxlength="3" value="" />.
<label for="sm_3">Octet 3</label>
<input id="sm_3" type="text" name="sm[]" size="3" maxlength="3" value="" />.
<label for="sm_4">Octet 4</label>
<input id="sm_4" type="text" name="sm[]" size="3" maxlength="3" value="" />
</p>

<input type="submit" name="submit" value="Calculate" />

</form>

<?php
   if (isset($_POST['submit']))
   {
      // Concatenate the IP form components and convert to IPv4 format
      $ip = implode('.',$_POST['ip']);
      $ip = ip2long($ip);

      // Concatenate the netmask form components and convert to IPv4 format
      $netmask = implode('.',$_POST['sm']);
      $netmask = ip2long($netmask);

      // Calculate the network address
      $na = ($ip & $netmask);
      // Calculate the broadcast address
      $ba = $na | (~$netmask);

      // Convert the addresses back to the dot-format representation and display
      echo "Addressing Information: <br />";
          echo "<ul>";
         echo "<li>IP Address: ". long2ip($ip)."</li>";
         echo "<li>Subnet Mask: ". long2ip($netmask)."</li>";
         echo "<li>Network Address: ". long2ip($na)."</li>";
         echo "<li>Broadcast Address: ". long2ip($ba)."</li>";
         echo "<li>Total Available Hosts: ".($ba - $na - 1)."</li>";
         echo "<li>Host Range: ". long2ip($na + 1)." -  ". 
               long2ip($ba - 1)."</li>";
      echo "</ul>";
}
?>