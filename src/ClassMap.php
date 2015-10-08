<?php

namespace Autovista\Valuation;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ETGpriceType' => 'Autovista\Valuation\StructType\ETGpriceType',
            'ETGdateType' => 'Autovista\Valuation\StructType\ETGdateType',
            'ETGsettingType' => 'Autovista\Valuation\StructType\ETGsettingType',
            'LoginDataType' => 'Autovista\Valuation\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\Valuation\StructType\OriginatorType',
            'FailureType' => 'Autovista\Valuation\StructType\FailureType',
            'SuccessType' => 'Autovista\Valuation\StructType\SuccessType',
            'ResponseType' => 'Autovista\Valuation\StructType\ResponseType',
            'StatisticsType' => 'Autovista\Valuation\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\Valuation\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\Valuation\StructType\ETGHeaderType',
            'ValuationAmountType' => 'Autovista\Valuation\StructType\ValuationAmountType',
            'ValuationType' => 'Autovista\Valuation\StructType\ValuationType',
            'OptionType' => 'Autovista\Valuation\StructType\OptionType',
            'ValueAddedItemType' => 'Autovista\Valuation\StructType\ValueAddedItemType',
            'DevaluationItemType' => 'Autovista\Valuation\StructType\DevaluationItemType',
            'ConsumerValuationAmountType' => 'Autovista\Valuation\StructType\ConsumerValuationAmountType',
            'AdditionalAdjustmentType' => 'Autovista\Valuation\StructType\AdditionalAdjustmentType',
            'RoadTaxAdjustmentType' => 'Autovista\Valuation\StructType\RoadTaxAdjustmentType',
            'AdjustmentType' => 'Autovista\Valuation\StructType\AdjustmentType',
            'InternalMarketAdjustmentType' => 'Autovista\Valuation\StructType\InternalMarketAdjustmentType',
            'RegionalMarketAdjustmentType' => 'Autovista\Valuation\StructType\RegionalMarketAdjustmentType',
            'OwnerAdjustmentType' => 'Autovista\Valuation\StructType\OwnerAdjustmentType',
            'DeliveryAdjustmentType' => 'Autovista\Valuation\StructType\DeliveryAdjustmentType',
            'ConditionAdjustmentType' => 'Autovista\Valuation\StructType\ConditionAdjustmentType',
            'DamageAdjustmentType' => 'Autovista\Valuation\StructType\DamageAdjustmentType',
            'DamageRepairCostAdjustmentType' => 'Autovista\Valuation\StructType\DamageRepairCostAdjustmentType',
            'UsageAdjustmentType' => 'Autovista\Valuation\StructType\UsageAdjustmentType',
            'TyreAdjustmentType' => 'Autovista\Valuation\StructType\TyreAdjustmentType',
            'InspectionAdjustmentType' => 'Autovista\Valuation\StructType\InspectionAdjustmentType',
            'EmissionAdjustmentType' => 'Autovista\Valuation\StructType\EmissionAdjustmentType',
            'ServiceHistoryAdjustmentType' => 'Autovista\Valuation\StructType\ServiceHistoryAdjustmentType',
            'ColorAdjustmentType' => 'Autovista\Valuation\StructType\ColorAdjustmentType',
            'DirectImportAdjustmentType' => 'Autovista\Valuation\StructType\DirectImportAdjustmentType',
            'ArrayOfEquipment' => 'Autovista\Valuation\StructType\ArrayOfEquipment',
            'ArrayOfValueAddedItem' => 'Autovista\Valuation\StructType\ArrayOfValueAddedItem',
            'ArrayOfDevaluationItem' => 'Autovista\Valuation\StructType\ArrayOfDevaluationItem',
            'ETGversionInformationType' => 'Autovista\Valuation\StructType\ETGversionInformationType',
            'ErrorType' => 'Autovista\Valuation\StructType\ErrorType',
            'GetValuation' => 'Autovista\Valuation\StructType\GetValuation',
            'GetVersion' => 'Autovista\Valuation\StructType\GetVersion',
            'GetVersionResponse' => 'Autovista\Valuation\StructType\GetVersionResponse',
            'GetValuationResponse' => 'Autovista\Valuation\StructType\GetValuationResponse',
        );
    }
}
