<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValuationType StructType
 * @subpackage Structs
 */
class ValuationType extends AbstractStructBase
{
    /**
     * The NationalVehicleCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $RegistrationDate;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var positiveInteger
     */
    public $Mileage;
    /**
     * The ETGdataVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ETGdataVersion;
    /**
     * The ETGkernelVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ETGkernelVersion;
    /**
     * The ValuationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $ValuationDate;
    /**
     * The VAT
     * Meta informations extracted from the WSDL
     * - documentation: Defines if currency amounts are inclusive or ecxclusive VAT. If this element is missing, default currency amounts are applied
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Defines if currency amounts are inclusive or ecxclusive VAT. If this element is missing, default currency amounts are applied
     * @var string
     */
    public $VAT;
    /**
     * The LPGIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $LPGIndicator;
    /**
     * The LowMileageIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedByte
     */
    public $LowMileageIndicator;
    /**
     * The CalculationMode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: This is an enumeration of all calculation rules, EurotaxGlass's intelligence module can apply during calculation of basic residual value, option calculation, etc. EurotaxGlass's may add other calculation mode at the end of the
     * enumerated list in future release.
     * @var string
     */
    public $CalculationMode;
    /**
     * The BasicResidualValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $BasicResidualValue;
    /**
     * The MonthlyAdjustmentValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $MonthlyAdjustmentValue;
    /**
     * The MileageAdjustmentValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $MileageAdjustmentValue;
    /**
     * The Adjustment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\AdjustmentType
     */
    public $Adjustment;
    /**
     * The EquipmentList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ArrayOfEquipment
     */
    public $EquipmentList;
    /**
     * The ValueAddedItemList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ArrayOfValueAddedItem
     */
    public $ValueAddedItemList;
    /**
     * The DevaluationItemList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ArrayOfDevaluationItem
     */
    public $DevaluationItemList;
    /**
     * The ActualNewPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ETGpriceType
     */
    public $ActualNewPrice;
    /**
     * The AverageMileage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedInt
     */
    public $AverageMileage;
    /**
     * The ResidualValueAgeAdjusted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $ResidualValueAgeAdjusted;
    /**
     * The ResidualValueAgeMileageAdjusted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $ResidualValueAgeMileageAdjusted;
    /**
     * The TotalRepairCost
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalRepairCost;
    /**
     * The TotalValuation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalValuation;
    /**
     * The ConsumerValuation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ConsumerValuationAmountType
     */
    public $ConsumerValuation;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - documentation: Additional information whether special adjustment rules were applied during the valuation process. For example, TradeAmount and RetailAmount of "TotalValuation" might be limitted to certain predefined values. In such case, "Remarks"
     * will included information about the special rules if applicable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Remarks;
    /**
     * The ETGdataIssuedOn
     * Meta informations extracted from the WSDL
     * - documentation: The exact date when the data was issued by EurotaxGlass's. Normally EurotaxGlass's issues valuation data monthly. That's why the month and the year are available in the ETGdataIssuedOn field.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $ETGdataIssuedOn;
    /**
     * Constructor method for ValuationType
     * @uses ValuationType::setNationalVehicleCode()
     * @uses ValuationType::setRegistrationDate()
     * @uses ValuationType::setMileage()
     * @uses ValuationType::setETGdataVersion()
     * @uses ValuationType::setETGkernelVersion()
     * @uses ValuationType::setValuationDate()
     * @uses ValuationType::setVAT()
     * @uses ValuationType::setLPGIndicator()
     * @uses ValuationType::setLowMileageIndicator()
     * @uses ValuationType::setCalculationMode()
     * @uses ValuationType::setBasicResidualValue()
     * @uses ValuationType::setMonthlyAdjustmentValue()
     * @uses ValuationType::setMileageAdjustmentValue()
     * @uses ValuationType::setAdjustment()
     * @uses ValuationType::setEquipmentList()
     * @uses ValuationType::setValueAddedItemList()
     * @uses ValuationType::setDevaluationItemList()
     * @uses ValuationType::setActualNewPrice()
     * @uses ValuationType::setAverageMileage()
     * @uses ValuationType::setResidualValueAgeAdjusted()
     * @uses ValuationType::setResidualValueAgeMileageAdjusted()
     * @uses ValuationType::setTotalRepairCost()
     * @uses ValuationType::setTotalValuation()
     * @uses ValuationType::setConsumerValuation()
     * @uses ValuationType::setRemarks()
     * @uses ValuationType::setETGdataIssuedOn()
     * @param long $nationalVehicleCode
     * @param \Autovista\Valuation\StructType\ETGdateType $registrationDate
     * @param positiveInteger $mileage
     * @param string $eTGdataVersion
     * @param string $eTGkernelVersion
     * @param \Autovista\Valuation\StructType\ETGdateType $valuationDate
     * @param string $vAT
     * @param boolean $lPGIndicator
     * @param unsignedByte $lowMileageIndicator
     * @param string $calculationMode
     * @param \Autovista\Valuation\StructType\ValuationAmountType $basicResidualValue
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $monthlyAdjustmentValue
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $mileageAdjustmentValue
     * @param \Autovista\Valuation\StructType\AdjustmentType $adjustment
     * @param \Autovista\Valuation\StructType\ArrayOfEquipment $equipmentList
     * @param \Autovista\Valuation\StructType\ArrayOfValueAddedItem $valueAddedItemList
     * @param \Autovista\Valuation\StructType\ArrayOfDevaluationItem
     * $devaluationItemList
     * @param \Autovista\Valuation\StructType\ETGpriceType $actualNewPrice
     * @param unsignedInt $averageMileage
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $residualValueAgeAdjusted
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $residualValueAgeMileageAdjusted
     * @param \Autovista\Valuation\StructType\ValuationAmountType $totalRepairCost
     * @param \Autovista\Valuation\StructType\ValuationAmountType $totalValuation
     * @param \Autovista\Valuation\StructType\ConsumerValuationAmountType
     * $consumerValuation
     * @param string $remarks
     * @param \Autovista\Valuation\StructType\ETGdateType $eTGdataIssuedOn
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Valuation\StructType\ETGdateType $registrationDate = null, $mileage = null, $eTGdataVersion = null, $eTGkernelVersion = null, \Autovista\Valuation\StructType\ETGdateType $valuationDate = null, $vAT = null, $lPGIndicator = null, $lowMileageIndicator = null, $calculationMode = null, \Autovista\Valuation\StructType\ValuationAmountType $basicResidualValue = null, \Autovista\Valuation\StructType\ValuationAmountType $monthlyAdjustmentValue = null, \Autovista\Valuation\StructType\ValuationAmountType $mileageAdjustmentValue = null, \Autovista\Valuation\StructType\AdjustmentType $adjustment = null, \Autovista\Valuation\StructType\ArrayOfEquipment $equipmentList = null, \Autovista\Valuation\StructType\ArrayOfValueAddedItem $valueAddedItemList = null, \Autovista\Valuation\StructType\ArrayOfDevaluationItem $devaluationItemList = null, \Autovista\Valuation\StructType\ETGpriceType $actualNewPrice = null, $averageMileage = null, \Autovista\Valuation\StructType\ValuationAmountType $residualValueAgeAdjusted = null, \Autovista\Valuation\StructType\ValuationAmountType $residualValueAgeMileageAdjusted = null, \Autovista\Valuation\StructType\ValuationAmountType $totalRepairCost = null, \Autovista\Valuation\StructType\ValuationAmountType $totalValuation = null, \Autovista\Valuation\StructType\ConsumerValuationAmountType $consumerValuation = null, $remarks = null, \Autovista\Valuation\StructType\ETGdateType $eTGdataIssuedOn = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setRegistrationDate($registrationDate)
            ->setMileage($mileage)
            ->setETGdataVersion($eTGdataVersion)
            ->setETGkernelVersion($eTGkernelVersion)
            ->setValuationDate($valuationDate)
            ->setVAT($vAT)
            ->setLPGIndicator($lPGIndicator)
            ->setLowMileageIndicator($lowMileageIndicator)
            ->setCalculationMode($calculationMode)
            ->setBasicResidualValue($basicResidualValue)
            ->setMonthlyAdjustmentValue($monthlyAdjustmentValue)
            ->setMileageAdjustmentValue($mileageAdjustmentValue)
            ->setAdjustment($adjustment)
            ->setEquipmentList($equipmentList)
            ->setValueAddedItemList($valueAddedItemList)
            ->setDevaluationItemList($devaluationItemList)
            ->setActualNewPrice($actualNewPrice)
            ->setAverageMileage($averageMileage)
            ->setResidualValueAgeAdjusted($residualValueAgeAdjusted)
            ->setResidualValueAgeMileageAdjusted($residualValueAgeMileageAdjusted)
            ->setTotalRepairCost($totalRepairCost)
            ->setTotalValuation($totalValuation)
            ->setConsumerValuation($consumerValuation)
            ->setRemarks($remarks)
            ->setETGdataIssuedOn($eTGdataIssuedOn);
    }
    /**
     * Get NationalVehicleCode value
     * @return long
     */
    public function getNationalVehicleCode()
    {
        return $this->NationalVehicleCode;
    }
    /**
     * Set NationalVehicleCode value
     * @param long $nationalVehicleCode
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return \Autovista\Valuation\StructType\ETGdateType
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $registrationDate
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setRegistrationDate(\Autovista\Valuation\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get Mileage value
     * @return positiveInteger
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param positiveInteger $mileage
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setMileage($mileage = null)
    {
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get ETGdataVersion value
     * @return string|null
     */
    public function getETGdataVersion()
    {
        return $this->ETGdataVersion;
    }
    /**
     * Set ETGdataVersion value
     * @param string $eTGdataVersion
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setETGdataVersion($eTGdataVersion = null)
    {
        $this->ETGdataVersion = $eTGdataVersion;
        return $this;
    }
    /**
     * Get ETGkernelVersion value
     * @return string|null
     */
    public function getETGkernelVersion()
    {
        return $this->ETGkernelVersion;
    }
    /**
     * Set ETGkernelVersion value
     * @param string $eTGkernelVersion
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setETGkernelVersion($eTGkernelVersion = null)
    {
        $this->ETGkernelVersion = $eTGkernelVersion;
        return $this;
    }
    /**
     * Get ValuationDate value
     * @return \Autovista\Valuation\StructType\ETGdateType|null
     */
    public function getValuationDate()
    {
        return $this->ValuationDate;
    }
    /**
     * Set ValuationDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $valuationDate
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setValuationDate(\Autovista\Valuation\StructType\ETGdateType $valuationDate = null)
    {
        $this->ValuationDate = $valuationDate;
        return $this;
    }
    /**
     * Get VAT value
     * @return string|null
     */
    public function getVAT()
    {
        return $this->VAT;
    }
    /**
     * Set VAT value
     * @uses \Autovista\Valuation\EnumType\VATtype::valueIsValid()
     * @uses \Autovista\Valuation\EnumType\VATtype::getValidValues()
     * @param string $vAT
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setVAT($vAT = null)
    {
        if (!\Autovista\Valuation\EnumType\VATtype::valueIsValid($vAT)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vAT, implode(', ', \Autovista\Valuation\EnumType\VATtype::getValidValues())), __LINE__);
        }
        $this->VAT = $vAT;
        return $this;
    }
    /**
     * Get LPGIndicator value
     * @return boolean|null
     */
    public function getLPGIndicator()
    {
        return $this->LPGIndicator;
    }
    /**
     * Set LPGIndicator value
     * @param boolean $lPGIndicator
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setLPGIndicator($lPGIndicator = null)
    {
        $this->LPGIndicator = $lPGIndicator;
        return $this;
    }
    /**
     * Get LowMileageIndicator value
     * @return unsignedByte|null
     */
    public function getLowMileageIndicator()
    {
        return $this->LowMileageIndicator;
    }
    /**
     * Set LowMileageIndicator value
     * @param unsignedByte $lowMileageIndicator
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setLowMileageIndicator($lowMileageIndicator = null)
    {
        $this->LowMileageIndicator = $lowMileageIndicator;
        return $this;
    }
    /**
     * Get CalculationMode value
     * @return string|null
     */
    public function getCalculationMode()
    {
        return $this->CalculationMode;
    }
    /**
     * Set CalculationMode value
     * @uses \Autovista\Valuation\EnumType\ETGcalculationModeType::valueIsValid()
     * @uses \Autovista\Valuation\EnumType\ETGcalculationModeType::getValidValues()
     * @param string $calculationMode
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setCalculationMode($calculationMode = null)
    {
        if (!\Autovista\Valuation\EnumType\ETGcalculationModeType::valueIsValid($calculationMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculationMode, implode(', ', \Autovista\Valuation\EnumType\ETGcalculationModeType::getValidValues())), __LINE__);
        }
        $this->CalculationMode = $calculationMode;
        return $this;
    }
    /**
     * Get BasicResidualValue value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getBasicResidualValue()
    {
        return $this->BasicResidualValue;
    }
    /**
     * Set BasicResidualValue value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $basicResidualValue
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setBasicResidualValue(\Autovista\Valuation\StructType\ValuationAmountType $basicResidualValue = null)
    {
        $this->BasicResidualValue = $basicResidualValue;
        return $this;
    }
    /**
     * Get MonthlyAdjustmentValue value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getMonthlyAdjustmentValue()
    {
        return $this->MonthlyAdjustmentValue;
    }
    /**
     * Set MonthlyAdjustmentValue value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $monthlyAdjustmentValue
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setMonthlyAdjustmentValue(\Autovista\Valuation\StructType\ValuationAmountType $monthlyAdjustmentValue = null)
    {
        $this->MonthlyAdjustmentValue = $monthlyAdjustmentValue;
        return $this;
    }
    /**
     * Get MileageAdjustmentValue value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getMileageAdjustmentValue()
    {
        return $this->MileageAdjustmentValue;
    }
    /**
     * Set MileageAdjustmentValue value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $mileageAdjustmentValue
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setMileageAdjustmentValue(\Autovista\Valuation\StructType\ValuationAmountType $mileageAdjustmentValue = null)
    {
        $this->MileageAdjustmentValue = $mileageAdjustmentValue;
        return $this;
    }
    /**
     * Get Adjustment value
     * @return \Autovista\Valuation\StructType\AdjustmentType|null
     */
    public function getAdjustment()
    {
        return $this->Adjustment;
    }
    /**
     * Set Adjustment value
     * @param \Autovista\Valuation\StructType\AdjustmentType $adjustment
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setAdjustment(\Autovista\Valuation\StructType\AdjustmentType $adjustment = null)
    {
        $this->Adjustment = $adjustment;
        return $this;
    }
    /**
     * Get EquipmentList value
     * @return \Autovista\Valuation\StructType\ArrayOfEquipment|null
     */
    public function getEquipmentList()
    {
        return $this->EquipmentList;
    }
    /**
     * Set EquipmentList value
     * @param \Autovista\Valuation\StructType\ArrayOfEquipment $equipmentList
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setEquipmentList(\Autovista\Valuation\StructType\ArrayOfEquipment $equipmentList = null)
    {
        $this->EquipmentList = $equipmentList;
        return $this;
    }
    /**
     * Get ValueAddedItemList value
     * @return \Autovista\Valuation\StructType\ArrayOfValueAddedItem|null
     */
    public function getValueAddedItemList()
    {
        return $this->ValueAddedItemList;
    }
    /**
     * Set ValueAddedItemList value
     * @param \Autovista\Valuation\StructType\ArrayOfValueAddedItem $valueAddedItemList
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setValueAddedItemList(\Autovista\Valuation\StructType\ArrayOfValueAddedItem $valueAddedItemList = null)
    {
        $this->ValueAddedItemList = $valueAddedItemList;
        return $this;
    }
    /**
     * Get DevaluationItemList value
     * @return \Autovista\Valuation\StructType\ArrayOfDevaluationItem|null
     */
    public function getDevaluationItemList()
    {
        return $this->DevaluationItemList;
    }
    /**
     * Set DevaluationItemList value
     * @param \Autovista\Valuation\StructType\ArrayOfDevaluationItem
     * $devaluationItemList
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setDevaluationItemList(\Autovista\Valuation\StructType\ArrayOfDevaluationItem $devaluationItemList = null)
    {
        $this->DevaluationItemList = $devaluationItemList;
        return $this;
    }
    /**
     * Get ActualNewPrice value
     * @return \Autovista\Valuation\StructType\ETGpriceType|null
     */
    public function getActualNewPrice()
    {
        return $this->ActualNewPrice;
    }
    /**
     * Set ActualNewPrice value
     * @param \Autovista\Valuation\StructType\ETGpriceType $actualNewPrice
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setActualNewPrice(\Autovista\Valuation\StructType\ETGpriceType $actualNewPrice = null)
    {
        $this->ActualNewPrice = $actualNewPrice;
        return $this;
    }
    /**
     * Get AverageMileage value
     * @return unsignedInt|null
     */
    public function getAverageMileage()
    {
        return $this->AverageMileage;
    }
    /**
     * Set AverageMileage value
     * @param unsignedInt $averageMileage
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setAverageMileage($averageMileage = null)
    {
        $this->AverageMileage = $averageMileage;
        return $this;
    }
    /**
     * Get ResidualValueAgeAdjusted value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getResidualValueAgeAdjusted()
    {
        return $this->ResidualValueAgeAdjusted;
    }
    /**
     * Set ResidualValueAgeAdjusted value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $residualValueAgeAdjusted
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setResidualValueAgeAdjusted(\Autovista\Valuation\StructType\ValuationAmountType $residualValueAgeAdjusted = null)
    {
        $this->ResidualValueAgeAdjusted = $residualValueAgeAdjusted;
        return $this;
    }
    /**
     * Get ResidualValueAgeMileageAdjusted value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getResidualValueAgeMileageAdjusted()
    {
        return $this->ResidualValueAgeMileageAdjusted;
    }
    /**
     * Set ResidualValueAgeMileageAdjusted value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $residualValueAgeMileageAdjusted
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setResidualValueAgeMileageAdjusted(\Autovista\Valuation\StructType\ValuationAmountType $residualValueAgeMileageAdjusted = null)
    {
        $this->ResidualValueAgeMileageAdjusted = $residualValueAgeMileageAdjusted;
        return $this;
    }
    /**
     * Get TotalRepairCost value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalRepairCost()
    {
        return $this->TotalRepairCost;
    }
    /**
     * Set TotalRepairCost value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $totalRepairCost
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setTotalRepairCost(\Autovista\Valuation\StructType\ValuationAmountType $totalRepairCost = null)
    {
        $this->TotalRepairCost = $totalRepairCost;
        return $this;
    }
    /**
     * Get TotalValuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalValuation()
    {
        return $this->TotalValuation;
    }
    /**
     * Set TotalValuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType $totalValuation
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setTotalValuation(\Autovista\Valuation\StructType\ValuationAmountType $totalValuation = null)
    {
        $this->TotalValuation = $totalValuation;
        return $this;
    }
    /**
     * Get ConsumerValuation value
     * @return \Autovista\Valuation\StructType\ConsumerValuationAmountType|null
     */
    public function getConsumerValuation()
    {
        return $this->ConsumerValuation;
    }
    /**
     * Set ConsumerValuation value
     * @param \Autovista\Valuation\StructType\ConsumerValuationAmountType
     * $consumerValuation
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setConsumerValuation(\Autovista\Valuation\StructType\ConsumerValuationAmountType $consumerValuation = null)
    {
        $this->ConsumerValuation = $consumerValuation;
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setRemarks($remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get ETGdataIssuedOn value
     * @return \Autovista\Valuation\StructType\ETGdateType|null
     */
    public function getETGdataIssuedOn()
    {
        return $this->ETGdataIssuedOn;
    }
    /**
     * Set ETGdataIssuedOn value
     * @param \Autovista\Valuation\StructType\ETGdateType $eTGdataIssuedOn
     * @return \Autovista\Valuation\StructType\ValuationType
     */
    public function setETGdataIssuedOn(\Autovista\Valuation\StructType\ETGdateType $eTGdataIssuedOn = null)
    {
        $this->ETGdataIssuedOn = $eTGdataIssuedOn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ValuationType
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
