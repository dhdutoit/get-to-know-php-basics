# Like all languages PHP supports certain Data Types

1. String
2. Integer
3. Float (floating point numbers / doubles)
4. Boolean
5. Array
6. Object
7. NULL
8. Resource

**NOTE:** You can view the value and Data Type of a variable with the ``var_dump(..)`` function.

## 1. String
Strings can either use quotes or double quotes
```PHP
echo "Hello world!";
echo 'Hello world!';
```

## 2. Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Integers can be specified in three formats: 
* decimal (10-based)
* hexadecimal (16-based - prefixed with 0x)
* octal (8-based - prefixed with 0)
```PHP
$x = 5985;
$y = $x + 10;
echo $y; //shows 5995
```

## 3. Float
A float (floating point number) is a number with a decimal point or a number in exponential form.
``$x = 10.365;``

## 4. Boolean
A boolean is either TRUE or FALSE.
```PHP
//using words
$true = true;
$false = false;
//using Integers
$true = 1;
$false = 0;
```

## 5. Array
Stores multiple values in one variable. The index of arrays start with ``0``.
```PHP
$cars = ['BMW', 'Volvo', 'Mercedes'];
$numers = [6,3,5,7,9];
```

## 6. Object
An object is a data type which stores data and information on how to process that data.
**NOTE:** In PHP, an object must be explicitly declared.
```PHP
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
```

## 7. NULL value
Null is a special data type which can have only one value: *NULL*. A variable of data type *NULL* is a variable that has no value assigned to it. Variables can also be emptied by setting the value to *NULL*.

**NOTE:**: If a variable is created without a value, it is automatically assigned a value of NULL.

## 8. Resource
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP. A common example of using the resource data type is a database call.
