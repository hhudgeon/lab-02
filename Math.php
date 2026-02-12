<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */

    /**
     * @param $num1
     * @param $num2
     * @return mixed
     */
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}

    /**
     * @param $num1
     * @param $num2
     * @return mixed
     */
    public static function subtract($num1, $num2){
        $sum = $num1 - $num2;
        return $sum;
    }

    /**
     * @param $num1
     * @param $num2
     * @return float|int
     */

    public static function multipy($num1, $num2){
        $sum = $num1 * $num2;
        return $sum;
    }


}