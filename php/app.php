<?php
 
namespace php;





$result =0;

class calculator
{
    public $firstNumber;
    public $secondNumber;

    
    function checkOperator($operator)
    {
        switch ($operator) {
            case '+':
                return $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                return $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                return $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                return $this->firstNumber / $this->secondNumber;
                break;
            default:
                $result = "Undefined operation!";
        }
    }
    function getResult($firstNumber, $secondNumber, $operator)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        return $this->checkOperator($operator);
    }
}
$cal = new calculator();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $submit = $_POST['submit'];
    $firstNumber = $_POST['first_num'];
    $secondNumber = $_POST['second_num'];
    $operator = $_POST['operator'];
}

if (isset($submit)) {
    $result = $cal->getResult($firstNumber, $secondNumber, $operator);
}

