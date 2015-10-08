<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGversionInformationType StructType
 * @subpackage Structs
 */
class ETGversionInformationType extends AbstractStructBase
{
    /**
     * The ServiceVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServiceVersion;
    /**
     * The IntelligenceVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $IntelligenceVersion;
    /**
     * The DataVersionDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Common data type for date representation
     * @var \Autovista\Valuation\StructType\ETGdateType
     */
    public $DataVersionDate;
    /**
     * Constructor method for ETGversionInformationType
     * @uses ETGversionInformationType::setServiceVersion()
     * @uses ETGversionInformationType::setIntelligenceVersion()
     * @uses ETGversionInformationType::setDataVersionDate()
     * @param string $serviceVersion
     * @param string $intelligenceVersion
     * @param \Autovista\Valuation\StructType\ETGdateType $dataVersionDate
     */
    public function __construct($serviceVersion = null, $intelligenceVersion = null, \Autovista\Valuation\StructType\ETGdateType $dataVersionDate = null)
    {
        $this
            ->setServiceVersion($serviceVersion)
            ->setIntelligenceVersion($intelligenceVersion)
            ->setDataVersionDate($dataVersionDate);
    }
    /**
     * Get ServiceVersion value
     * @return string
     */
    public function getServiceVersion()
    {
        return $this->ServiceVersion;
    }
    /**
     * Set ServiceVersion value
     * @param string $serviceVersion
     * @return \Autovista\Valuation\StructType\ETGversionInformationType
     */
    public function setServiceVersion($serviceVersion = null)
    {
        $this->ServiceVersion = $serviceVersion;
        return $this;
    }
    /**
     * Get IntelligenceVersion value
     * @return string
     */
    public function getIntelligenceVersion()
    {
        return $this->IntelligenceVersion;
    }
    /**
     * Set IntelligenceVersion value
     * @param string $intelligenceVersion
     * @return \Autovista\Valuation\StructType\ETGversionInformationType
     */
    public function setIntelligenceVersion($intelligenceVersion = null)
    {
        $this->IntelligenceVersion = $intelligenceVersion;
        return $this;
    }
    /**
     * Get DataVersionDate value
     * @return \Autovista\Valuation\StructType\ETGdateType
     */
    public function getDataVersionDate()
    {
        return $this->DataVersionDate;
    }
    /**
     * Set DataVersionDate value
     * @param \Autovista\Valuation\StructType\ETGdateType $dataVersionDate
     * @return \Autovista\Valuation\StructType\ETGversionInformationType
     */
    public function setDataVersionDate(\Autovista\Valuation\StructType\ETGdateType $dataVersionDate = null)
    {
        $this->DataVersionDate = $dataVersionDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ETGversionInformationType
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
