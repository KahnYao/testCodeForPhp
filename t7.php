<?php  


interface User  
{  
    function getName();  
    function setName($_name);  
}  


interface VipUser extends User  
{  
    function getDiscount(); //此处添加了一个抽象的方法  
}  


class Vip implements VipUser  
{  
    private $name;  
    private $discount = 0.8;    //折扣变量  

    function getName() {  
        return $this->name;  
    }  

    function setName($_name) {  
        $this->name = $_name;  
    }  

    function getDiscount() {  
        return $this->discount;  
    }  

}  


$v = new Vip();
$v->setName("zhangsan");
echo $v->getName();
echo "<br>";
echo $v->getDiscount();


?>