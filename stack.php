<?php

class forbidden extends \Exception
{
	protected  $message="";

	public function __construct($msg)
	{
		$this->message=$msg;
	}
}

class stack
{
	private int $size=0;
	private array $stack=[];
	private int $top=0;
	function __construct($size)
	{
		$this->size=$size;
	}

	public function pop()
	{
		//remove first item on top of the stack
		try {
			if(!$this->is_empty()){
			$data=$this->stack[$this->top];
			unset($this->stack[$this->top]);
			$this->top--;
			return $data;
		}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	public function is_empty()
	{
			if($this->top < 1){
			throw new forbidden("stack under flow");
		}
	}
	public function is_full()
	{
		if($this->top==$this->size){
			throw new forbidden("stack overflow");
		}
	}

	public function push($data)
	{
		//add item into the stack
		try {
			if(!$this->is_full()){
				$this->top++;
				$this->stack[$this->top]=$data;
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function peek()
	{
		return $this->stack[$this->top];
	}
}
echo "<pre>";
$new= new stack(4);
$new->push(1);
$new->push(9);
$new->push(4);
$new->push(9);
$new->push(9);
$new->push(6);
$new->push(9);
$new->push(3);
echo "<hr> <hr>";
print_r($new);
echo "<hr> <hr>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";
print_r($new->pop());echo "<br>";

echo "<hr> <hr>";
print_r($new);
?>