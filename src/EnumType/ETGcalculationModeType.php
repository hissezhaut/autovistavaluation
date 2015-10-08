<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for ETGcalculationModeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This is an enumeration of all calculation rules, EurotaxGlass's intelligence module can apply during calculation of basic residual value, option calculation, etc. EurotaxGlass's may add other calculation mode at the end of the
 * enumerated list in future release.
 * @subpackage Enumerations
 */
class ETGcalculationModeType
{
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Constant for value 'RESIDUAL'
     * @return string 'RESIDUAL'
     */
    const VALUE_RESIDUAL = 'RESIDUAL';
    /**
     * Constant for value 'SPECIAL'
     * @return string 'SPECIAL'
     */
    const VALUE_SPECIAL = 'SPECIAL';
    /**
     * Constant for value 'PROPRIETARY'
     * @return string 'PROPRIETARY'
     */
    const VALUE_PROPRIETARY = 'PROPRIETARY';
    /**
     * Constant for value 'LOW_MILEAGE'
     * @return string 'LOW_MILEAGE'
     */
    const VALUE_LOW_MILEAGE = 'LOW_MILEAGE';
    /**
     * Constant for value 'EXCELLENT'
     * @return string 'EXCELLENT'
     */
    const VALUE_EXCELLENT = 'EXCELLENT';
    /**
     * Constant for value 'AVERAGE'
     * @return string 'AVERAGE'
     */
    const VALUE_AVERAGE = 'AVERAGE';
    /**
     * Constant for value 'PRIVATESALE'
     * @return string 'PRIVATESALE'
     */
    const VALUE_PRIVATESALE = 'PRIVATESALE';
    /**
     * Constant for value 'HIGH'
     * @return string 'HIGH'
     */
    const VALUE_HIGH = 'HIGH';
    /**
     * Constant for value 'LOW'
     * @return string 'LOW'
     */
    const VALUE_LOW = 'LOW';
    /**
     * Constant for value 'DEALER'
     * @return string 'DEALER'
     */
    const VALUE_DEALER = 'DEALER';
    /**
     * Constant for value 'PRIVATE'
     * @return string 'PRIVATE'
     */
    const VALUE_PRIVATE = 'PRIVATE';
    /**
     * Constant for value 'CONSUMER_EX'
     * @return string 'CONSUMER_EX'
     */
    const VALUE_CONSUMER_EX = 'CONSUMER_EX';
    /**
     * Constant for value 'CONSUMER_AV'
     * @return string 'CONSUMER_AV'
     */
    const VALUE_CONSUMER_AV = 'CONSUMER_AV';
    /**
     * Constant for value 'CONSUMER_BA'
     * @return string 'CONSUMER_BA'
     */
    const VALUE_CONSUMER_BA = 'CONSUMER_BA';
    /**
     * Constant for value 'DISPOSAL'
     * @return string 'DISPOSAL'
     */
    const VALUE_DISPOSAL = 'DISPOSAL';
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
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_RESIDUAL
     * @uses self::VALUE_SPECIAL
     * @uses self::VALUE_PROPRIETARY
     * @uses self::VALUE_LOW_MILEAGE
     * @uses self::VALUE_EXCELLENT
     * @uses self::VALUE_AVERAGE
     * @uses self::VALUE_PRIVATESALE
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_LOW
     * @uses self::VALUE_DEALER
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_CONSUMER_EX
     * @uses self::VALUE_CONSUMER_AV
     * @uses self::VALUE_CONSUMER_BA
     * @uses self::VALUE_DISPOSAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_RESIDUAL,
            self::VALUE_SPECIAL,
            self::VALUE_PROPRIETARY,
            self::VALUE_LOW_MILEAGE,
            self::VALUE_EXCELLENT,
            self::VALUE_AVERAGE,
            self::VALUE_PRIVATESALE,
            self::VALUE_HIGH,
            self::VALUE_LOW,
            self::VALUE_DEALER,
            self::VALUE_PRIVATE,
            self::VALUE_CONSUMER_EX,
            self::VALUE_CONSUMER_AV,
            self::VALUE_CONSUMER_BA,
            self::VALUE_DISPOSAL,
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
