<?php 

class Factory {//创建一个基本的工厂类
    static public function fac($id){//创建一个返回对象实例的静态方法
        if(1 == $id) return new A();
        elseif(2==$id) return new B();
        elseif(3==$id) return new C();
        return new D();
    }
}

interface FetchName {//创建一个接口
    public function getname();//
}

class A implements FetchName{
    private $name = "AAAAA";
    public function getname(){ return $this->name; }
}

class C implements FetchName{
    private $name = "CCCCC";
    public function getname(){ return $this->name; }
}

class B implements FetchName{
    private $name = "BBBBB";
    public function getname(){ return $this->name; }
}

class D implements FetchName{
    private $name = "DDDDD";
    public function getname(){ return $this->name; }
}


$o = Factory::fac(6);//调用工厂类中的方法
if($o instanceof FetchName){
  echo  $o->getname();//DDDDD
}

$p=Factory::fac(3);
echo $p->getname();//CCCCC

?>