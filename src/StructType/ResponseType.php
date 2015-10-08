<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseType StructType
 * @subpackage Structs
 */
class ResponseType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique ID that the ETG service has assigned to the order originated by the client request. In case of asynchronous request processing can be used by the client for related request identification.
     * @var string
     */
    public $OrderID;
    /**
     * The VersionResponse
     * Meta informations extracted from the WSDL
     * - documentation: Version of global ETG services specification used to construct the response
     * - minOccurs: 0
     * @var string
     */
    public $VersionResponse;
    /**
     * The Statistics
     * @var \Autovista\Valuation\StructType\StatisticsType
     */
    public $Statistics;
    /**
     * The SecurityToken
     * Meta informations extracted from the WSDL
     * - documentation: Reurned security token to be used instead of username/password pair for further calls
     * - minOccurs: 0
     * @var string
     */
    public $SecurityToken;
    /**
     * The TimeToLive
     * Meta informations extracted from the WSDL
     * - documentation: Validity period of the reurned security token
     * - minOccurs: 0
     * @var dateTime
     */
    public $TimeToLive;
    /**
     * The Failure
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the processing of this request has failed, and provides error and optional warning messages that arose during the processing.
     * @var \Autovista\Valuation\StructType\FailureType
     */
    public $Failure;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the processing of this request has succeeded; may provide non-fatal warning messages that arose during the processing.
     * @var \Autovista\Valuation\StructType\SuccessType
     */
    public $Success;
    /**
     * Constructor method for ResponseType
     * @uses ResponseType::setOrderID()
     * @uses ResponseType::setVersionResponse()
     * @uses ResponseType::setStatistics()
     * @uses ResponseType::setSecurityToken()
     * @uses ResponseType::setTimeToLive()
     * @uses ResponseType::setFailure()
     * @uses ResponseType::setSuccess()
     * @param string $orderID
     * @param string $versionResponse
     * @param \Autovista\Valuation\StructType\StatisticsType $statistics
     * @param string $securityToken
     * @param dateTime $timeToLive
     * @param \Autovista\Valuation\StructType\FailureType $failure
     * @param \Autovista\Valuation\StructType\SuccessType $success
     */
    public function __construct($orderID = null, $versionResponse = null, \Autovista\Valuation\StructType\StatisticsType $statistics = null, $securityToken = null, $timeToLive = null, \Autovista\Valuation\StructType\FailureType $failure = null, \Autovista\Valuation\StructType\SuccessType $success = null)
    {
        $this
            ->setOrderID($orderID)
            ->setVersionResponse($versionResponse)
            ->setStatistics($statistics)
            ->setSecurityToken($securityToken)
            ->setTimeToLive($timeToLive)
            ->setFailure($failure)
            ->setSuccess($success);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setOrderID($orderID = null)
    {
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Get VersionResponse value
     * @return string|null
     */
    public function getVersionResponse()
    {
        return $this->VersionResponse;
    }
    /**
     * Set VersionResponse value
     * @param string $versionResponse
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setVersionResponse($versionResponse = null)
    {
        $this->VersionResponse = $versionResponse;
        return $this;
    }
    /**
     * Get Statistics value
     * @return \Autovista\Valuation\StructType\StatisticsType|null
     */
    public function getStatistics()
    {
        return $this->Statistics;
    }
    /**
     * Set Statistics value
     * @param \Autovista\Valuation\StructType\StatisticsType $statistics
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setStatistics(\Autovista\Valuation\StructType\StatisticsType $statistics = null)
    {
        $this->Statistics = $statistics;
        return $this;
    }
    /**
     * Get SecurityToken value
     * @return string|null
     */
    public function getSecurityToken()
    {
        return $this->SecurityToken;
    }
    /**
     * Set SecurityToken value
     * @param string $securityToken
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setSecurityToken($securityToken = null)
    {
        $this->SecurityToken = $securityToken;
        return $this;
    }
    /**
     * Get TimeToLive value
     * @return dateTime|null
     */
    public function getTimeToLive()
    {
        return $this->TimeToLive;
    }
    /**
     * Set TimeToLive value
     * @param dateTime $timeToLive
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setTimeToLive($timeToLive = null)
    {
        $this->TimeToLive = $timeToLive;
        return $this;
    }
    /**
     * Get Failure value
     * @return \Autovista\Valuation\StructType\FailureType|null
     */
    public function getFailure()
    {
        return $this->Failure;
    }
    /**
     * Set Failure value
     * @param \Autovista\Valuation\StructType\FailureType $failure
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setFailure(\Autovista\Valuation\StructType\FailureType $failure = null)
    {
        $this->Failure = $failure;
        return $this;
    }
    /**
     * Get Success value
     * @return \Autovista\Valuation\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Autovista\Valuation\StructType\SuccessType $success
     * @return \Autovista\Valuation\StructType\ResponseType
     */
    public function setSuccess(\Autovista\Valuation\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\ResponseType
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
