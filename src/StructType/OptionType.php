<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionType StructType
 * @subpackage Structs
 */
class OptionType extends AbstractStructBase
{
    /**
     * The Code
     * @var int
     */
    public $Code;
    /**
     * The NewPrice
     * @var double
     */
    public $NewPrice;
    /**
     * The MarketCode
     * @var int
     */
    public $MarketCode;
    /**
     * The GroupCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GroupCode;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $Valuation;
    /**
     * Constructor method for OptionType
     * @uses OptionType::setCode()
     * @uses OptionType::setNewPrice()
     * @uses OptionType::setMarketCode()
     * @uses OptionType::setGroupCode()
     * @uses OptionType::setValuation()
     * @param int $code
     * @param double $newPrice
     * @param int $marketCode
     * @param int $groupCode
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     */
    public function __construct($code = null, $newPrice = null, $marketCode = null, $groupCode = null, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this
            ->setCode($code)
            ->setNewPrice($newPrice)
            ->setMarketCode($marketCode)
            ->setGroupCode($groupCode)
            ->setValuation($valuation);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Autovista\Valuation\StructType\OptionType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get NewPrice value
     * @return double|null
     */
    public function getNewPrice()
    {
        return $this->NewPrice;
    }
    /**
     * Set NewPrice value
     * @param double $newPrice
     * @return \Autovista\Valuation\StructType\OptionType
     */
    public function setNewPrice($newPrice = null)
    {
        $this->NewPrice = $newPrice;
        return $this;
    }
    /**
     * Get MarketCode value
     * @return int|null
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }
    /**
     * Set MarketCode value
     * @param int $marketCode
     * @return \Autovista\Valuation\StructType\OptionType
     */
    public function setMarketCode($marketCode = null)
    {
        $this->MarketCode = $marketCode;
        return $this;
    }
    /**
     * Get GroupCode value
     * @return int|null
     */
    public function getGroupCode()
    {
        return $this->GroupCode;
    }
    /**
     * Set GroupCode value
     * @param int $groupCode
     * @return \Autovista\Valuation\StructType\OptionType
     */
    public function setGroupCode($groupCode = null)
    {
        $this->GroupCode = $groupCode;
        return $this;
    }
    /**
     * Get Valuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getValuation()
    {
        return $this->Valuation;
    }
    /**
     * Set Valuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     * @return \Autovista\Valuation\StructType\OptionType
     */
    public function setValuation(\Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this->Valuation = $valuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\OptionType
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
