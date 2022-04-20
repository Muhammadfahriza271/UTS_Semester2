<?php
class Bmi{
    public $tinggi;
    public $berat;

    function __construct($tinggi, $berat){
        $this->tinggi = $tinggi;
        $this->berat = $berat;
    }

    function nilaiBMI(){
        return round($this->berat / ($this->tinggi / 100 * $this->tinggi / 100),2);
    }

    function statusBMI(){
        $nilai = $this->nilaiBMI();
        if($nilai < 18.5){
           return "Kekurangan Berat Badan!";
        }
        elseif($nilai < 24.9){
           return "Normal (Ideal)!";
        }
        elseif($nilai < 29.9){
           return "Kelebihan Berat Badan!";
        }
        elseif($nilai <30 ){
           return "Kegemukan (Obesitas)!";
        }
        else{
           return "Berat Badan Normal";
        }
    }
}
?>
