<?php
if (isset($_POST['cf_area'])) {$cf_area = $_POST['cf_area'];}
if (isset($_POST['cf_naznach'])) {$cf_naznach = $_POST['cf_naznach'];}
if (isset($_POST['cf_nagr'])) {$cf_nagr = $_POST['cf_nagr'];}
if (isset($_POST['cf_poverh'])) {$cf_poverh = $_POST['cf_poverh'];}
if (isset($_POST['cf_marka'])) {$cf_marka = $_POST['cf_marka'];}
if (isset($_POST['cf_pokritie'])) {$cf_pokritie = $_POST['cf_pokritie'];}
if (isset($_POST['cf_cvet'])) {$cf_cvet = $_POST['cf_cvet'];}
if (isset($_POST['cf_blesk'])) {$cf_blesk = $_POST['cf_blesk'];}
if (isset($_POST['cf_shpat'])) {$cf_shpat = $_POST['cf_shpat'];}
if (isset($_POST['cf_osob'])) {$cf_osob = $_POST['cf_osob'];}

if (isset($_POST['cf_cols'])) {$cf_cols = $_POST['cf_cols'];}

//$description - Описание товара (Сюда добавляем любую информацию для описания товара)
$description = '<h1>Сформирован заказ из калькулятора</h1>
<p><strong>Площадь: </strong>'.$cf_area.'</p>
<p><strong>Назначение помещения: </strong>'.$cf_naznach.'</p>
<p><strong>Нагрузки: </strong>'.$cf_nagr.'</p>
<p><strong>Поверхность: </strong>'.$cf_poverh.'</p>
<p><strong>Марка М (Класс В): </strong>'.$cf_marka.'</p>
<p><strong>Тип покрытия: </strong>'.$cf_pokritie.'</p>
<p><strong>Цвет: </strong>'.$cf_cvet.'</p>
<p><strong>Блеск: </strong>'.$cf_blesk.'</p>
<p><strong>Необходимость шпатлевания: </strong>'.$cf_shpat.'</p>
<p><strong>Особенности: </strong>'.$cf_osob.'</p>';


$products = new Models_Product();
$product = array(
	'cat_id' => 38,
	'title' => 'Заголовок товара из калькулятора',
	'description' => $description,
	'price' => 888,
	'url' => 'calcul',
	'code' => 'calc',
	'count' => '-1',
	'activity' => 0,
	'weight' => 1,
	'currency_iso' => 'RUR',
	'price_course' => 888
	);

//Если количество больше 0 то добавляем новый товар
if ($cf_cols > 0) {
$calc = $products->addProduct($product);
$id = '';
$id = $calc['id'];
$products->updateProduct(array('id'=> $id,'code'=>'calc-'.$id, 'url' => 'calc-'.$id), $id);

$cart = new Models_Cart();
$cart->addToCart($id, $cf_cols);
}

//Если товар добавлен, то есть его id, тогда возвращаем данные для маленькой корзины
if ($id !='') {
	$response = array(
	'status' => 'success',
	'data' => SmalCart::getCartData()
	);
	echo json_encode($response);
}

?>