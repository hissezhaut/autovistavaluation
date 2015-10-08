<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAdjustmentType StructType
 * @subpackage Structs
 */
class AdditionalAdjustmentType extends AbstractStructBase
{
    /**
     * The Rationale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Rationale;
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
     * Constructor method for AdditionalAdjustmentType
     * @uses AdditionalAdjustmentType::setRationale()
     * @uses AdditionalAdjustmentType::setAmount()
     * @uses AdditionalAdjustmentType::setValuation()
     * @param string $rationale
     * @param double $amount
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     */
    public function __construct($rationale = null, $amount = null, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this
            ->setRationale($rationale)
            ->setAmount($amount)
            ->setValuation($valuation);
    }
    /**
     * Get Rationale value
     * @return string
     */
    public function getRationale()
    {
        return $this->Rationale;
    }
    /**
     * Set Rationale value
     * @param string $rationale
     * @return \Autovista\Valuation\StructType\AdditionalAdjustmentType
     */
    public function setRationale($rationale = null)
    {
        $this->Rationale = $rationale;
        return $this;
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
     * @return \Autovista\Valuation\StructType\AdditionalAdjustmentType
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
     * @return \Autovista\Valuation\StructType\AdditionalAdjustmentType
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
     * @return \Autovista\Valuation\StructType\AdditionalAdjustmentType
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
