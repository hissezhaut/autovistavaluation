<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersionResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: GetVersion Contains mandatory Setting element in request
 * @subpackage Structs
 */
class GetVersionResponse extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Valuation\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The VersionInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Valuation\StructType\ETGversionInformationType
     */
    public $VersionInformation;
    /**
     * Constructor method for GetVersionResponse
     * @uses GetVersionResponse::setSettings()
     * @uses GetVersionResponse::setVersionInformation()
     * @param \Autovista\Valuation\StructType\ETGsettingType $settings
     * @param \Autovista\Valuation\StructType\ETGversionInformationType
     * $versionInformation
     */
    public function __construct(\Autovista\Valuation\StructType\ETGsettingType $settings = null, \Autovista\Valuation\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this
            ->setSettings($settings)
            ->setVersionInformation($versionInformation);
    }
    /**
     * Get Settings value
     * @return \Autovista\Valuation\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Valuation\StructType\ETGsettingType $settings
     * @return \Autovista\Valuation\StructType\GetVersionResponse
     */
    public function setSettings(\Autovista\Valuation\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VersionInformation value
     * @return \Autovista\Valuation\StructType\ETGversionInformationType
     */
    public function getVersionInformation()
    {
        return $this->VersionInformation;
    }
    /**
     * Set VersionInformation value
     * @param \Autovista\Valuation\StructType\ETGversionInformationType
     * $versionInformation
     * @return \Autovista\Valuation\StructType\GetVersionResponse
     */
    public function setVersionInformation(\Autovista\Valuation\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this->VersionInformation = $versionInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\GetVersionResponse
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
