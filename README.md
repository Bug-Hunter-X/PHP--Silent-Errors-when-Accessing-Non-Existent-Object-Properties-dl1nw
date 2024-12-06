# PHP Silent Errors when Accessing Non-Existent Object Properties

This repository demonstrates a common yet subtle bug in PHP: silent errors when accessing non-existent object properties.  Accessing a non-existent property usually does not result in a fatal error, which can lead to difficult-to-debug issues.

## The Problem

In many languages, attempting to access a non-existent property on an object will throw an error. However, PHP often returns `null` without any warning, making these issues hard to track down.

## Reproducing the Bug

The `bug.php` file contains the buggy code.  Run it and observe that it does not produce any error messages even though a non-existent property is accessed.

## Solution

The `bugSolution.php` file offers a solution using `isset()` to check if a property exists before accessing it. This avoids the silent failure, making your code more robust.

## Contributing

Feel free to contribute improvements or report other examples of PHP's silent error handling.