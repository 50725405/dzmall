<?php
$classExample = array();
$k=1;
$soap = new SoapServer(null,array('uri'=>"http://116.255.243.142/",'classExample'=>$classExample));
$soap->setClass('chesterClass');
$soap->handle();

class chesterClass {
    public $name = 'Chester';

    function getName() {
        return $this->name;
    }
}
?>
