# Geometric Shapes

## Prerequisites/Instructions

In order to work on this task, you need to follow the following prerequisites installed:

- PHP 7.4 needs to be installed. Other versions might work, but if you use a non-compatible version the automatic tests might fail.
- Composer version 2.3.6 needs to be installed.
- IDE of choice, we recommend [Visual Studio Code](https://code.visualstudio.com/) with [PHPUnit extension](https://marketplace.visualstudio.com/items?itemName=emallin.phpunit).

After this it is important to run:

```
composer install 
```

## Running Tests

`BasicTests` class implemented inside `tests/BasicTests.php` provide several example unit tests taken from full test suite. You should read them to understand how automatic tests are being executed.

You are also encouraged to write your own test cases under the `BasicTests` class but you can test your work in any way you see fit. Any change made to `BasicTests` class will not influence the final score.

The simplest way to execute tests is to use PHPUnit extension:
- Open `BasicTests.php` in VSCode
- Open the Command Pallete
- Select `PHPUnit Test` from the list
- Select either to run tests on the entire class or specific test function from the file