<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/valuation.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/valuation.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Autovista\Valuation\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Autovista\Valuation\ServiceType\Get($options);
$get->setSoapHeaderETGHeader($ETGHeader);
/**
 * Sample call for GetVersion operation/method
 */
if ($get->GetVersion(new \Autovista\Valuation\StructType\GetVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetValuation operation/method
 */
if ($get->GetValuation(new \Autovista\Valuation\StructType\GetValuation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
