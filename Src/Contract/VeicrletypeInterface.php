<?php
namespace Src\Contract;
interface TypeKendaraanInterface
{
    const TABLE_NAME = 'Veicrle_type';
    //method u/ ambil value type merek kenderaan
    public function setmerk_kenderaan($value);
    //method u/ ambil value type merek kenderan
    public function getmerk_kenderaan();
    //method u/ ambil value bahan warna kendaraan
    public function setwarna($value);
    //method u/ ambil value warna kendaraan
    public function getwarna();
  }
?>
