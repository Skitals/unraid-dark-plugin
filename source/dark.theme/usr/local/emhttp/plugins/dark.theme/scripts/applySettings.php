<?PHP
if ( is_file("/boot/config/plugins/dark.theme/dark.theme.cfg") ) {
	$ini_array = parse_ini_file("/boot/config/plugins/dark.theme/dark.theme.cfg", true);
	if (isset($ini_array['display']['grayscale'])) {
		$grayscale = $ini_array['display']['grayscale'];
		exec("sed -i 's/^\/\* grayscale \*\/.*$/\/\* grayscale \*\/-webkit-filter:grayscale({$grayscale}%);filter:grayscale({$grayscale}%);/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
	}
	if (isset($ini_array['display']['textcolor'])) {
		$textcolor = $ini_array['display']['textcolor'];
		exec("sed -i 's/^\/\* text color \*\/.*$/\/\* text color \*\/color:#{$textcolor};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
		exec("sed -i 's/^\/\* text color \*\/.*$/\/\* text color \*\/color:#{$textcolor};/g' /usr/local/emhttp/plugins/dynamix/styles/dynamix-dark.css");
	}
        if (isset($ini_array['display']['linkcolor'])) {
		$linkcolor = $ini_array['display']['linkcolor'];
                exec("sed -i 's/^\/\* link color \*\/.*$/\/\* link color \*\/color:#{$linkcolor};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
	}
        if (isset($ini_array['display']['bluetext'])) {
                $bluetext = $ini_array['display']['bluetext'];
                exec("sed -i 's/^\/\* bluetext \*\/.*$/\/\* bluetext \*\/color:#{$bluetext};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
        }
        if (isset($ini_array['display']['orangetext'])) {
                $orangetext = $ini_array['display']['orangetext'];
                exec("sed -i 's/^\/\* orangetext \*\/.*$/\/\* orangetext \*\/color:#{$orangetext};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
        }
        if (isset($ini_array['display']['greentext'])) {
                $greentext = $ini_array['display']['greentext'];
                exec("sed -i 's/^\/\* greentext \*\/.*$/\/\* greentext \*\/color:#{$greentext};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
        }
        if (isset($ini_array['display']['greenorb'])) {
                $greenorb = $ini_array['display']['greenorb'];
                exec("sed -i 's/^\/\* greenorb \*\/.*$/\/\* greenorb \*\/color:#{$greenorb};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
        }
        if (isset($ini_array['display']['blueorb'])) {
                $blueorb = $ini_array['display']['blueorb'];
                exec("sed -i 's/^\/\* blueorb \*\/.*$/\/\* blueorb \*\/color:#{$blueorb};/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
        }
	echo "Success!";
}
?>
