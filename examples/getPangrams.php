<?php


/**
 * Load pangrams from file 'pangrams.txt' into assoc-array
 *
 * @return array
 */
function getPangrams(): array {
	// load all the pangrams from file
	$pangramsContents = file_get_contents(dirname(__FILE__) . '/pangrams.txt');

	// split pangrams into languages
	$matches = [];
	preg_match_all("/^(?!:)([\w\s]+)\:\s*(.*)$/mi", $pangramsContents, $matches);

	// assign pangrams into array
	$pangrams = [];
	foreach ($matches[0] as $k => $v) {
		$pangrams[trim($matches[1][$k])] = trim($matches[2][$k]);
	}

	// remove empty items from array
	array_filter($pangrams);

	return $pangrams;
}


return getPangrams();

