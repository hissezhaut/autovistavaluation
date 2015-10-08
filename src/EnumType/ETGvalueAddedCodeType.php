<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for ETGvalueAddedCodeType EnumType
 * @subpackage Enumerations
 */
class ETGvalueAddedCodeType
{
    /**
     * Constant for value '*'
     * @return string '*'
     */
    const VALUE__ = '*';
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Constant for value '4'
     * @return string '4'
     */
    const VALUE_4 = '4';
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE__
     * @uses self::VALUE_R
     * @uses self::VALUE_A
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @uses self::VALUE_0
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE__,
            self::VALUE_R,
            self::VALUE_A,
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
            self::VALUE_4,
            self::VALUE_0,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
