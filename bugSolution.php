```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // You can throw an exception, log a warning, or skip it.
      trigger_error("Non-numeric value encountered: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Output will now handle the non-numeric value appropriately
```