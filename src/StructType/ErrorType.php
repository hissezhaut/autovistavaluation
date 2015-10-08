<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErrorCode;
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Severity;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * The ErrorDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorDetail;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setSeverity()
     * @uses ErrorType::setErrorMessage()
     * @uses ErrorType::setErrorDetail()
     * @param int $errorCode
     * @param string $severity
     * @param string $errorMessage
     * @param string $errorDetail
     */
    public function __construct($errorCode = null, $severity = null, $errorMessage = null, $errorDetail = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setSeverity($severity)
            ->setErrorMessage($errorMessage)
            ->setErrorDetail($errorDetail);
    }
    /**
     * Get ErrorCode value
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Autovista\Valuation\StructType\ErrorType
     */
    public function setErrorCode($errorCode = null)
    {
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get Severity value
     * @return string
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \Autovista\Valuation\EnumType\ETGmessageSeverityLevelType::valueIsValid()
     * @uses
     * \Autovista\Valuation\EnumType\ETGmessageSeverityLevelType::getValidValues()
     * @param string $severity
     * @return \Autovista\Valuation\StructType\ErrorType
     */
    public function setSeverity($severity = null)
    {
        if (!\Autovista\Valuation\EnumType\ETGmessageSeverityLevelType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \Autovista\Valuation\EnumType\ETGmessageSeverityLevelType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Autovista\Valuation\StructType\ErrorType
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get ErrorDetail value
     * @return string|null
     */
    public function getErrorDetail()
    {
        return $this->ErrorDetail;
    }
    /**
     * Set ErrorDetail value
     * @param string $errorDetail
     * @return \Autovista\Valuation\StructType\ErrorType
     */
    public function setErrorDetail($errorDetail = null)
    {
        $this->ErrorDetail = $errorDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ErrorType
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
