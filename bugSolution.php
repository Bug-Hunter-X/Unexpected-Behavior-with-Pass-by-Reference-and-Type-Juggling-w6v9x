```php
<?php
function incrementNumeric(&$var) {
  if (is_numeric($var)) {
    $var++;
  } else {
    trigger_error('Variable is not numeric', E_USER_WARNING);
  }
}

function incrementArray(&$arr, $index) {
  if (is_array($arr) && isset($arr[$index]) && is_numeric($arr[$index])) {
    $arr[$index]++;
  } else {
    trigger_error('Invalid array or index', E_USER_WARNING);
  }
}

$num = 5;
incrementNumeric($num);
echo $num; // Outputs 6

$arr = [1, 2, 3];
incrementArray($arr, 0);
echo $arr[0]; // Outputs 2
?>
```