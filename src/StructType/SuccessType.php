<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuccessType StructType
 * @subpackage Structs
 */
class SuccessType extends AbstractStructBase
{
    /**
     * The ETGWarning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
     * @var \Autovista\Valuation\StructType\ETGStatus
     */
    public $ETGWarning;
    /**
     * Constructor method for SuccessType
     * @uses SuccessType::setETGWarning()
     * @param \Autovista\Valuation\StructType\ETGStatus $eTGWarning
     */
    public function __construct(\Autovista\Valuation\StructType\ETGStatus $eTGWarning = null)
    {
        $this
            ->setETGWarning($eTGWarning);
    }
    /**
     * Get ETGWarning value
     * @return \Autovista\Valuation\StructType\ETGStatus|null
     */
    public function getETGWarning()
    {
        return $this->ETGWarning;
    }
    /**
     * Set ETGWarning value
     * @param \Autovista\Valuation\StructType\ETGStatus $eTGWarning
     * @return \Autovista\Valuation\StructType\SuccessType
     */
    public function setETGWarning(\Autovista\Valuation\StructType\ETGStatus $eTGWarning = null)
    {
        $this->ETGWarning = $eTGWarning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\SuccessType
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
