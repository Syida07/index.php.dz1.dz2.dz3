<?php
echo count([1,2,3]) . "\n";
print_r(array_diff([1,2,3],[2,3]));
print_r(array_intersect([1,2,3],[2,3,4]));
var_dump(array_key_exists("a",["a"=>1,"b"=>2]));
print_r(array_keys(["a"=>1,"b"=>2]));
print_r(array_values(["a"=>1,"b"=>2]));
print_r(array_merge([1,2],[3,4]));
echo array_rand([1,2,3]) . "\n";
print_r(array_reverse([1,2,3]));

$city = "Paris";
$country = "France";
print_r(compact("city","country"));

extract(["city"=>"Paris","country"=>"France"]);
echo "$city, $country\n";

$a=["a"=>2,"b"=>3,"c"=>1]; 
arsort($a); 
print_r($a);

$a=["a"=>2,"b"=>3,"c"=>1]; 
asort($a); 
print_r($a);

$a=[3,1,2]; 
sort($a); 
print_r($a);

$a=[1,3,2]; 
rsort($a); 
print_r($a);

print_r(array_combine(["a","b"],[1,2]));
echo array_search(2,[1,2,3]) . "\n";

$a=[1,2,3]; 
echo array_shift($a) . "\n"; 
print_r($a);

print_r(array_unique([1,2,2,3]));

$a=[2,3]; 
array_unshift($a,1); 
print_r($a);

print_r(array_flip(["a"=>1,"b"=>2]));

$a=[1,2,3]; 
echo array_pop($a) . "\n"; 
print_r($a);

$a=[1,2]; 
array_push($a,3); 
print_r($a);

var_dump(in_array(2,[1,2,3]));

list($x,$y,$z)=[1,2,3]; 
echo "$x,$y,$z\n";
?>
