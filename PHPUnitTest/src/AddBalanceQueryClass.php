<?php
declare(strict_types=1);
final class AddBalanceQueryClass
{
    public $var = 0;
    
    function __construct() {
        $var = 0;
    }

    public function addBalance(int $n) {
        $this->var = $n;
        return $this->var;
    }
}