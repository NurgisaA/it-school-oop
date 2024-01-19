<?php

namespace Itschool\Lesson4\Example4;

class BankAccount
{
    // Счет банковского аккаунта
    private int $balance;

    // Номер банковского аккаунта
    private int $accountNumber;

    // Массив транзакций для хранения истории изменения баланса
    private array $transactions;

    // Конструктор класса, принимающий начальный баланс и номер аккаунта
    public function __construct($balance, $accountNumber) {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;

        // Генерация первой транзакции при создании аккаунта
        $this->generateTransaction();
    }

    // Метод для снятия средств с аккаунта
    public function withdraw($amount) {
        // Уменьшение баланса на указанную сумму
        $this->balance -= $amount;

        // Генерация транзакции после снятия средств
        $this->generateTransaction();
    }

    // Метод для внесения средств на аккаунт
    public function deposit($amount) {
        // Увеличение баланса на указанную сумму
        $this->balance += $amount;

        // Генерация транзакции после внесения средств
        $this->generateTransaction();
    }

    // Метод для получения текущего баланса аккаунта
    public function getBalance() {
        return $this->balance;
    }

    // Приватный метод для генерации транзакции и добавления её в историю
    private function generateTransaction() {
        // Запись текущего баланса в массив транзакций
        $this->transactions[] = $this->balance;
    }

    // Метод для получения истории транзакций
    public function getTransaction() {
        return $this->transactions;
    }
}
