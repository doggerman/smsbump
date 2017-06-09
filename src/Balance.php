<?php
namespace Formaldehid\SmsBump;

class Balance
{
    public $balance;
    public $currency;

    public function __construct(float $balance, string $currency)
    {
        $this->balance = $balance;
        $this->currency = $currency;
    }
}