<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGpriceType StructType
 * @subpackage Structs
 */
class ETGpriceType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - default: 0.00
     * @var double
     */
    public $Amount;
    /**
     * The ISOcurrencyCode
     * @var string
     */
    public $ISOcurrencyCode;
    /**
     * The AmountDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $AmountDate;
    /**
     * The Indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Indicator;
    /**
     * Constructor method for ETGpriceType
     * @uses ETGpriceType::setAmount()
     * @uses ETGpriceType::setISOcurrencyCode()
     * @uses ETGpriceType::setAmountDate()
     * @uses ETGpriceType::setIndicator()
     * @param double $amount
     * @param string $iSOcurrencyCode
     * @param \Autovista\Valuation\StructType\ETGdateType $amountDate
     * @param string $indicator
     */
    public function __construct($amount = 0, $iSOcurrencyCode = null, \Autovista\Valuation\StructType\ETGdateType $amountDate = null, $indicator = null)
    {
        $this
            ->setAmount($amount)
            ->setISOcurrencyCode($iSOcurrencyCode)
            ->setAmountDate($amountDate)
            ->setIndicator($indicator);
    }
    /**
     * Get Amount value
     * @return double|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param double $amount
     * @return \Autovista\Valuation\StructType\ETGpriceType
     */
    public function setAmount($amount = 0)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ISOcurrencyCode value
     * @return string|null
     */
    public function getISOcurrencyCode()
    {
        return $this->ISOcurrencyCode;
    }
    /**
     * Set ISOcurrencyCode value
     * @uses \Autovista\Valuation\EnumType\ISOcurrencyType::valueIsValid()
     * @uses \Autovista\Valuation\EnumType\ISOcurrencyType::getValidValues()
     * @param string $iSOcurrencyCode
     * @return \Autovista\Valuation\StructType\ETGpriceType
     */
    public function setISOcurrencyCode($iSOcurrencyCode = null)
    {
        if (!\Autovista\Valuation\EnumType\ISOcurrencyType::valueIsValid($iSOcurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSOcurrencyCode, implode(', ', \Autovista\Valuation\EnumType\ISOcurrencyType::getValidValues())), __LINE__);
        }
        $this->ISOcurrencyCode = $iSOcurrencyCode;
        return $this;
    }
    /**
     * Get AmountDate value
     * @return \Autovista\Valuation\StructType\ETGdateType|null
     */
    public function getAmountDate()
    {
        return $this->AmountDate;
    }
    /**
     * Set AmountDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $amountDate
     * @return \Autovista\Valuation\StructType\ETGpriceType
     */
    public function setAmountDate(\Autovista\Valuation\StructType\ETGdateType $amountDate = null)
    {
        $this->AmountDate = $amountDate;
        return $this;
    }
    /**
     * Get Indicator value
     * @return string|null
     */
    public function getIndicator()
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param string $indicator
     * @return \Autovista\Valuation\StructType\ETGpriceType
     */
    public function setIndicator($indicator = null)
    {
        $this->Indicator = $indicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ETGpriceType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
