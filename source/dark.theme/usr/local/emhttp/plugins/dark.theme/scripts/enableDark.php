#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
if (is_file("/boot/config/plugins/dynamix/dynamix.cfg")) {
	exec("sed -i 's/theme=\".*\"/theme=\"dark\"/g' /boot/config/plugins/dynamix/dynamix.cfg", $output, $return_var);
}
if ($return_var !== 0) {
	exec("cp /usr/local/emhttp/plugins/dark.theme/scripts/dynamix.cfg /boot/config/plugins/dynamix/dynamix.cfg");
	echo "script copied";
}
?>
