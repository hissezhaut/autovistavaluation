<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoadTaxAdjustmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Tax for using or keeping a vehicle on public road. It has different names in different countries. For example, it is known as "RFL" (Road Fund License)/Car Tax in UK. It is a fixed amount depending on the vehicle and the country.
 * @subpackage Structs
 */
class RoadTaxAdjustmentType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var double
     */
    public $Amount;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $Valuation;
    /**
     * Constructor method for RoadTaxAdjustmentType
     * @uses RoadTaxAdjustmentType::setAmount()
     * @uses RoadTaxAdjustmentType::setValuation()
     * @param double $amount
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     */
    public function __construct($amount = null, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this
            ->setAmount($amount)
            ->setValuation($valuation);
    }
    /**
     * Get Amount value
     * @return double
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param double $amount
     * @return \Autovista\Valuation\StructType\RoadTaxAdjustmentType
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
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
     * @return \Autovista\Valuation\StructType\RoadTaxAdjustmentType
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
     * @return \Autovista\Valuation\StructType\RoadTaxAdjustmentType
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
