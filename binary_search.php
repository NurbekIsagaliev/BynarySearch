<?/*Бинарный поиск. Имеется массив целых чисел. Априорно известно, что массив отсортирован
 в порядке возрастания значений его элементов. Необходимо написать функцию 
 search(array $data, int $number) : int которая вернет индекс элемента массива с заданным 
 значением или -1 в случае отсутствия данного значения в массиве. ВНИМАНИЕ: задача на 
 построение алгоритма, использование array_search и иже с ним не принимается. 
 Решение методом полного перебора так же не засчитывается*/
$data=[1,2,3,4,5,6,7,8,9,10];
$number=4;
function search(&$data, $number){
$count = count($data);
if($count>0 && is_int($number)){
$start = 0;
$end = $count-1;
while(true){
$len = $end-$start ;
if($len > 2){
if($len % 2 != 0)$len++;
$mid = (int) ($len/2 + $start);
}elseif($len >= 0){
$mid = $start;
}else{
return -1;
}
if($data[$mid] == $number){
while( ($mid != 0) && ($data[$mid-1] == $number))
$mid--;
return $mid;
}elseif($data[$mid] > $number){
$end = $mid-1;
}else{
$start = $mid + 1;
}
}
}else{
return -1;
}
}
if(false !== $result = search($data,$number)){
echo("index:" . $result)."<br>";
echo("value:" . $data[$result]);
}
