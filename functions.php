<?php
	function getFileName($s) {
		if (is_file($s.'.zip')) return($s.'.zip');
		if (is_file($s.'.pdf')) return($s.'.pdf');
		if (is_file($s.'.jpg')) return($s.'.jpg');
	}
?>