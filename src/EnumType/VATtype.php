<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for VATtype EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines if currency amounts are inclusive or ecxclusive VAT. If this element is missing, default currency amounts are applied
 * @subpackage Enumerations
 */
class VATtype
{
    /**
     * Constant for value 'DEFAULT'
     * @return string 'DEFAULT'
     */
    const VALUE_DEFAULT = 'DEFAULT';
    /**
     * Constant for value 'INCLUDED'
     * @return string 'INCLUDED'
     */
    const VALUE_INCLUDED = 'INCLUDED';
    /**
     * Constant for value 'EXCLUDED'
     * @return string 'EXCLUDED'
     */
    const VALUE_EXCLUDED = 'EXCLUDED';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_INCLUDED
     * @uses self::VALUE_EXCLUDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_INCLUDED,
            self::VALUE_EXCLUDED,
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
