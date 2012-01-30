<?php
	class TemplateBodyLoader {
		public static function loadBody($name) {
			if($name == null) {
				$curr_name = "index";
			}
			require_once("pages/" . $curr_name . ".html");
		}
	}
?>