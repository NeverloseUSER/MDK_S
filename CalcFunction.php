<?php
function Calc(string $expressionStr): float
{
    $Nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $Operators = ['+', '-', '*', '/','(',')'];
	

    $Array = str_split($expressionStr);

    foreach ($Array as $char)
    {
        if (!in_array($char, $Operators) && !in_array($char, $Nums) || strpos($expressionStr, '/0'))
        {
            throw new Exception('Warning!!!');
        }

    }

    return eval('return '.$expressionStr.';');
}

try
{
    echo ("Ответ: ".Calc("(10+10)*12"));
} 
catch (Exception $e)
{
    echo $e->getMessage();
}
