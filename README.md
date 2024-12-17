# PHP Pass-by-Reference Bug

This repository demonstrates a subtle bug in PHP related to pass-by-reference and type juggling.  The `increment` function is designed to increment a numeric variable, but when an array is passed, PHP's loose typing causes unexpected errors.  The solution shows a safer way to handle this situation.

## Bug

The `bug.php` file contains code that demonstrates the problem. The `increment` function attempts to increment both an integer and an array. This results in an error when the array is processed.