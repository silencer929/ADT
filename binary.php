<?php
class binary
{
    public array $arr=[2,3,4,5,6,7,8,9,25,40,45,77];
    public $high;
    public $low;
    public $mid;

    public function start()
    {
       //$this->arr?? return;
        $this->low=0;
        $this->high = count($this->arr)-1;
        $this->mid = floor(($this->high+$this->low)/2);
        return $this->high;
    }
}
$new = new binary();
$new->start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .part{
        background-color:lightgreen;
        width: 200px;
        height: 200px;
        margin: 0 auto;
        justify-content: space-around;
    }
    </style>
</head>
<body>
<div class="part">
<div>
<input type="text">
<button class="search">search</button>
</div>
<div class="result">results <?php echo $new->mid ?? "";?></div>
</div>
    
</body>
</html>