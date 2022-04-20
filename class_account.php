<?php
class Account{
    public $nomor;
    protected $saldo;

    public function __construct($no, $saldo){
        $this->nomor = $no;
        $this->saldo = $saldo;      
    }
    public function deposit($uang){
    $this->saldo = $this->saldo + $uang;
    }
    public function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }  
    public function cetak(){
        echo 'Nomor Accountnya : ' .$this->nomor;
        echo '<br/>Saldonya : ' .$this->saldo;
    }
}
class AccountBank extends Account {
    public $customer;
    // static $biaya_admin = 6500;

    function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    function transfer($obj_account, $uang) {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
        // $this->witdrawl(self::$biaya_admin);
    }

    function cetak() {
        parent::cetak();
        echo '<br/>Customer : ' .$this->customer;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}
?>