<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for ETGmessageSeverityLevelType EnumType
 * @subpackage Enumerations
 */
class ETGmessageSeverityLevelType
{
    /**
     * Constant for value 'INFORMATION'
     * @return string 'INFORMATION'
     */
    const VALUE_INFORMATION = 'INFORMATION';
    /**
     * Constant for value 'NOTICE'
     * @return string 'NOTICE'
     */
    const VALUE_NOTICE = 'NOTICE';
    /**
     * Constant for value 'WARNING'
     * @return string 'WARNING'
     */
    const VALUE_WARNING = 'WARNING';
    /**
     * Constant for value 'CRITICAL'
     * @return string 'CRITICAL'
     */
    const VALUE_CRITICAL = 'CRITICAL';
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
     * @uses self::VALUE_INFORMATION
     * @uses self::VALUE_NOTICE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_CRITICAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INFORMATION,
            self::VALUE_NOTICE,
            self::VALUE_WARNING,
            self::VALUE_CRITICAL,
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
