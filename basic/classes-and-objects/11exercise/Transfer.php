<?php

class Transfer
{
    public function transferFromTo(Account $from, Account $to, float $howMuch): void
    {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }
}