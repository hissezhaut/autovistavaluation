<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryAdjustmentType StructType
 * @subpackage Structs
 */
class DeliveryAdjustmentType extends AbstractStructBase
{
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: The delivery date of the vehicle must be greater than the valuation date. For current date valuation, the delivery date must be a date in future.
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $DeliveryDate;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $Valuation;
    /**
     * Constructor method for DeliveryAdjustmentType
     * @uses DeliveryAdjustmentType::setDeliveryDate()
     * @uses DeliveryAdjustmentType::setValuation()
     * @param \Autovista\Valuation\StructType\ETGdateType $deliveryDate
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     */
    public function __construct(\Autovista\Valuation\StructType\ETGdateType $deliveryDate = null, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setValuation($valuation);
    }
    /**
     * Get DeliveryDate value
     * @return \Autovista\Valuation\StructType\ETGdateType|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $deliveryDate
     * @return \Autovista\Valuation\StructType\DeliveryAdjustmentType
     */
    public function setDeliveryDate(\Autovista\Valuation\StructType\ETGdateType $deliveryDate = null)
    {
        $this->DeliveryDate = $deliveryDate;
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
     * @return \Autovista\Valuation\StructType\DeliveryAdjustmentType
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
     * @return \Autovista\Valuation\StructType\DeliveryAdjustmentType
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
