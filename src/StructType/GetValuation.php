<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValuation StructType
 * @subpackage Structs
 */
class GetValuation extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Valuation\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The Valuation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Valuation\StructType\ValuationType
     */
    public $Valuation;
    /**
     * Constructor method for GetValuation
     * @uses GetValuation::setSettings()
     * @uses GetValuation::setValuation()
     * @param \Autovista\Valuation\StructType\ETGsettingType $settings
     * @param \Autovista\Valuation\StructType\ValuationType $valuation
     */
    public function __construct(\Autovista\Valuation\StructType\ETGsettingType $settings = null, \Autovista\Valuation\StructType\ValuationType $valuation = null)
    {
        $this
            ->setSettings($settings)
            ->setValuation($valuation);
    }
    /**
     * Get Settings value
     * @return \Autovista\Valuation\StructType\ETGsettingType|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Valuation\StructType\ETGsettingType $settings
     * @return \Autovista\Valuation\StructType\GetValuation
     */
    public function setSettings(\Autovista\Valuation\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get Valuation value
     * @return \Autovista\Valuation\StructType\ValuationType|null
     */
    public function getValuation()
    {
        return $this->Valuation;
    }
    /**
     * Set Valuation value
     * @param \Autovista\Valuation\StructType\ValuationType $valuation
     * @return \Autovista\Valuation\StructType\GetValuation
     */
    public function setValuation(\Autovista\Valuation\StructType\ValuationType $valuation = null)
    {
        $this->Valuation = $valuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\GetValuation
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
