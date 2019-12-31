#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$print = exec("sed -i 's/-webkit-filter:grayscale(.*%);filter:grayscale(.*%);/-webkit-filter:grayscale({$_GET["grayscale"]}%);filter:grayscale({$_GET["grayscale"]}%);/g' /usr/local/emhttp/plugins/dark.theme/scripts/test.txt");
echo $print;
?>
