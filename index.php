<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
    // Variable Scope
    // The scope of the variable is the area within which the variable has been created. Based on this a variable can either have a local scope or a global scope or a static scope in PHP.



    // Global Variable:
    // A variable which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. Global variables can be directly accessed or used in or outside of a function with GLOBAL keyword before variable. However, we can also call them without the global keyword. 

    // For Example:

    $name = "Amjad";        //Global Variable  
    function global_var()
    {
        global $name;
        echo "Variable inside the function: " . $name;
        echo "</br>";
    }
    global_var();
    echo "Variable outside the function: " . $name;

    //  Output:
    // Variable inside the function: amjad
    // Variable outside the function: amjad

    // Next ........

    //  Local Variable:
    // A local variable is created within a function and can be only used inside the function. This means that these variables cannot be accessed outside the function, as they have local scope.

    //    For Example:

    function mytest()
    {
        $capital = "Delhi";
        echo "Capital of India is: " . $capital;
    }
    mytest(); //Calling the function
    //using $capital outside the function will generate an error  
    echo $capital;

    // Output:

    // Capital of India is: Delhi Notice: Undefined variable: capital in D:\xampp\htdocs\program\var.php on line 28

    // Next ....

    //    Static Variable:
    //   PHP has a feature that deletes the variable once it has finished execution and frees the memory. When we need a local variable which can store its value even after the execution, we use the static keyword before it and the variable is called static variable.

    // These variables only exist in a local function and do not get deleted after the execution has been completed.

    // For Example:

    function static_var()
    {
        static $num1 = 3;    //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in non-static variable which will increment its value to 7
        $num1++;
        //increment in static variable which will increment its value to 4 after first execution and 5 after second execution
        $num2++;
        echo "Static: " . $num1 . "</br>";
        echo "Non-static: " . $num2 . "</br>";
    }


    //first function call  
    static_var();
    //second function call  
    static_var();

    // Output:

    // Static: 4
    // Non-static: 7
    // Static: 5
    // Non-static: 7


    ?>


</body>

</html>