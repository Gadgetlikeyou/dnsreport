<?php
/**
 * Do some stuff with a domain name that is passed at the command line
 *
 * Usage php index.php <domain-name>
 *
 * Quick method for retrieving dns records via php
 *
 */
?>
<div>

	<form action="" method="GET">

	Hostname: <input type="text" name="domain" />

	<input type="submit" />

	</form>
	
</div>
<table>

<?php

if(isset($_GET['domain'])) {

	$domain = $_GET["domain"];



	/**
	$all = dns_get_record( $domain, DNS_ANY );

	print_r($all);
	*/

	echo " <hr /> <br /> <br />";

	$typea = dns_get_record( $domain, DNS_A );


	foreach ( $typea as $atype ) {

		foreach ( $atype as $key => $value ) {

			echo "  \n {$value} ";
		  }
		echo "<br />"; 
	};


	echo "<hr />"; 


	$typemx = dns_get_record( $domain, DNS_MX );

	foreach ( $typemx as $mxtype ) {

		foreach ( $mxtype as $key => $value ) {

			echo " \n {$value} ";
		  }
		echo "<br />"; 
	};


	echo "<hr />"; 
	 
	 
	$typens =  dns_get_record( $domain, DNS_NS );
	 
	foreach ( $typens as $nstype ) {

		foreach ( $nstype as $key => $value ) {

			echo "  \n {$value} ";
		  }
		  
		echo "<br />"; 
	};


	echo "<hr />"; 


	$typetxt =  dns_get_record( $domain, DNS_TXT );
	 
	foreach ( $typetxt as $txttype ) {

		foreach ( $txttype as $key => $value ) {

				echo "  \n {$value} ";
		
		  }
		  
		echo "<br />"; 
	};

}

echo "

<hr />

https://www.dnsstuff.com/tools#dnsReport|type=domain&&value=gft.kz <br />
http://viewdns.info/dnsreport/?domain=gft.kz <br />
https://mxtoolbox.com/SuperTool.aspx?action=dns%3agft.kz&run=toolpage <br />
http://thednsreport.com/ <br />
http://ruphp.com/php/30  <br />
https://www.zonemaster.net/test/fc12c65c4d2b1db5  <br />
";

?>

</table>


<style>

div { text-align: center; padding: 10px; } 
table, tr, td {padding: 4px; border: 1px solid #eee; vertical-align: middle; font-size: 1em; margin: auto; }
p { color: #1a1a1a; height: 1em; }



</style>