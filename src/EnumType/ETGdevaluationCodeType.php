<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for ETGdevaluationCodeType EnumType
 * @subpackage Enumerations
 */
class ETGdevaluationCodeType
{
    /**
     * Constant for value '*'
     * @return string '*'
     */
    const VALUE__ = '*';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_V
     * @uses self::VALUE_0
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE__,
            self::VALUE_A,
            self::VALUE_V,
            self::VALUE_0,
            self::VALUE_1,
            self::VALUE_2,
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
