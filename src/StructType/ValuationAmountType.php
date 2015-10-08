<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValuationAmountType StructType
 * @subpackage Structs
 */
class ValuationAmountType extends AbstractStructBase
{
    /**
     * The TradeAmount
     * Meta informations extracted from the WSDL
     * - default: 0.00
     * - minOccurs: 0
     * @var double
     */
    public $TradeAmount;
    /**
     * The RetailAmount
     * Meta informations extracted from the WSDL
     * - default: 0.00
     * - minOccurs: 0
     * @var double
     */
    public $RetailAmount;
    /**
     * The B2Bamount
     * Meta informations extracted from the WSDL
     * - default: 0.0
     * - minOccurs: 0
     * @var double
     */
    public $B2Bamount;
    /**
     * Constructor method for ValuationAmountType
     * @uses ValuationAmountType::setTradeAmount()
     * @uses ValuationAmountType::setRetailAmount()
     * @uses ValuationAmountType::setB2Bamount()
     * @param double $tradeAmount
     * @param double $retailAmount
     * @param double $b2Bamount
     */
    public function __construct($tradeAmount = 0, $retailAmount = 0, $b2Bamount = 0)
    {
        $this
            ->setTradeAmount($tradeAmount)
            ->setRetailAmount($retailAmount)
            ->setB2Bamount($b2Bamount);
    }
    /**
     * Get TradeAmount value
     * @return double|null
     */
    public function getTradeAmount()
    {
        return $this->TradeAmount;
    }
    /**
     * Set TradeAmount value
     * @param double $tradeAmount
     * @return \Autovista\Valuation\StructType\ValuationAmountType
     */
    public function setTradeAmount($tradeAmount = 0)
    {
        $this->TradeAmount = $tradeAmount;
        return $this;
    }
    /**
     * Get RetailAmount value
     * @return double|null
     */
    public function getRetailAmount()
    {
        return $this->RetailAmount;
    }
    /**
     * Set RetailAmount value
     * @param double $retailAmount
     * @return \Autovista\Valuation\StructType\ValuationAmountType
     */
    public function setRetailAmount($retailAmount = 0)
    {
        $this->RetailAmount = $retailAmount;
        return $this;
    }
    /**
     * Get B2Bamount value
     * @return double|null
     */
    public function getB2Bamount()
    {
        return $this->B2Bamount;
    }
    /**
     * Set B2Bamount value
     * @param double $b2Bamount
     * @return \Autovista\Valuation\StructType\ValuationAmountType
     */
    public function setB2Bamount($b2Bamount = 0)
    {
        $this->B2Bamount = $b2Bamount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ValuationAmountType
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
