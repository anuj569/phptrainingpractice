<?php
class DivideByZeroException extends Exception {};
class DivideByNegativeException extends Exception {};

function process_divide($denominator)
{
    try
    {
        if ($denominator == 0)
        {
            throw new Exception("divide zero");
        }
        else if ($denominator < 0)
        {
            throw new Exception("divide negative");
        }
        else
        {
            echo 100 / $denominator;
        }
    }
    catch (Exception $x)
    {
	echo "1. => " . $x->getMessage();
	echo "\n";
	echo "2. => " . $x->getCode();
	echo "\n";
	echo "3. => " . $x->getFile();
	echo "\n";
	echo "4. => " . $x-> getLine();
	echo "\n";
	//print "5. => " . $x;
        //echo "UNKNOWN EXCEPTION!";
    }
    finally {
	echo "\nFinal => RRRRRRRRRRRRRR";
	}
    echo "\n End: TTTTTTTTT";				
}

process_divide(12);
?>
