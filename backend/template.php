<?php 

$dummyParameter = getConfigValue('dummy_parameter');
// wenn der parameter noch nicht gesetzt wurde
if(empty($dummyParameter)) {
	$dummyParameter = 'Dummy Parameter';
}
?>
<input type="text" id="dummy_parameter" placeholder="<?php echo _('dummy parameter');?>" value="<?php echo $dummyParameter; ?>"/>

<div class="block__add" id="dummy-paramter__edit">
	<button class="dummy-paramter__edit--button" href="#">
		<span><?php echo _('save'); ?></span>
	</button>
</div>