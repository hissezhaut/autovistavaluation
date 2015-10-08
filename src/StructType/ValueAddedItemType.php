<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueAddedItemType StructType
 * @subpackage Structs
 */
class ValueAddedItemType extends AbstractStructBase
{
    /**
     * The CorrectionCode
     * @var string
     */
    public $CorrectionCode;
    /**
     * The NewPrice
     * @var double
     */
    public $NewPrice;
    /**
     * The InstallationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $InstallationDate;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $Mileage;
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
     * Constructor method for ValueAddedItemType
     * @uses ValueAddedItemType::setCorrectionCode()
     * @uses ValueAddedItemType::setNewPrice()
     * @uses ValueAddedItemType::setInstallationDate()
     * @uses ValueAddedItemType::setMileage()
     * @uses ValueAddedItemType::setValuation()
     * @uses ValueAddedItemType::setItemID()
     * @param string $correctionCode
     * @param double $newPrice
     * @param \Autovista\Valuation\StructType\ETGdateType $installationDate
     * @param positiveInteger $mileage
     * @param \Autovista\Valuation\StructType\ValuationAmountType $valuation
     * @param string $itemID
     */
    public function __construct($correctionCode = null, $newPrice = null, \Autovista\Valuation\StructType\ETGdateType $installationDate = null, $mileage = null, \Autovista\Valuation\StructType\ValuationAmountType $valuation = null, $itemID = null)
    {
        $this
            ->setCorrectionCode($correctionCode)
            ->setNewPrice($newPrice)
            ->setInstallationDate($installationDate)
            ->setMileage($mileage)
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
     * @uses \Autovista\Valuation\EnumType\ETGvalueAddedCodeType::valueIsValid()
     * @uses \Autovista\Valuation\EnumType\ETGvalueAddedCodeType::getValidValues()
     * @param string $correctionCode
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
     */
    public function setCorrectionCode($correctionCode = null)
    {
        if (!\Autovista\Valuation\EnumType\ETGvalueAddedCodeType::valueIsValid($correctionCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $correctionCode, implode(', ', \Autovista\Valuation\EnumType\ETGvalueAddedCodeType::getValidValues())), __LINE__);
        }
        $this->CorrectionCode = $correctionCode;
        return $this;
    }
    /**
     * Get NewPrice value
     * @return double|null
     */
    public function getNewPrice()
    {
        return $this->NewPrice;
    }
    /**
     * Set NewPrice value
     * @param double $newPrice
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
     */
    public function setNewPrice($newPrice = null)
    {
        $this->NewPrice = $newPrice;
        return $this;
    }
    /**
     * Get InstallationDate value
     * @return \Autovista\Valuation\StructType\ETGdateType|null
     */
    public function getInstallationDate()
    {
        return $this->InstallationDate;
    }
    /**
     * Set InstallationDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $installationDate
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
     */
    public function setInstallationDate(\Autovista\Valuation\StructType\ETGdateType $installationDate = null)
    {
        $this->InstallationDate = $installationDate;
        return $this;
    }
    /**
     * Get Mileage value
     * @return positiveInteger|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param positiveInteger $mileage
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
     */
    public function setMileage($mileage = null)
    {
        $this->Mileage = $mileage;
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
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
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
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
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
     * @return \Autovista\Valuation\StructType\ValueAddedItemType
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
