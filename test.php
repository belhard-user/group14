<?php

require_once 'vendor/autoload.php';


dump(spl_classes());


/*spl_autoload_register(function($n){
    echo "First: $n<br>";
});

spl_autoload_register(function($n){
    echo "Second: $n<br>";
});

new AaaaaAAAA;*/

/*class A
{

}

$a = new A;
$b = new A;
$c = new A;


$array = new SplObjectStorage();

$array->attach($a, 'Arnold'); // $array[$a] = 'Arnold';


echo $array->offsetGet($a);*/






/*$a = [
    'db' => [
        'host' => 'localhost',
        'db_user' => 'root',
        'db_pwd' => '',
        'db_database' => 'site',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'site_name' => 'Test',
    0 => 'asd'
];

$a = new ArrayObject($a, ArrayObject::ARRAY_AS_PROPS);

print_r( $a->{0});*/


/*$sfo = new SplFileObject('test.log');

echo $sfo->fgets(); */

// 1 */1 * * * * rm -rf /var/logs/*.log


/*$ii = new InfiniteIterator(new ArrayIterator([1, 2, 3]));

foreach ($ii as $i){
    echo $i . "\n";
    sleep(10);
}*/

/*$sfi = new SplFileInfo('test.log');
$s = $sfi->openFile();

echo $s->fgets();*/







/*$numbers = range(1, 100);
$numbers = array_filter($numbers, function($item){
    return $item % 2 == 0;
});
dump($numbers);*/
/*class Foo extends FilterIterator
{
    protected $numbers;


    public function __construct()
    {
        $this->numbers = range(1, 100);
        parent::__construct(new ArrayIterator($this->numbers));
    }


    public function getNumbers()
    {
        return $this->numbers;
    }

    public function accept()
    {
        return $this->getInnerIterator()->current() % 2 == 0;
    }
}

$f = new Foo;

foreach($f as $item){
    echo "$item<br>";
}*/



/*$names = ["neo", 'trinity', 'tank', 'dozer', [1, 2, 3, [10, 20, 30]], ['a', 'b', ['aa', 'bb']]];

array_walk_recursive($names, function($item){
    dump($item);
});*/
/*$rai = new RecursiveArrayIterator($names);
$rii = new RecursiveIteratorIterator($rai);

foreach($rii as $item) {
    dump($item);
}*/



/*class Foo implements ArrayAccess
{
    public $name = 'Neo';
    public $age = 21;
    public $bar = 'bar';
    protected $names = ["neo", 'trinity', 'tank', 'dozer'];

    public function offsetExists($offset)
    {
        return true;
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}


$foo = new Foo;
echo $foo['name'];
$foo['name'] = 'Vasiliy';
echo $foo['name'];
dump($foo);
implode(',', $foo);

isset($foo['key']); // ->offsetExists
unset($foo['key']); // ->offsetUnset*/




/*class Foo implements Iterator
{
    public $name = 'Neo';
    public $age = 21;
    public $bar = 'bar';
    public $jaz = 'jaz';
    protected $names = ["neo", 'trinity', 'tank', 'dozer'];
    public  $cnt;

    public function current()
    {
        return $this->names[$this->cnt];
    }

    public function next()
    {
        $this->cnt++;
    }

    public function key()
    {
        return $this->cnt;
    }

    public function valid()
    {
        return $this->cnt < count($this->names);
    }

    public function rewind()
    {
        $this->cnt = 0;
    }
}


class Bar implements IteratorAggregate
{

    public function getIterator()
    {
        return new Foo();
    }
}

$foo = new Bar;

foreach($foo as $k => $v){
    echo "$k $v<br>";
}*/