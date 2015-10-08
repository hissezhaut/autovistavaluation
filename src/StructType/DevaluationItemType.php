<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DevaluationItemType StructType
 * @subpackage Structs
 */
class DevaluationItemType extends AbstractStructBase
{
    /**
     * The CorrectionCode
     * @var string
     */
    public $CorrectionCode;
    /**
     * The DevaluationAmount
     * @var double
     */
    public $DevaluationAmount;
    /**
     * The SubtractInRetail
     * Meta informations extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var boolean
     */
    public $SubtractInRetail;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationAmountType
     */
    public $Valuation;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This is an ID assigned by the client application to reference purposes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * Constructor method for DevaluationItemType
     * @uses DevaluationItemType::setCorrectionCode()
     * @uses DevaluationItemType::setDevaluationAmount()
     * @uses DevaluationItemType::setSubtractInRetail()
     * @uses DevaluationItemType::setValuation()
     * @uses DevaluationItemType::setItemID()
     * @param string $correctionCode
     * @param double $devaluationAmount
     * @param boolean $subtractInRetail
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     * @param string $itemID
     */
    public function __construct($correctionCode = null, $devaluationAmount = null, $subtractInRetail = true, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null, $itemID = null)
    {
        $this
            ->setCorrectionCode($correctionCode)
            ->setDevaluationAmount($devaluationAmount)
            ->setSubtractInRetail($subtractInRetail)
            ->setValuation($valuation)
            ->setItemID($itemID);
    }
    /**
     * Get CorrectionCode value
     * @return string|null
     */
    public function getCorrectionCode()
    {
        return $this->CorrectionCode;
    }
    /**
     * Set CorrectionCode value
     * @uses \Autovista\Valuation\EnumType\ETGdevaluationCodeType::valueIsValid()
     * @uses \Autovista\Valuation\EnumType\ETGdevaluationCodeType::getValidValues()
     * @param string $correctionCode
     * @return \Autovista\Valuation\StructType\DevaluationItemType
     */
    public function setCorrectionCode($correctionCode = null)
    {
        if (!\Autovista\Valuation\EnumType\ETGdevaluationCodeType::valueIsValid($correctionCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $correctionCode, implode(', ', \Autovista\Valuation\EnumType\ETGdevaluationCodeType::getValidValues())), __LINE__);
        }
        $this->CorrectionCode = $correctionCode;
        return $this;
    }
    /**
     * Get DevaluationAmount value
     * @return double|null
     */
    public function getDevaluationAmount()
    {
        return $this->DevaluationAmount;
    }
    /**
     * Set DevaluationAmount value
     * @param double $devaluationAmount
     * @return \Autovista\Valuation\StructType\DevaluationItemType
     */
    public function setDevaluationAmount($devaluationAmount = null)
    {
        $this->DevaluationAmount = $devaluationAmount;
        return $this;
    }
    /**
     * Get SubtractInRetail value
     * @return boolean|null
     */
    public function getSubtractInRetail()
    {
        return $this->SubtractInRetail;
    }
    /**
     * Set SubtractInRetail value
     * @param boolean $subtractInRetail
     * @return \Autovista\Valuation\StructType\DevaluationItemType
     */
    public function setSubtractInRetail($subtractInRetail = true)
    {
        $this->SubtractInRetail = $subtractInRetail;
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
     * @return \Autovista\Valuation\StructType\DevaluationItemType
     */
    public function setValuation(\Autovista\Valuation\StructType\ValuationAmountType $valuation = null)
    {
        $this->Valuation = $valuation;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \Autovista\Valuation\StructType\DevaluationItemType
     */
    public function setItemID($itemID = null)
    {
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\DevaluationItemType
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
