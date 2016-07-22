<?php
	class daLi{
		static $name=null;
		
		public  $age='';
		private function __construct($age){
			$this->age=$age;
		}
		public function talk(){
			echo $this->age;
		}
		static function jing(){
			if(self::$name==null){
				self::$name=new self($a);
				return self :: $name
			}
		}
		public function __clone(){
			trigger_error('not clone',E_USER_ERROR);
		}
		
		
	}
	
	
	