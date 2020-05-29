<?php


$cursor = $db->duty->find([],[
	'projection' => array(
		'department' => 1
	)
]);
$result = iterator_to_array($cursor);

$departments = array();
foreach ($result as $shiftItem) {
	$departments[] = $shiftItem['department'];
}


