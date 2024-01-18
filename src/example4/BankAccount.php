<?php

namespace Itschool\Lesson4\Example4;

class BankAccount
{
    private int $balance;
    private int $accountNumber;

    private array $transactions;
    public function __construct($balance, $accountNumber) {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
    }

    public function withdraw($amount) {
        $this->generateTransaction();
        $this->balance -= $amount;
    }

    public function deposit($amount) {
        $this->generateTransaction();
        $this->balance += $amount;
    }

    public function getBalance() {

        return $this->balance;
    }

    private function generateTransaction() {
        $this->transactions[] = $this->balance;
    }

    public function getTransaction()
    {
        return $this->transactions;
    }
}