#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
	if ( !is_string($haystack) || ! is_string($needle) ) return false;
	return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$print = exec("sed -i 's/theme=\".*\"/theme=\"white\"/g' /boot/config/plugins/dynamix/dynamix.cfg");
echo $print;
?>
