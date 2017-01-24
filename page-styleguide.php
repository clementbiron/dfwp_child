<?php
	/*
	Template Name: Styleguide template
	*/
	$styleGuideFile = __DIR__.'/styleguide/styleguide.html';
	if(file_exists($styleGuideFile))
	{
		echo file_get_contents($styleGuideFile);
	}
?>