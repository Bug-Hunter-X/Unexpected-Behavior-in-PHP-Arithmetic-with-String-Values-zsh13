# PHP Loose Typing Bug

This example demonstrates a common error in PHP caused by its loose typing system.  The `calculateSum` function is designed to sum an array of numbers, however, if the input array contains a string value, PHP's implicit type conversion can lead to an incorrect sum.  The solution demonstrates how to explicitly check the type of each element to prevent unexpected behavior.