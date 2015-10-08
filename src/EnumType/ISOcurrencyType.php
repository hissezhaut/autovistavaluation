<?php

namespace Autovista\Valuation\EnumType;

/**
 * This class stands for ISOcurrencyType EnumType
 * @subpackage Enumerations
 */
class ISOcurrencyType
{
    /**
     * Constant for value 'AUD'
     * @return string 'AUD'
     */
    const VALUE_AUD = 'AUD';
    /**
     * Constant for value 'CAD'
     * @return string 'CAD'
     */
    const VALUE_CAD = 'CAD';
    /**
     * Constant for value 'CHF'
     * @return string 'CHF'
     */
    const VALUE_CHF = 'CHF';
    /**
     * Constant for value 'CZK'
     * @return string 'CZK'
     */
    const VALUE_CZK = 'CZK';
    /**
     * Constant for value 'DKK'
     * @return string 'DKK'
     */
    const VALUE_DKK = 'DKK';
    /**
     * Constant for value 'EUR'
     * @return string 'EUR'
     */
    const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'GBP'
     * @return string 'GBP'
     */
    const VALUE_GBP = 'GBP';
    /**
     * Constant for value 'HUF'
     * @return string 'HUF'
     */
    const VALUE_HUF = 'HUF';
    /**
     * Constant for value 'JPY'
     * @return string 'JPY'
     */
    const VALUE_JPY = 'JPY';
    /**
     * Constant for value 'NOK'
     * @return string 'NOK'
     */
    const VALUE_NOK = 'NOK';
    /**
     * Constant for value 'NZD'
     * @return string 'NZD'
     */
    const VALUE_NZD = 'NZD';
    /**
     * Constant for value 'PLN'
     * @return string 'PLN'
     */
    const VALUE_PLN = 'PLN';
    /**
     * Constant for value 'SEK'
     * @return string 'SEK'
     */
    const VALUE_SEK = 'SEK';
    /**
     * Constant for value 'SKK'
     * @return string 'SKK'
     */
    const VALUE_SKK = 'SKK';
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'RON'
     * @return string 'RON'
     */
    const VALUE_RON = 'RON';
    /**
     * Constant for value 'TRY'
     * @return string 'TRY'
     */
    const VALUE_TRY = 'TRY';
    /**
     * Constant for value 'CNY'
     * @return string 'CNY'
     */
    const VALUE_CNY = 'CNY';
    /**
     * Constant for value 'INR'
     * @return string 'INR'
     */
    const VALUE_INR = 'INR';
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
     * @uses self::VALUE_AUD
     * @uses self::VALUE_CAD
     * @uses self::VALUE_CHF
     * @uses self::VALUE_CZK
     * @uses self::VALUE_DKK
     * @uses self::VALUE_EUR
     * @uses self::VALUE_GBP
     * @uses self::VALUE_HUF
     * @uses self::VALUE_JPY
     * @uses self::VALUE_NOK
     * @uses self::VALUE_NZD
     * @uses self::VALUE_PLN
     * @uses self::VALUE_SEK
     * @uses self::VALUE_SKK
     * @uses self::VALUE_USD
     * @uses self::VALUE_RON
     * @uses self::VALUE_TRY
     * @uses self::VALUE_CNY
     * @uses self::VALUE_INR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUD,
            self::VALUE_CAD,
            self::VALUE_CHF,
            self::VALUE_CZK,
            self::VALUE_DKK,
            self::VALUE_EUR,
            self::VALUE_GBP,
            self::VALUE_HUF,
            self::VALUE_JPY,
            self::VALUE_NOK,
            self::VALUE_NZD,
            self::VALUE_PLN,
            self::VALUE_SEK,
            self::VALUE_SKK,
            self::VALUE_USD,
            self::VALUE_RON,
            self::VALUE_TRY,
            self::VALUE_CNY,
            self::VALUE_INR,
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
