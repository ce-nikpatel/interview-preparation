<?php

class Stack{

    public $stack;
    public $limit = 0;

    function __construct($limit = 10)
    {
        $this->stack = [];    
        $this->limit = $limit;
    }
    
    /* insert array */
    public function push($data){
        if(count($this->stack) > $this->limit){
            echo 'Stack is full!';
            return false;
        }else{
            array_push($this->stack,$data);
        }
    }
    
    /* pop array */
    public function pop(){
        if($this->isEmpty()){
            array_pop($this->stack);
        }else{
            echo 'Stack is empty';
            return false;
        }
    }

    /* check empty array */
    public function isEmpty(){
        return (count($this->stack)>0) ? true: false;
    }

    /* return top array */
    public function peek(){
        if($this->isEmpty()){
            return ($this->stack[count($this->stack) - 1]);
        }else{
            echo 'Stack is empty';
            return false;
        }
    }
}

$stack = new Stack();
$stack->push(10);
$stack->push(20);
$stack->push(30);
$stack->push(40);
echo $stack->pop();
echo $stack->peek()."\n";
echo $stack->pop();
echo $stack->peek()."\n";
?>