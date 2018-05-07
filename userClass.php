<?php


//create addMember class
class AddMember{
	
	public $name;
	public $password;
	public $email;
	


	//created constructor class
	public function __construct()
	{

		$name= $this->name;
		$name= $this->password;
		$email = $this->email;



	}

	public function addMember($name, $password, $email)
	{

	
		
		//print_r($output);
		$output = [ "Name: "=>"$name", "Password: "=>"$password", "email: "=>"$email" ];
		foreach ($output as $key => $value) {
			# code...

			

			
			 echo $key. " ". $value;
			 echo "</br>";
			
			






			}
		
	}


}


$member = new AddMember();

$member ->AddMember('John Wilson', 'Secret', 'jwilson@yahoo.com');
