<?php
class Ini{
	private static $_instance;
	private static $_ini;
	private function __construct(){
		self::$_ini = parse_ini_file("tutorials.ini");
	}
	public static function start(){
		if(!self::$_instance instanceof self){
			self::$_instance = new Ini();
		}
	}
	public static function show(){
		echo '<ul>';
		foreach(self::$_ini as $key => $value){
			echo '<li>Nombre: '. $key.'</li>';
			foreach($value as $k => $v){
				if($k=='Link'){
					echo '<li>'.$k.': <a href="'.$v.'">'.$v.'</a>';
				}else{
					echo '<li>'.$k.': '.$v.'</li>';
				}	
			}
			echo '<hr>';
		}
		echo '</ul>';
	}
}
?>
