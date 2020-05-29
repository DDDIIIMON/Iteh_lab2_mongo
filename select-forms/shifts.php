<?php


$cursor = $db->duty->find([],[
	'projection' => array(
		'department' => 1
	)
]);
$result = iterator_to_array($cursor);

$departments = array();
foreach ($result as $department) {
	$departments[] = $department['department'];
}


$cursor = $db->duty->find([],[
	'projection' => array(
		'shift' => 1
	)
]);
$result = iterator_to_array($cursor);

$shifts = array();
foreach ($result as $shiftItem) {
	$shifts[] = $shiftItem['shift'];
}
