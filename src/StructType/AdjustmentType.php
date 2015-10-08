<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdjustmentType StructType
 * @subpackage Structs
 */
class AdjustmentType extends AbstractStructBase
{
    /**
     * The InternalMarket
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\InternalMarketAdjustmentType
     */
    public $InternalMarket;
    /**
     * The RegionalMarket
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\RegionalMarketAdjustmentType
     */
    public $RegionalMarket;
    /**
     * The PreviousOwner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\OwnerAdjustmentType
     */
    public $PreviousOwner;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\DeliveryAdjustmentType
     */
    public $DeliveryDate;
    /**
     * The VehicleCondition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ConditionAdjustmentType
     */
    public $VehicleCondition;
    /**
     * The SpecialUsage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\UsageAdjustmentType
     */
    public $SpecialUsage;
    /**
     * The PreviousDamage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\DamageAdjustmentType
     */
    public $PreviousDamage;
    /**
     * The ColorAdjustment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ColorAdjustmentType
     */
    public $ColorAdjustment;
    /**
     * The DirectImportAdjustment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\DirectImportAdjustmentType
     */
    public $DirectImportAdjustment;
    /**
     * The ServiceHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ServiceHistoryAdjustmentType
     */
    public $ServiceHistory;
    /**
     * The Tyre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\TyreAdjustmentType
     */
    public $Tyre;
    /**
     * The Inspection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\InspectionAdjustmentType
     */
    public $Inspection;
    /**
     * The Emission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Adjustment factor related to emission.
     * @var \Autovista\Valuation\StructType\EmissionAdjustmentType
     */
    public $Emission;
    /**
     * The RoadTax
     * Meta informations extracted from the WSDL
     * - documentation: Tax for using or keeping a vehicle on public road. It has different names in different countries. For example, it is known as "RFL" (Road Fund License)/Car Tax in UK. It is a fixed amount depending on the vehicle and the country.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Tax for using or keeping a vehicle on public road. It has different names in different countries. For example, it is known as "RFL" (Road Fund License)/Car Tax in UK. It is a fixed amount depending on the vehicle and the country.
     * @var \Autovista\Valuation\StructType\RoadTaxAdjustmentType
     */
    public $RoadTax;
    /**
     * The DamageRepairCost
     * Meta informations extracted from the WSDL
     * - documentation: Adjustment due to damage repair.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\DamageRepairCostAdjustmentType
     */
    public $DamageRepairCost;
    /**
     * The AdditionalAdjustment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\AdditionalAdjustmentType
     */
    public $AdditionalAdjustment;
    /**
     * The TotalAdjustmentValuation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalAdjustmentValuation;
    /**
     * Constructor method for AdjustmentType
     * @uses AdjustmentType::setInternalMarket()
     * @uses AdjustmentType::setRegionalMarket()
     * @uses AdjustmentType::setPreviousOwner()
     * @uses AdjustmentType::setDeliveryDate()
     * @uses AdjustmentType::setVehicleCondition()
     * @uses AdjustmentType::setSpecialUsage()
     * @uses AdjustmentType::setPreviousDamage()
     * @uses AdjustmentType::setColorAdjustment()
     * @uses AdjustmentType::setDirectImportAdjustment()
     * @uses AdjustmentType::setServiceHistory()
     * @uses AdjustmentType::setTyre()
     * @uses AdjustmentType::setInspection()
     * @uses AdjustmentType::setEmission()
     * @uses AdjustmentType::setRoadTax()
     * @uses AdjustmentType::setDamageRepairCost()
     * @uses AdjustmentType::setAdditionalAdjustment()
     * @uses AdjustmentType::setTotalAdjustmentValuation()
     * @param \Autovista\Valuation\StructType\InternalMarketAdjustmentType
     * $internalMarket
     * @param \Autovista\Valuation\StructType\RegionalMarketAdjustmentType
     * $regionalMarket
     * @param \Autovista\Valuation\StructType\OwnerAdjustmentType $previousOwner
     * @param \Autovista\Valuation\StructType\DeliveryAdjustmentType $deliveryDate
     * @param \Autovista\Valuation\StructType\ConditionAdjustmentType $vehicleCondition
     * @param \Autovista\Valuation\StructType\UsageAdjustmentType $specialUsage
     * @param \Autovista\Valuation\StructType\DamageAdjustmentType $previousDamage
     * @param \Autovista\Valuation\StructType\ColorAdjustmentType $colorAdjustment
     * @param \Autovista\Valuation\StructType\DirectImportAdjustmentType
     * $directImportAdjustment
     * @param \Autovista\Valuation\StructType\ServiceHistoryAdjustmentType
     * $serviceHistory
     * @param \Autovista\Valuation\StructType\TyreAdjustmentType $tyre
     * @param \Autovista\Valuation\StructType\InspectionAdjustmentType $inspection
     * @param \Autovista\Valuation\StructType\EmissionAdjustmentType $emission
     * @param \Autovista\Valuation\StructType\RoadTaxAdjustmentType $roadTax
     * @param \Autovista\Valuation\StructType\DamageRepairCostAdjustmentType
     * $damageRepairCost
     * @param \Autovista\Valuation\StructType\AdditionalAdjustmentType
     * $additionalAdjustment
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalAdjustmentValuation
     */
    public function __construct(\Autovista\Valuation\StructType\InternalMarketAdjustmentType $internalMarket = null, \Autovista\Valuation\StructType\RegionalMarketAdjustmentType $regionalMarket = null, \Autovista\Valuation\StructType\OwnerAdjustmentType $previousOwner = null, \Autovista\Valuation\StructType\DeliveryAdjustmentType $deliveryDate = null, \Autovista\Valuation\StructType\ConditionAdjustmentType $vehicleCondition = null, \Autovista\Valuation\StructType\UsageAdjustmentType $specialUsage = null, \Autovista\Valuation\StructType\DamageAdjustmentType $previousDamage = null, \Autovista\Valuation\StructType\ColorAdjustmentType $colorAdjustment = null, \Autovista\Valuation\StructType\DirectImportAdjustmentType $directImportAdjustment = null, \Autovista\Valuation\StructType\ServiceHistoryAdjustmentType $serviceHistory = null, \Autovista\Valuation\StructType\TyreAdjustmentType $tyre = null, \Autovista\Valuation\StructType\InspectionAdjustmentType $inspection = null, \Autovista\Valuation\StructType\EmissionAdjustmentType $emission = null, \Autovista\Valuation\StructType\RoadTaxAdjustmentType $roadTax = null, \Autovista\Valuation\StructType\DamageRepairCostAdjustmentType $damageRepairCost = null, \Autovista\Valuation\StructType\AdditionalAdjustmentType $additionalAdjustment = null, \Autovista\Valuation\StructType\ValuationAmountType $totalAdjustmentValuation = null)
    {
        $this
            ->setInternalMarket($internalMarket)
            ->setRegionalMarket($regionalMarket)
            ->setPreviousOwner($previousOwner)
            ->setDeliveryDate($deliveryDate)
            ->setVehicleCondition($vehicleCondition)
            ->setSpecialUsage($specialUsage)
            ->setPreviousDamage($previousDamage)
            ->setColorAdjustment($colorAdjustment)
            ->setDirectImportAdjustment($directImportAdjustment)
            ->setServiceHistory($serviceHistory)
            ->setTyre($tyre)
            ->setInspection($inspection)
            ->setEmission($emission)
            ->setRoadTax($roadTax)
            ->setDamageRepairCost($damageRepairCost)
            ->setAdditionalAdjustment($additionalAdjustment)
            ->setTotalAdjustmentValuation($totalAdjustmentValuation);
    }
    /**
     * Get InternalMarket value
     * @return \Autovista\Valuation\StructType\InternalMarketAdjustmentType|null
     */
    public function getInternalMarket()
    {
        return $this->InternalMarket;
    }
    /**
     * Set InternalMarket value
     * @param \Autovista\Valuation\StructType\InternalMarketAdjustmentType
     * $internalMarket
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setInternalMarket(\Autovista\Valuation\StructType\InternalMarketAdjustmentType $internalMarket = null)
    {
        $this->InternalMarket = $internalMarket;
        return $this;
    }
    /**
     * Get RegionalMarket value
     * @return \Autovista\Valuation\StructType\RegionalMarketAdjustmentType|null
     */
    public function getRegionalMarket()
    {
        return $this->RegionalMarket;
    }
    /**
     * Set RegionalMarket value
     * @param \Autovista\Valuation\StructType\RegionalMarketAdjustmentType
     * $regionalMarket
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setRegionalMarket(\Autovista\Valuation\StructType\RegionalMarketAdjustmentType $regionalMarket = null)
    {
        $this->RegionalMarket = $regionalMarket;
        return $this;
    }
    /**
     * Get PreviousOwner value
     * @return \Autovista\Valuation\StructType\OwnerAdjustmentType|null
     */
    public function getPreviousOwner()
    {
        return $this->PreviousOwner;
    }
    /**
     * Set PreviousOwner value
     * @param \Autovista\Valuation\StructType\OwnerAdjustmentType $previousOwner
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setPreviousOwner(\Autovista\Valuation\StructType\OwnerAdjustmentType $previousOwner = null)
    {
        $this->PreviousOwner = $previousOwner;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return \Autovista\Valuation\StructType\DeliveryAdjustmentType|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param \Autovista\Valuation\StructType\DeliveryAdjustmentType $deliveryDate
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setDeliveryDate(\Autovista\Valuation\StructType\DeliveryAdjustmentType $deliveryDate = null)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get VehicleCondition value
     * @return \Autovista\Valuation\StructType\ConditionAdjustmentType|null
     */
    public function getVehicleCondition()
    {
        return $this->VehicleCondition;
    }
    /**
     * Set VehicleCondition value
     * @param \Autovista\Valuation\StructType\ConditionAdjustmentType $vehicleCondition
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setVehicleCondition(\Autovista\Valuation\StructType\ConditionAdjustmentType $vehicleCondition = null)
    {
        $this->VehicleCondition = $vehicleCondition;
        return $this;
    }
    /**
     * Get SpecialUsage value
     * @return \Autovista\Valuation\StructType\UsageAdjustmentType|null
     */
    public function getSpecialUsage()
    {
        return $this->SpecialUsage;
    }
    /**
     * Set SpecialUsage value
     * @param \Autovista\Valuation\StructType\UsageAdjustmentType $specialUsage
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setSpecialUsage(\Autovista\Valuation\StructType\UsageAdjustmentType $specialUsage = null)
    {
        $this->SpecialUsage = $specialUsage;
        return $this;
    }
    /**
     * Get PreviousDamage value
     * @return \Autovista\Valuation\StructType\DamageAdjustmentType|null
     */
    public function getPreviousDamage()
    {
        return $this->PreviousDamage;
    }
    /**
     * Set PreviousDamage value
     * @param \Autovista\Valuation\StructType\DamageAdjustmentType $previousDamage
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setPreviousDamage(\Autovista\Valuation\StructType\DamageAdjustmentType $previousDamage = null)
    {
        $this->PreviousDamage = $previousDamage;
        return $this;
    }
    /**
     * Get ColorAdjustment value
     * @return \Autovista\Valuation\StructType\ColorAdjustmentType|null
     */
    public function getColorAdjustment()
    {
        return $this->ColorAdjustment;
    }
    /**
     * Set ColorAdjustment value
     * @param \Autovista\Valuation\StructType\ColorAdjustmentType $colorAdjustment
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setColorAdjustment(\Autovista\Valuation\StructType\ColorAdjustmentType $colorAdjustment = null)
    {
        $this->ColorAdjustment = $colorAdjustment;
        return $this;
    }
    /**
     * Get DirectImportAdjustment value
     * @return \Autovista\Valuation\StructType\DirectImportAdjustmentType|null
     */
    public function getDirectImportAdjustment()
    {
        return $this->DirectImportAdjustment;
    }
    /**
     * Set DirectImportAdjustment value
     * @param \Autovista\Valuation\StructType\DirectImportAdjustmentType
     * $directImportAdjustment
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setDirectImportAdjustment(\Autovista\Valuation\StructType\DirectImportAdjustmentType $directImportAdjustment = null)
    {
        $this->DirectImportAdjustment = $directImportAdjustment;
        return $this;
    }
    /**
     * Get ServiceHistory value
     * @return \Autovista\Valuation\StructType\ServiceHistoryAdjustmentType|null
     */
    public function getServiceHistory()
    {
        return $this->ServiceHistory;
    }
    /**
     * Set ServiceHistory value
     * @param \Autovista\Valuation\StructType\ServiceHistoryAdjustmentType
     * $serviceHistory
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setServiceHistory(\Autovista\Valuation\StructType\ServiceHistoryAdjustmentType $serviceHistory = null)
    {
        $this->ServiceHistory = $serviceHistory;
        return $this;
    }
    /**
     * Get Tyre value
     * @return \Autovista\Valuation\StructType\TyreAdjustmentType|null
     */
    public function getTyre()
    {
        return $this->Tyre;
    }
    /**
     * Set Tyre value
     * @param \Autovista\Valuation\StructType\TyreAdjustmentType $tyre
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setTyre(\Autovista\Valuation\StructType\TyreAdjustmentType $tyre = null)
    {
        $this->Tyre = $tyre;
        return $this;
    }
    /**
     * Get Inspection value
     * @return \Autovista\Valuation\StructType\InspectionAdjustmentType|null
     */
    public function getInspection()
    {
        return $this->Inspection;
    }
    /**
     * Set Inspection value
     * @param \Autovista\Valuation\StructType\InspectionAdjustmentType $inspection
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setInspection(\Autovista\Valuation\StructType\InspectionAdjustmentType $inspection = null)
    {
        $this->Inspection = $inspection;
        return $this;
    }
    /**
     * Get Emission value
     * @return \Autovista\Valuation\StructType\EmissionAdjustmentType|null
     */
    public function getEmission()
    {
        return $this->Emission;
    }
    /**
     * Set Emission value
     * @param \Autovista\Valuation\StructType\EmissionAdjustmentType $emission
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setEmission(\Autovista\Valuation\StructType\EmissionAdjustmentType $emission = null)
    {
        $this->Emission = $emission;
        return $this;
    }
    /**
     * Get RoadTax value
     * @return \Autovista\Valuation\StructType\RoadTaxAdjustmentType|null
     */
    public function getRoadTax()
    {
        return $this->RoadTax;
    }
    /**
     * Set RoadTax value
     * @param \Autovista\Valuation\StructType\RoadTaxAdjustmentType $roadTax
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setRoadTax(\Autovista\Valuation\StructType\RoadTaxAdjustmentType $roadTax = null)
    {
        $this->RoadTax = $roadTax;
        return $this;
    }
    /**
     * Get DamageRepairCost value
     * @return \Autovista\Valuation\StructType\DamageRepairCostAdjustmentType|null
     */
    public function getDamageRepairCost()
    {
        return $this->DamageRepairCost;
    }
    /**
     * Set DamageRepairCost value
     * @param \Autovista\Valuation\StructType\DamageRepairCostAdjustmentType
     * $damageRepairCost
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setDamageRepairCost(\Autovista\Valuation\StructType\DamageRepairCostAdjustmentType $damageRepairCost = null)
    {
        $this->DamageRepairCost = $damageRepairCost;
        return $this;
    }
    /**
     * Get AdditionalAdjustment value
     * @return \Autovista\Valuation\StructType\AdditionalAdjustmentType|null
     */
    public function getAdditionalAdjustment()
    {
        return $this->AdditionalAdjustment;
    }
    /**
     * Set AdditionalAdjustment value
     * @param \Autovista\Valuation\StructType\AdditionalAdjustmentType
     * $additionalAdjustment
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setAdditionalAdjustment(\Autovista\Valuation\StructType\AdditionalAdjustmentType $additionalAdjustment = null)
    {
        $this->AdditionalAdjustment = $additionalAdjustment;
        return $this;
    }
    /**
     * Get TotalAdjustmentValuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalAdjustmentValuation()
    {
        return $this->TotalAdjustmentValuation;
    }
    /**
     * Set TotalAdjustmentValuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalAdjustmentValuation
     * @return \Autovista\Valuation\StructType\AdjustmentType
     */
    public function setTotalAdjustmentValuation(\Autovista\Valuation\StructType\ValuationAmountType $totalAdjustmentValuation = null)
    {
        $this->TotalAdjustmentValuation = $totalAdjustmentValuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\AdjustmentType
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
