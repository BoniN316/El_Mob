<?php
//CSV file in uploads
$filename = 'price.csv';
//output array
$price = array();
$prices = array();
$pricelist = array();
$thead = '';
$products = array();

if(!file_exists('uploads/'.$filename)) return $products;

//open stream file read
$f = fopen(SITE.'/uploads/'.$filename, "rt") or die("Ошибка!");
//read CSV file
for ($i=0; $data=fgetcsv($f,1000,";"); $i++) {
    //num of items
    $num = count($data);

    if($i != 0) {
        //Write output array
        //$price[$i]['id'] = iconv('windows-1251', 'utf-8', $data[0]);
        //$price[$i]['category'] = iconv('windows-1251', 'utf-8', $data[1]);
        //$price[$i]['title'] = iconv('windows-1251', 'utf-8', $data[2]);
        $title = iconv('windows-1251', 'utf-8', $data[2]);
        $price[$i]['title'] = '<a target="_blank" title="'.$title.'" href="'.iconv('windows-1251', 'utf-8', $data[3]).'/'.iconv('windows-1251', 'utf-8', $data[4]).'">'.$title.'</a>';
        //$price[$i]['url'] = iconv('windows-1251', 'utf-8', $data[3]);
        $prices[$i]['40'] = iconv('windows-1251', 'utf-8', $data[5]);
        $prices[$i]['200'] = iconv('windows-1251', 'utf-8', $data[6]);
        $prices[$i]['500'] = iconv('windows-1251', 'utf-8', $data[7]);
        $prices[$i]['1000'] = iconv('windows-1251', 'utf-8', $data[8]);
        $prices[$i]['3000'] = iconv('windows-1251', 'utf-8', $data[9]);
        $prices[$i]['88888888'] = iconv('windows-1251', 'utf-8', $data[10]);
        $prices[$i]['*'] = iconv('windows-1251', 'utf-8', $data[11]);

        if (count($pricelist[iconv('windows-1251', 'utf-8', $data[1])]) == 0) {
            $pricelist[iconv('windows-1251', 'utf-8', $data[1])] = array();
        }
        array_push($pricelist[iconv('windows-1251', 'utf-8', $data[1])], $price[$i]+$prices[$i]);
        //For moguta products prices
        $products[iconv('windows-1251', 'utf-8', $data[0])] = $prices[$i];
    }
    //First row head
    else {
        $thead = '<tr>';
        for ($c=0; $c<$num; $c++) {
            if(!in_array($c,array(0,1,3,4,11)))  $thead .= '<td>'.iconv('windows-1251', 'utf-8', $data[$c]).'</td>';
        }
        $thead .= '</tr>';
    }
}
//close stream file read
fclose($f);

//return output
$output = '';
$i =0;
foreach ($pricelist as $pricelists => $price) {
    $i++;
    $output .= '<table class="price-th"><tr><td><h3>'.$i.'. '.$pricelists.'</h3></td><td><strong>Цена, руб/кг.</strong></td></tr></table>';
    $output .= '<table>';
    $output .= $thead;
    $j =0;
    foreach ($price as $product) {
        $j++;
        $output .= '<tr>';
        $fas = explode('|', $product['*']);
        foreach ($product as $key => $value) {
            if($key === '*') continue;
            $star = (in_array($key, $fas)) ? '*' : '';
            $value = ($key !== 'title') ? $value.'р.'.$star : $i.'.'.$j.' '.$value;
            $output .= '<td>' . $value . $rub.'</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</table>';
}
echo '<div class="pricelist">'.$output.'</div>';

?>