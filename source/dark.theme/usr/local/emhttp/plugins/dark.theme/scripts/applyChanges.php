#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
exec("sed -i 's/-webkit-filter:grayscale(.*%);filter:grayscale(.*%);/-webkit-filter:grayscale({$_GET["grayscale"]}%);filter:grayscale({$_GET["grayscale"]}%);/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
exec("sed -i 's/font-size:1.3rem;color:#.*;background-color/font-size:1.3rem;color:#{$_GET["textcolor"]};background-color/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
exec("sed -i 's/a{color:#.*;text-decoration:none}/a{color:#{$_GET["linkcolor"]};text-decoration:none}/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");

$myfile = fopen("/boot/config/plugins/dark.theme/settings.cfg", "w") or die("Unable to open file!");
$txt = "grayscale:{$_GET["grayscale"]};\n";
fwrite($myfile, $txt);
$txt = "textcolor:{$_GET["textcolor"]};\n";
fwrite($myfile, $txt);
$txt = "linkcolor:{$_GET["linkcolor"]};\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
