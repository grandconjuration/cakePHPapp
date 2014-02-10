<?php
	App::uses('AppHelper', 'View/Helper');

	class SlugHelper extends AppHelper
	{

		function slug($phrase, $maxLength = '20')
		{
			$result = strtolower($phrase);

			$result = preg_replace("/[^a-z0-9\s-]/", "", $result);
			$result = trim(preg_replace("/[\s-]+/", " ", $result));
			$result = trim(substr($result, 0, $maxLength));
			$result = preg_replace("/\s/", "-", $result);

			return $result;
		}
	}
