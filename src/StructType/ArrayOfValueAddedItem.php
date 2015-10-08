<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfValueAddedItem StructType
 * @subpackage Structs
 */
class ArrayOfValueAddedItem extends AbstractStructBase
{
    /**
     * The ValueAddedItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValueAddedItemType
     */
    public $ValueAddedItem;
    /**
     * The TotalValueAddedItemValuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalValueAddedItemValuation;
    /**
     * Constructor method for ArrayOfValueAddedItem
     * @uses ArrayOfValueAddedItem::setValueAddedItem()
     * @uses ArrayOfValueAddedItem::setTotalValueAddedItemValuation()
     * @param \Autovista\Valuation\StructType\ValueAddedItemType $valueAddedItem
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalValueAddedItemValuation
     */
    public function __construct(\Autovista\Valuation\StructType\ValueAddedItemType $valueAddedItem = null, \Autovista\Valuation\StructType\ValuationAmountType $totalValueAddedItemValuation = null)
    {
        $this
            ->setValueAddedItem($valueAddedItem)
            ->setTotalValueAddedItemValuation($totalValueAddedItemValuation);
    }
    /**
     * Get ValueAddedItem value
     * @return \Autovista\Valuation\StructType\ValueAddedItemType|null
     */
    public function getValueAddedItem()
    {
        return $this->ValueAddedItem;
    }
    /**
     * Set ValueAddedItem value
     * @param \Autovista\Valuation\StructType\ValueAddedItemType $valueAddedItem
     * @return \Autovista\Valuation\StructType\ArrayOfValueAddedItem
     */
    public function setValueAddedItem(\Autovista\Valuation\StructType\ValueAddedItemType $valueAddedItem = null)
    {
        $this->ValueAddedItem = $valueAddedItem;
        return $this;
    }
    /**
     * Get TotalValueAddedItemValuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalValueAddedItemValuation()
    {
        return $this->TotalValueAddedItemValuation;
    }
    /**
     * Set TotalValueAddedItemValuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalValueAddedItemValuation
     * @return \Autovista\Valuation\StructType\ArrayOfValueAddedItem
     */
    public function setTotalValueAddedItemValuation(\Autovista\Valuation\StructType\ValuationAmountType $totalValueAddedItemValuation = null)
    {
        $this->TotalValueAddedItemValuation = $totalValueAddedItemValuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ArrayOfValueAddedItem
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
