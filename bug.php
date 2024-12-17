```php
<?php
function increment(&$var) {
  $var++;
}

$num = 5;
increment($num);
echo $num; // Outputs 6

$arr = [1, 2, 3];
increment($arr); // This will cause an error!
echo $arr[0];
?>
```