<?php
/*
    1. Создать структуру классов ведения товарной номенклатуры.
    а) Есть абстрактный товар.
    б) Есть цифровой товар, штучный физический товар и товар 
        на вес.
    в) У каждого есть метод подсчета финальной стоимости.
    г) У цифрового товара стоимость постоянная – дешевле 
        штучного товара в два раза. У штучного товара обычная 
        стоимость, у весового – в зависимости от продаваемого 
        количества в килограммах. У всех формируется в конечном 
        итоге доход с продаж.
    д) Что можно вынести в абстрактный класс, наследование?
*/

abstract class Product 
{
    public $price;
    public $quantity;
    protected $result;
    abstract protected function TotalSum($quantity, $price);
}

//цифровой товар
class DigitalProduct extends Product
{
    public function TotalSum ($quantity, $price) 
    {
        $result = ($price / 2) * $quantity;
        echo "Доход с продаж за цифровой товар составил: " . $result . " рублей <br/>"; 
    }
}

//штучный товар
class PriceProduct extends Product
{
    public function TotalSum ($quantity, $price) 
    {
        $result = $price * $quantity;
        echo "Доход с продаж за штучный товар составил: " . $result . " рублей <br/>"; 
    }
}

//товар на вес
class WeightProduct extends Product
{
    public function TotalSum ($quantity, $price) 
    {
        return $quantity * $price;
    }
}

//подсчет цифрового товара
$goodDigital = new DigitalProduct();
$goodDigital->TotalSum(10,50);

//подсчет штучного товара
$goodPrice = new PriceProduct();
$goodPrice->TotalSum(10,50);

//подсчет весового товара
$goodWeight = new WeightProduct();
echo "Доход с продаж за штучный товар составил: " . $goodWeight->TotalSum(10.25,50) . " рублей <br/>"; 

/*
    2. *Реализовать паттерн Singleton при помощи traits.
*/

//взяла пример из вебинара и переписала в трейт

trait SingletonTrait
{
    static protected $instance;
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    protected function __construct()
    {
    }
}

//использование трейта SingletonTrait в классе Test
class Test 
{
    use SingletonTrait;
    public $test = " class ";
}

/*
    При помощи метода Test::single() создается и возвращается 
    единственный экземпляр класса Test
*/
echo '<pre>';
//выдаст ошибку из-за  protected function __construct() 
//$single = new Test;           

//пример использования класса Test
$single = Test::getInstance(); 
echo $single->test;            //выведет class (значение переменной $test)

$single->test = " new class Test ";
echo $single->test;            //выведет new class Test

$single2 = Test::getInstance(); 
echo $single2->test;           //выведет new class Test