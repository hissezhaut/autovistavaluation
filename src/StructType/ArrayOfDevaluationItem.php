<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfDevaluationItem StructType
 * @subpackage Structs
 */
class ArrayOfDevaluationItem extends AbstractStructBase
{
    /**
     * The DevaluationItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\DevaluationItemType
     */
    public $DevaluationItem;
    /**
     * The TotalDevaluationItemValuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $TotalDevaluationItemValuation;
    /**
     * Constructor method for ArrayOfDevaluationItem
     * @uses ArrayOfDevaluationItem::setDevaluationItem()
     * @uses ArrayOfDevaluationItem::setTotalDevaluationItemValuation()
     * @param \Autovista\Valuation\StructType\DevaluationItemType $devaluationItem
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalDevaluationItemValuation
     */
    public function __construct(\Autovista\Valuation\StructType\DevaluationItemType $devaluationItem = null, \Autovista\Valuation\StructType\ValuationAmountType $totalDevaluationItemValuation = null)
    {
        $this
            ->setDevaluationItem($devaluationItem)
            ->setTotalDevaluationItemValuation($totalDevaluationItemValuation);
    }
    /**
     * Get DevaluationItem value
     * @return \Autovista\Valuation\StructType\DevaluationItemType|null
     */
    public function getDevaluationItem()
    {
        return $this->DevaluationItem;
    }
    /**
     * Set DevaluationItem value
     * @param \Autovista\Valuation\StructType\DevaluationItemType $devaluationItem
     * @return \Autovista\Valuation\StructType\ArrayOfDevaluationItem
     */
    public function setDevaluationItem(\Autovista\Valuation\StructType\DevaluationItemType $devaluationItem = null)
    {
        $this->DevaluationItem = $devaluationItem;
        return $this;
    }
    /**
     * Get TotalDevaluationItemValuation value
     * @return \Autovista\Valuation\StructType\ValuationAmountType|null
     */
    public function getTotalDevaluationItemValuation()
    {
        return $this->TotalDevaluationItemValuation;
    }
    /**
     * Set TotalDevaluationItemValuation value
     * @param \Autovista\Valuation\StructType\ValuationAmountType
     * $totalDevaluationItemValuation
     * @return \Autovista\Valuation\StructType\ArrayOfDevaluationItem
     */
    public function setTotalDevaluationItemValuation(\Autovista\Valuation\StructType\ValuationAmountType $totalDevaluationItemValuation = null)
    {
        $this->TotalDevaluationItemValuation = $totalDevaluationItemValuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ArrayOfDevaluationItem
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
