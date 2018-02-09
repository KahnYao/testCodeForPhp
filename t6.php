<?php
class Deque{
	private $queue=array();
	
	function addFirst($item){//头入队
		return array_unshift($this->queue,$item);
	}
	function addLast($item){//尾入队
		return array_push($this->queue,$item);
	}
	function removeFirst(){//头出队
		return array_shift($this->queue);
	}
	function removeLast(){//尾出队
		return array_pop($this->queue);
	}
	function show(){//显示
		echo implode(" ",$this->queue);
	}
	function clear(){//清空
		unset($this->queue);
	}
	function getFirst(){
		return array_shift($this->queue);
	}
	function getLast(){
		return array_pop($this->queue);
	}
	function getLength(){
		return count($this->queue);
	}
}
$q=new Deque();
$q->addFirst(1);
$q->addLast(5);
$q->removeFirst();
$q->removeLast();
$q->addFirst(2);
$q->addLast(4);
$q->show();// <span style="font-family: Simsun;font-size:14px;">2 4</span>

?>