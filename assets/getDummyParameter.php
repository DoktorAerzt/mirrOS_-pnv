<?php
include('../../../config/glancrConfig.php');

$dummyParameter = getConfigValue('dummy_parameter');
// wenn der parameter noch nicht gesetzt wurde
if(empty($dummyParameter)) {
	$dummyParameter = 'Dummy Parameter';
}

echo json_encode($dummyParameter);

?>
