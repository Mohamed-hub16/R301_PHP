namespace G4\Classes;

Class B extends A{
    public function hello(){
        return "Hello B";
    }
    public function world(){
        return "World B!";
    }
    use \G4\Traits\C {
        hello as helloC;
        world as worldC;
    }
    public function arrow($inputString){
        return "Hello " .   $inputString;
    }
}