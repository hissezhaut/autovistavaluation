<?php

namespace Autovista\Valuation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginDataType StructType
 * @subpackage Structs
 */
class LoginDataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique user name
     * @var string
     */
    public $Name;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - documentation: User password
     * @var string
     */
    public $Password;
    /**
     * The ReturnSecurityToken
     * Meta informations extracted from the WSDL
     * - documentation: If set to true, SecurityToken and corresponding TimeToLive will be returned
     * - minOccurs: 0
     * @var boolean
     */
    public $ReturnSecurityToken;
    /**
     * Constructor method for LoginDataType
     * @uses LoginDataType::setName()
     * @uses LoginDataType::setPassword()
     * @uses LoginDataType::setReturnSecurityToken()
     * @param string $name
     * @param string $password
     * @param boolean $returnSecurityToken
     */
    public function __construct($name = null, $password = null, $returnSecurityToken = null)
    {
        $this
            ->setName($name)
            ->setPassword($password)
            ->setReturnSecurityToken($returnSecurityToken);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Autovista\Valuation\StructType\LoginDataType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Autovista\Valuation\StructType\LoginDataType
     */
    public function setPassword($password = null)
    {
        $this->Password = $password;
        return $this;
    }
    /**
     * Get ReturnSecurityToken value
     * @return boolean|null
     */
    public function getReturnSecurityToken()
    {
        return $this->ReturnSecurityToken;
    }
    /**
     * Set ReturnSecurityToken value
     * @param boolean $returnSecurityToken
     * @return \Autovista\Valuation\StructType\LoginDataType
     */
    public function setReturnSecurityToken($returnSecurityToken = null)
    {
        $this->ReturnSecurityToken = $returnSecurityToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Valuation\StructType\LoginDataType
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
