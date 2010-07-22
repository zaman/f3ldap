<?php
require_once "inc/ldap_common.php";
require_once "inc/ldap_fun.php";

require "ldap_search.php";

$ds = myldap_connect($ldaphost, $ldapport);
$r  = myldap_bind ($ds, $ldapbdn, $ldappw);

$cn = "mahmut";
$password = "secret";

echo "<hr /><b>cn = $cn kullanicisi icin password = $password karsilastiriliyor ...</b><br />";

$r = myldap_compare_password ($ds, "ou=moodleusers,$ldapdn", $cn, $password);
echo "sonuc = $r";

echo "<hr />";

$cn = "mahmut";
$password = "falanfilan";

echo "<hr /><b>cn = $cn kullanicisi icin password = $password karsilastiriliyor ...</b><br />";

$r = myldap_compare_password ($ds, "ou=moodleusers,$ldapdn", $cn, $password);
echo "sonuc = $r";
echo "<hr />Dizinlerin guncel hali...<br />";
require "ldap_search.php";

@ldap_close($ds);
?>

