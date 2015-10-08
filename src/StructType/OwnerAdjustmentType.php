<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerAdjustmentType StructType
 * @subpackage Structs
 */
class OwnerAdjustmentType extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - default: 0
     * @var int
     */
    public $Factor;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $Valuation;
    /**
     * Constructor method for OwnerAdjustmentType
     * @uses OwnerAdjustmentType::setFactor()
     * @uses OwnerAdjustmentType::setValuation()
     * @param int $factor
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     */
    public function __construct($factor = 0, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this
            ->setFactor($factor)
            ->setValuation($valuation);
    }
    /**
     * Get Factor value
     * @return int|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param int $factor
     * @return \Autovista\Valuation\StructType\OwnerAdjustmentType
     */
    public function setFactor($factor = 0)
    {
        $this->Factor = $factor;
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
     * @return \Autovista\Valuation\StructType\OwnerAdjustmentType
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
     * @return \Autovista\Valuation\StructType\OwnerAdjustmentType
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
