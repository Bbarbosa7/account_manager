<?php


class Account
{
    var $agency;
    var $id;
    var $criationDate;
    var $holder;
    var $passwd;
    var $balance;
    var $canceled;

    /* Método Withdraw (Retirar)
     * Diminui o saldo em $amount (quantia)
     */
    function Withdraw($amount)
    {
        if ($amount > 0)
        {
            $this->balance -= $amount;
        }
    }

    /* Metodo Deposit (depositar)
     * Aumenta o Balance (saldo) em $amount (quantia)
     */
    function Deposit($amount)
    {
        if ($amount > 0)
        {
            $this->balance += $amount;
        }
    }

    /* Método GetBalance (obter saldo)
     * Retorna o Balance (saldo) atual
     */
    function GetBalance()
    {
        return $this->balance;
    }

}