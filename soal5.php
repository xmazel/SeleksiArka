<?php



function countChar($string, $char){
	$result = substr_count($string, $char);

	return $result;
}
$res = countChar("Bootcamp","o") ;
echo "Character found, used <b><i>" .$res. "</i></b> times";
?>