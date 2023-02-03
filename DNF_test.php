<?php 
// Hola chicos Muestro 2 ejemplos que hice con mis preguntas y mis dudas"

//Ejemplo 1 mi duda descomenten e caso 1 lo analizamos y luego vemos el caso 2 Gracias antetodo por dedicarme tiempo Ariel!
//Linea 43 dudas y preguntas de ejemplo 1
//Linea 53 dudas y preguntas de ejemplo 2
//Linea 107 dudas y preguntas de ejemplo 3

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

// En este caso estoy quitando la implementaciòn de implements Admin, SuperAdmin y en la linea 82 Admin&SuperAdmin) no recibo error algo se me escapa! ??

/*
interface User{
    public function getName(): string;
}

interface Admin extends User{
    public function JsonResponse(): string;
}

interface SuperAdmin  extends Admin{ 
}

class Users  { // implements User,Admin
 	 
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

function fetchUserName((Admin&SuperAdmin) | int $user): string { //(Admin&SuperAdmin) | Users $user ????

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


// Ejemplo 3 
// Nunca è declarado una Variable asi linea 121 
// como funciona? sorry!

/*

interface X {}

interface Y {}

class Something implements X, Y {}


class AnotherThing implements X {}


class User {
  public X&Y $xAndY;

  public function foo (X&Y $param): X&Y{
    return $param;
  }
}

$something = new Something;
$anotherThing = new AnotherThing;

$user = new User;

$user->xAndY = $something; // works
$user->xAndY = $anotherThing; // doesn't work, because anotherThing is not both X and Y

$user->foo($something); // works, because something is both X and Y
$user->foo($anotherThing); // doesn't work

// returns types follow the same rule, foo() can only return value that is both X and Y

*/


