<?php

class forbidden extends Exception
{
	protected $message="";
	public function __construct($msg)
	{
		$this->message=$msg;
	}
}

class queue
{
	private int $front=0;
	private int $rear=0;
	private array $queue=[];
	private int $size;

	public function __construct($size)
	{
		//creates a unique queue and intializes all values
		$this->size=$size;
		$this->queue<=$this->size;
	}
	public function is_full()
	{
		if($this->rear==$this->size){
			throw new forbidden("queue is full");
		}
	}

	public function is_empty()
	{
		//checks if queue is null
			if(count($this->queue)<1){
			throw new forbidden("the queue is empty");
		}
	}
	public function enqueue($data)
	{
		//adds an item to the queue
		try {
			if(!$this->is_full()){
				$this->rear++;
				$this->queue[$this->rear]=$data;
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	public function dequeue()
	{
		//removes an item from the queue
		try {
			if(!$this->is_empty()){
			$this->front++;
			$data=$this->queue[$this->front];
			unset($this->queue[$this->front]);
			return $data;
		}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
echo "<pre>";
$new= new queue(2);
$new->enqueue(2);
$new->enqueue(4);
$new->enqueue(8);
$new->enqueue(7);
$new->enqueue(6);
echo "<br>";
print_r($new);
echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new->dequeue());echo "<br>";
print_r($new);

?>