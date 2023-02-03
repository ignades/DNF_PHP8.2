<?php 

//Ejemplo 1 mi duda decomentenlo!

/*

interface A {
 public function test():string;
}
interface B {
 public function test2():string;
}
interface AB extends A, B {}
 
class Test implements A, B {

	public $v;

	public function __construct(){
		$this->v = 123;
	}

	public function test():string{
		return $this->v;

	}
	public function test2():string{

	}
}
 
function foo((A&B) | null $v) {
    var_dump($v);
    echo gettype($v->v);
    echo $v->v;
}
 
foo(new Test());

*/

//mis dudas son: defino las interfaces que por simismo me obligan a utilizar el metodo test y test2 y eso esta claro
//ahora lo que estoy haciendo es decir en la linea 28 es : combina A&B y si es verdad que $v es un string segui adelante o si $v es null hace algo correcto?

//pero como se ve en el var_dump es un int entonces porque no me da error si A&B obligan el string? 


//Ejemplo de test 2
/* 
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

*/

