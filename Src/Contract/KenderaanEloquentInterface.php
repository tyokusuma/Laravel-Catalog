<?php
namespace Src\Contract;
interface KendaraanEloquentInterface
{
    const TABLE_NAME ='Kendaraan';
    //Semua method di interface accessor method untuk tiap field table

    //method u/ ambil value merek kendaraan
    public function getmerk_kenderaan();
    //method u/ set value merek kendaraan
    public function setmerk_kenderaan($value);
    //method u/ ambil value platkendaraan
    public function getnomor_plat();
    //method u/ set value platkendaraan
    public function setnomor_plat($value);
}
?>
