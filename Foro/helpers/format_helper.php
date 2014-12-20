<?php
	function urlFormat($str){
		//quitar espoacios en blanco
		$str = preg_replace('/\s*/', '', $str);
		//convertir a minusculas
		$str = strtolower($str);
		
		$str = urlencode($str);
		return $str;
	}
	
	function formatDate($date){
		$date = date("F j, Y, g:j a", strtotime($date));
		return $date;
	}
