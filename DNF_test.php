<?php 

interface User{
    public function getName(): string;
}

interface Admin extends User{
    public function JsonResponse(): string;
}

interface SuperAdmin  extends Admin{ 
}

class Users  {
 	 
 	public string $name;
 	public array $json;
 	public string $j;

    public function getName(): string
	{	
	    return $this->name;
	}

	public function JsonResponse(): string {
		$this->j =  json_encode($this->json);
		//echo gettype($j);
		return $this->j;
	}
}


function fetchUserName(Users $user): string { //(Admin&SuperAdmin) | Users $user ????

     $user->getName();
     $user->JsonResponse();
     return $user->name . $user->j; 
}

$user = new Users();
$user->name = "Joe";
$array = ["name"=>"Mary","Surname"=>"Rossi"];

//var_dump($array);die;

$user->json = $array; 

echo fetchUserName($user);

// PHP Fatal error:  Uncaught TypeError: fetchUserName(): 
// Argument #1 ($user) must be of type (Admin&SuperAdmin)|User, Admin@anonymous given