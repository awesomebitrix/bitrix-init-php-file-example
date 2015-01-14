<?php
/* DEBUG FUNCTIONS */
/**
 * Функция печатает массивы в преформатированном виде. Если передать второй параметр true - функция прервет
 * выполнение программы
 * @param      $arg
 * @param bool $exit
 */
function pre($arg, $exit = false)
{
    global $USER;
    if($USER->GetID() == 1)
    {
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
    }
    if($exit)
        exit;
}
/* DEBUG FUNCTIONS */

/* Аuxiliary functions */
/* Аuxiliary functions */

/* AGENT FUNCTIONS */
/* AGENT FUNCTIONS */

/* EVENTS REGISTER */
//main module events

//IblockElement events

//Price events

//CatalogProduct events

//Basket events

//Order events
/* EVENTS REGISTER */

/* EVENT HANDLERS */
/* EVENT HANDLERS */
