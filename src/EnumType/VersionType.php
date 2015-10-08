<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for VersionType EnumType
 * @subpackage Enumerations
 */
class VersionType
{
    /**
     * Constant for value '1.4.0'
     * @return string '1.4.0'
     */
    const VALUE_1_4_0 = '1.4.0';
    /**
     * Constant for value '1.3.2'
     * @return string '1.3.2'
     */
    const VALUE_1_3_2 = '1.3.2';
    /**
     * Constant for value '1.3.1'
     * @return string '1.3.1'
     */
    const VALUE_1_3_1 = '1.3.1';
    /**
     * Constant for value '1.3.0'
     * @return string '1.3.0'
     */
    const VALUE_1_3_0 = '1.3.0';
    /**
     * Constant for value '1.2.1'
     * @return string '1.2.1'
     */
    const VALUE_1_2_1 = '1.2.1';
    /**
     * Constant for value '1.2.0'
     * @return string '1.2.0'
     */
    const VALUE_1_2_0 = '1.2.0';
    /**
     * Constant for value '1.1.5'
     * @return string '1.1.5'
     */
    const VALUE_1_1_5 = '1.1.5';
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
     * @uses self::VALUE_1_4_0
     * @uses self::VALUE_1_3_2
     * @uses self::VALUE_1_3_1
     * @uses self::VALUE_1_3_0
     * @uses self::VALUE_1_2_1
     * @uses self::VALUE_1_2_0
     * @uses self::VALUE_1_1_5
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1_4_0,
            self::VALUE_1_3_2,
            self::VALUE_1_3_1,
            self::VALUE_1_3_0,
            self::VALUE_1_2_1,
            self::VALUE_1_2_0,
            self::VALUE_1_1_5,
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
