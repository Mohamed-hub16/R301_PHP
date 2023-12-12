namespace G4\Classes;

use G4\Interfaces\I;
use G4\Interfaces\I2;


class A implements I, I2
{
    const NAME = "A";
    public $name = "A";

    public R301Attribute $R301Attribute;

    public function __construct(public string $first, public string $second ){
        
    }

    public function hello()
    {
        return "Hello A";
    }

    public function world()
    {
        return "World A!";
    }
}