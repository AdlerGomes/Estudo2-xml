<pre>
<?php

	ini_set('default_charset', 'UTF-8');
	
	$xml = simplexml_load_file('exemplo.xml');
	
	foreach ($xml->pessoa as $pessoa) {
		echo $pessoa->nome;
		echo $pessoa->sobrenome;
		echo $pessoa->email;
	}
?>
</pre>
	