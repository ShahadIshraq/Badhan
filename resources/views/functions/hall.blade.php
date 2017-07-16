<?php
	function hallName($hName)
	{
		switch ($hName) {
		case 'aula':
			$hall = "Ahsan Ullah Hall";
			break;
		
		case 'nih':
			$hall = "Kazi Nazrul Islam Hall";
			break;

		case 'ch':
			$hall = "Chhatri Hall";
			break;

		case 'th':
			$hall = "Titumir Hall";
			break;

		case 'swh':
			$hall = "Suhrawardi Hall";
			break;
		case 'sh':
			$hall = "Sher-E-Bangla Hall";
			break;

		default:
			$hall = "Shahid Smriti Hall";
			break;
		}
		return $hall;
	}
?>