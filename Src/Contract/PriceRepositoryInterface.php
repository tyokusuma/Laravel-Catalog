<?php
namespace Src\Contract;
interface PriceRepositoryInterface
{
    public function __construct();
    public function create(PriceEloquentInterface $price);
    public function update(PriceEloquentInterface $price);
    public function delete(PriceEloquentInterface $price);
    public function get($id);
}
?>
