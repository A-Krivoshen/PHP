// Инкапсуляцией называется объединение в одно целое данных и методов для их обработки, класс объединяет в себе код(методы класса) и данные (свойства класса).
// Класс можно представить как тип переменной, а переменная типа класса - объектом. Свойства класса,методы класса - называется членами класса.А механизм их объединяющий - инкапсуляцией.
//
//  Инкапсуляция  — размещение в оболочке, изоляция, закрытие чего-либо с целью исключения влияния на окружающее. Например вложение одних данных в другие IPSEC.
//
// Плюсы объектов-уменьшение кода, я его раньше не использовал, когда то изучал турбо паскаль, там было процедурное программирование, когда писали модуль с функциями и процедурами а потом их вызывали.
// ООП это следующий шаг в оптимизации кода.


<?php
    // Класс 1. Машина.
    class CarClass {
	private $carBrand; // Марка
	public $carColor;  // Цвет
	public function getBrand()
	{
	    echo $this->carBrand;
	}
	public function __construct($Brand)
	{
	    $this->carBrand = $Brand;
	}
    }
    $car1 = new CarClass('Ford');
    echo $car1->getBrand().'<br>';
    $car1->carColor = 'white';
    echo $car1->carColor.'<br>';
    $car2 = new CarClass('Honda');
    '<pre>';
    print_r($car2);
    '</pre>';
    echo '<br>';
    echo '<br>';
    //-------------------------------------------------
    // Класс 2. Телевизор.
    class TVClass {
	private $type = 'ЖК';   // Тип
	private $size;			// Размер диагонали
	public function getType() 
	{
	    echo $this->type;
	}
	public function setType($newType)
	{
	    $this->type = $newType;
	}
	public function getSize()
	{
	    echo $this->size;
	}
	public function __construct($initSize = 48)
	{
	    $this->size = $initSize;
	} 
    }
    $tv1 = new TVClass();
    echo $tv1->getSize().'<br>';
    echo $tv1->getType().'<br>';
    $tv2 = $tv1;
    echo $tv2->getType().'<br>';
    $tv2->setType('TFT');
    echo ' tv2 ' . $tv2->getType().'<br>';
    echo ' tv1 ' . $tv1->getType().'<br>';
    echo '<br>';
    echo '<br>';
    //-------------------------------------------------
    // Класс 3. Шариковая ручка.
    class PencilClass {
	private $colorInk;		// Цвет чернил
	private $pencilBrand;	// Марка
	public function __construct($Brand, $Ink = 'Синяя')
	{
	    $this->colorInk = $Ink;
	    $this->pencilBrand = $Brand;
	}
	public function getPencilProperties()
	{
	    echo "$this->colorInk". " - " . "$this->pencilBrand";
	}

    }
    $pencil1 = new PencilClass('Erich Krause', 'Black');
    $pencil1->getPencilProperties();
    echo '<br>';
    $pencil2 = new PencilClass('Brauberg');
    $pencil2->getPencilProperties();
    echo '<br>';
    $pencil3 = new PencilClass('','');
    $pencil3->getPencilProperties();
    echo '<br>';
    echo '<br>';
    //-------------------------------------------------
    // Класс 4. Утка.
    class DuckClass {
	private $duckColor;	// Цвет
	private $duckName;		// Имя
	public function __construct($color, $name)
	{
	    $this->duckColor = $color;
	    $this->duckName = $name;
	}
	public function getDuck()
	{
	    echo "$this->duckName" . " - " . "$this->duckColor";
	}
    }
    $duck1 = new DuckClass('Light Grey', 'Mallard');
    $duck2 = new DuckClass('Orange', ' Mandarin duck');
    $duck1->getDuck();
    echo '<br>';
    $duck2->getDuck();
    echo '<br>';
    echo '<br>';
    //-------------------------------------------------
    // Класс 5. Товар.
    class ProductClass {
	private $productName;			// Наименование
	private $productPrice;			// Цена
	private $productDiscount = 0;	// Скидка
	public function __construct($name, $price)
	{
	    $this->productName = $name;
	    $this->productPrice = $price;
	}
	public function setDiscount ($discount)
	{
	    $this->productDiscount = $discount;
	}
	public function getPrice()
	{
	    $p = $this->productPrice * (100 - $this->productDiscount) / 100;
	    echo "Цена $this->productName - $p";
	}
    }
    $product1 = new ProductClass('Box', 1000);
    $product1->getPrice();
    echo '<br>';
    $product1->setDiscount(15);
    $product1->getPrice();
?>