<?php
/*
    1. Придумать класс, который описывает любую сущность из 
        предметной области интернет-магазинов: продукт, ценник, 
        посылка и т.п.
    2. Описать свойства класса из п.1 (состояние).
    3. Описать поведение класса из п.1 (методы).
    4. Придумать наследников класса из п.1. 
        Чем они будут отличаться?
*/

class Product
{
    public $productCategory;
    public $productName;
    public $productPrice;
    public $productDescription;
    public $productSize;
    public $productCountry;

    public function __constructor($productCategory, $productName, $productPrice, $productSize, $productCountry)
    {
        $this->productCategory = $productCategory;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productDescription = $productDescription;
        $this->productSize = $productSize;
        $this->productCountry = $productCountry;
    }
    public function view()
    {
        echo '
            <div class="productItem">
                <img src="#"><br>
                <div class="productCart">
                    <p>Категория:</p>' . $this->productCategory. '<br>
                    <h3>Наименование:</h3>' . $this->productName. '<br>
                    <p>Описание:</p>' . $this->productDescription . '<br>
                    <p>Размер:</p>' . $this->productSize .'<br>
                    <h4 class = "price">Цена:</h4>'.  $this->productPrice .'руб<br>
                    <p>Страна-производитель:</p>' . $this->productCountry . '<br>
                    <button class="button">В корзину</button>        
                </div>
            </div>    
                ';
    }

}

$dress = new Product("Платья","Маленькое черное платье", "2 999", "Кружевное маленькое черное платье", "42", "Франция");
$dress->view();

class ItemProduct extends Product
{
    public $content;
    public function Message ($content)
    {
        $this->content = $content;
    }
    public function toPage()
    {
        echo '
        <div class="productItem">
            <div class="productCart">
                <button class="button">Купить в один клик</button>        
            </div>
        </div>    
            ';
    }
}

$dress1 = new ItemProduct("Платья","Маленькое черное платье", "2 999", "Кружевное маленькое черное платье", "42", "Франция");
$dress1->view();
$dress1->toPage();







?>

<style type="text/css">
 /*стилей не много, поэтому не подключала их отдельно*/

* {
    box-sizing: border-box;
 }
 .productItem {
   width: 300px;
   text-align: center;
   margin: 0 auto;
   border-bottom: 2px solid #F5F5F5;
   background: white;
   font-family: "Open Sans";
   transition: .3s ease-in;
}
.productItem:hover {
   border-bottom: 2px solid #fc5a5a;
}
.productItem img {
   display: block;
   width: 100%;
}
 .productCart {
    background: #fafafa;
    padding: 15px 0;
 }
 
 .productCart h3 {
   font-size: 18px;
   font-weight: 400;
   color: #444444;
   margin: 0 0 10px 0;
}

 .productCart p {
    font-size: 18px;
    font-weight: 400;
    color: #444444;
    margin: 0 0 10px 0;
 }
 .price {
    font-size: 16px;
    color: #fc5a5a;
    display: block;
    margin-bottom: 12px;
 }
 .button {
    text-decoration: none;
    display: inline-block;
    padding: 0 12px;
    background: #cccccc;
    color: white;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 28px;
    transition: .3s ease-in;
 }
 .productCart:hover .button {
    background: #fc5a5a;
 }