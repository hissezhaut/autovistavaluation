<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerValuationAmountType StructType
 * @subpackage Structs
 */
class ConsumerValuationAmountType extends AbstractStructBase
{
    /**
     * The ExcellentVehicleAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $ExcellentVehicleAmount;
    /**
     * The AverageVehicleAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $AverageVehicleAmount;
    /**
     * The RoughVehicleAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $RoughVehicleAmount;
    /**
     * The PrivateConsumerAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $PrivateConsumerAmount;
    /**
     * Constructor method for ConsumerValuationAmountType
     * @uses ConsumerValuationAmountType::setExcellentVehicleAmount()
     * @uses ConsumerValuationAmountType::setAverageVehicleAmount()
     * @uses ConsumerValuationAmountType::setRoughVehicleAmount()
     * @uses ConsumerValuationAmountType::setPrivateConsumerAmount()
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $excellentVehicleAmount
     * @param \Autovista\Valuation\StructType\ValuationAmountType $averageVehicleAmount
     * @param \Autovista\Valuation\StructType\ValuationAmountType $roughVehicleAmount
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $privateConsumerAmount
     */
    public function __construct(\Autovista\Valuation\StructType\ValuationAmountType $excellentVehicleAmount = null, \Autovista\Valuation\StructType\ValuationAmountType $averageVehicleAmount = null, \Autovista\Valuation\StructType\ValuationAmountType $roughVehicleAmount = null, \Autovista\Valuation\StructType\ValuationAmountType $privateConsumerAmount = null)
    {
        $this
            ->setExcellentVehicleAmount($excellentVehicleAmount)
            ->setAverageVehicleAmount($averageVehicleAmount)
            ->setRoughVehicleAmount($roughVehicleAmount)
            ->setPrivateConsumerAmount($privateConsumerAmount);
    }
    /**
     * Get ExcellentVehicleAmount value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getExcellentVehicleAmount()
    {
        return $this->ExcellentVehicleAmount;
    }
    /**
     * Set ExcellentVehicleAmount value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $excellentVehicleAmount
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType
     */
    public function setExcellentVehicleAmount(\Autovista\Valuation\StructType\ValuationAmountType $excellentVehicleAmount = null)
    {
        $this->ExcellentVehicleAmount = $excellentVehicleAmount;
        return $this;
    }
    /**
     * Get AverageVehicleAmount value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getAverageVehicleAmount()
    {
        return $this->AverageVehicleAmount;
    }
    /**
     * Set AverageVehicleAmount value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $averageVehicleAmount
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType
     */
    public function setAverageVehicleAmount(\Autovista\Valuation\StructType\ValuationAmountType $averageVehicleAmount = null)
    {
        $this->AverageVehicleAmount = $averageVehicleAmount;
        return $this;
    }
    /**
     * Get RoughVehicleAmount value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getRoughVehicleAmount()
    {
        return $this->RoughVehicleAmount;
    }
    /**
     * Set RoughVehicleAmount value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $roughVehicleAmount
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType
     */
    public function setRoughVehicleAmount(\Autovista\Valuation\StructType\ValuationAmountType $roughVehicleAmount = null)
    {
        $this->RoughVehicleAmount = $roughVehicleAmount;
        return $this;
    }
    /**
     * Get PrivateConsumerAmount value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getPrivateConsumerAmount()
    {
        return $this->PrivateConsumerAmount;
    }
    /**
     * Set PrivateConsumerAmount value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $privateConsumerAmount
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType
     */
    public function setPrivateConsumerAmount(\Autovista\Valuation\StructType\ValuationAmountType $privateConsumerAmount = null)
    {
        $this->PrivateConsumerAmount = $privateConsumerAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType
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
