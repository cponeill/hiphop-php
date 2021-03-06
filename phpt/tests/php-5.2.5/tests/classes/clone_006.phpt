--TEST--
ZE2 object cloning, 6
<?php

class MyCloneable {
	static $id = 0;

	function MyCloneable() {
		$this->id = self::$id++;
	}

	function __clone() {
		$this->address = "New York";
		$this->id = self::$id++;
	}
}

$original = new MyCloneable();

$original->name = "Hello";
$original->address = "Tel-Aviv";

echo $original->id . "\n";

$clone = clone $original;

echo $clone->id . "\n";
echo $clone->name . "\n";
echo $clone->address . "\n";

?>
--EXPECT--
0
1
Hello
New York
