<?php

$cursor = $db->duty->find([],[
	'projection' => array(
		'nurses' => 1
	)
]);
$result = iterator_to_array($cursor);

$nurseNames = array();
foreach ($result as $nurses) {
	foreach ($nurses['nurses'] as $nurse) {
		$nurseNames[] = $nurse;
	}
}

