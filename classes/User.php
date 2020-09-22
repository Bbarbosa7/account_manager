<?php


class User
{
    var $id;
    var $name;
    var $height;
    var $age;
    var $birthday;
    var $schooling;
    var $salary;

    /* Método GrowUp (crescer)
     * Aumenta a height (altura) em $centimeters (centimetros)
     */
    function GrowUp($centimeters)
    {
        if ($centimeters > 0)
        {
            $this->height += $centimeters;
        }
    }

    /* Método ToForm (formar)
     * Altera a schooling (escolaridade) para $titration (titulação)
     */
    function ToForm($titration)
    {
        $this->schooling = $titration;
    }

    /* Método GetOld (envelhecer)
     * Aumenta a Age (idade) em $ages (anos)
     */
    function GetOld($ages)
    {
        if ($ages > 0)
        {
            $this->age += $ages;
        }

    }
}