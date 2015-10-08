<?php

namespace Autovista\Valuation\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\Valuation\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\Valuation\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'http://www.eurotax.com/webservices/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/webservices/
     * - SOAPHeaderTypes : \Autovista\Valuation\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Valuation\StructType\GetVersion $parameters
     * @return \Autovista\Valuation\StructType\GetVersionResponse|bool
     */
    public function GetVersion(\Autovista\Valuation\StructType\GetVersion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetValuation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/webservices/
     * - SOAPHeaderTypes : \Autovista\Valuation\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Valuation\StructType\GetValuation $parameters
     * @return \Autovista\Valuation\StructType\GetValuationResponse|bool
     */
    public function GetValuation(\Autovista\Valuation\StructType\GetValuation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetValuation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\Valuation\StructType\GetValuationResponse|\Autovista\Valuation\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
