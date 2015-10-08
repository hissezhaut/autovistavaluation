<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginatorType StructType
 * @subpackage Structs
 */
class OriginatorType extends AbstractStructBase
{
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique user ID / user signature
     * @var string
     */
    public $Signature;
    /**
     * The LoginData
     * Meta informations extracted from the WSDL
     * - documentation: User authentication data
     * @var \Autovista\Valuation\StructType\LoginDataType
     */
    public $LoginData;
    /**
     * The SecurityToken
     * Meta informations extracted from the WSDL
     * - documentation: Security token to be used instead of username/password pair
     * @var string
     */
    public $SecurityToken;
    /**
     * Constructor method for OriginatorType
     * @uses OriginatorType::setSignature()
     * @uses OriginatorType::setLoginData()
     * @uses OriginatorType::setSecurityToken()
     * @param string $signature
     * @param \Autovista\Valuation\StructType\LoginDataType $loginData
     * @param string $securityToken
     */
    public function __construct($signature = null, \Autovista\Valuation\StructType\LoginDataType $loginData = null, $securityToken = null)
    {
        $this
            ->setSignature($signature)
            ->setLoginData($loginData)
            ->setSecurityToken($securityToken);
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \Autovista\Valuation\StructType\OriginatorType
     */
    public function setSignature($signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get LoginData value
     * @return \Autovista\Valuation\StructType\LoginDataType|null
     */
    public function getLoginData()
    {
        return $this->LoginData;
    }
    /**
     * Set LoginData value
     * @param \Autovista\Valuation\StructType\LoginDataType $loginData
     * @return \Autovista\Valuation\StructType\OriginatorType
     */
    public function setLoginData(\Autovista\Valuation\StructType\LoginDataType $loginData = null)
    {
        $this->LoginData = $loginData;
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
     * @return \Autovista\Valuation\StructType\OriginatorType
     */
    public function setSecurityToken($securityToken = null)
    {
        $this->SecurityToken = $securityToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\OriginatorType
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
