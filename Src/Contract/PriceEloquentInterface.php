<?php
namespace Src\Contract;

interface PriceEloquentInterface
{
    const TABLE_NAME = 'Price';
    //method u/ ambil value harga kendaraan
    public function setharga($value);
    //method u/ ambil value harga kendaraan
    public function getharga();
    //method u/ ambil value id kendaraan
    public function setmerk_kenderaan($value);
    //method u/ ambil value id kendaraan
    public function getmerk_kenderaan();
}
?>
