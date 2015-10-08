<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfEquipment StructType
 * @subpackage Structs
 */
class ArrayOfEquipment extends AbstractStructBase
{
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\OptionType
     */
    public $Equipment;
    /**
     * The TotalEquipmentValuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalEquipmentValuation;
    /**
     * Constructor method for ArrayOfEquipment
     * @uses ArrayOfEquipment::setEquipment()
     * @uses ArrayOfEquipment::setTotalEquipmentValuation()
     * @param \Autovista\Valuation\StructType\OptionType $equipment
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalEquipmentValuation
     */
    public function __construct(\Autovista\Valuation\StructType\OptionType $equipment = null, \Autovista\Valuation\StructType\ValuationAmountType $totalEquipmentValuation = null)
    {
        $this
            ->setEquipment($equipment)
            ->setTotalEquipmentValuation($totalEquipmentValuation);
    }
    /**
     * Get Equipment value
     * @return \Autovista\Valuation\StructType\OptionType|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Autovista\Valuation\StructType\OptionType $equipment
     * @return \Autovista\Valuation\StructType\ArrayOfEquipment
     */
    public function setEquipment(\Autovista\Valuation\StructType\OptionType $equipment = null)
    {
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Get TotalEquipmentValuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalEquipmentValuation()
    {
        return $this->TotalEquipmentValuation;
    }
    /**
     * Set TotalEquipmentValuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalEquipmentValuation
     * @return \Autovista\Valuation\StructType\ArrayOfEquipment
     */
    public function setTotalEquipmentValuation(\Autovista\Valuation\StructType\ValuationAmountType $totalEquipmentValuation = null)
    {
        $this->TotalEquipmentValuation = $totalEquipmentValuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ArrayOfEquipment
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
