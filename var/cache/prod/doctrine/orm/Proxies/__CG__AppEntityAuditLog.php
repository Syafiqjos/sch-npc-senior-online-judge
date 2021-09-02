<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AuditLog extends \App\Entity\AuditLog implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'logid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'logtime', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'user', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'datatype', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'dataid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'action', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'extrainfo'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'logid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'logtime', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'user', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'datatype', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'dataid', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'action', '' . "\0" . 'App\\Entity\\AuditLog' . "\0" . 'extrainfo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AuditLog $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getLogid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getLogid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogid', []);

        return parent::getLogid();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogtime($logtime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogtime', [$logtime]);

        return parent::setLogtime($logtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogtime', []);

        return parent::getLogtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setCid($cid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCid', [$cid]);

        return parent::setCid($cid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', []);

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatatype($datatype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatatype', [$datatype]);

        return parent::setDatatype($datatype);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatatype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatatype', []);

        return parent::getDatatype();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataid($dataid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataid', [$dataid]);

        return parent::setDataid($dataid);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataid', []);

        return parent::getDataid();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtrainfo($extrainfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtrainfo', [$extrainfo]);

        return parent::setExtrainfo($extrainfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtrainfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtrainfo', []);

        return parent::getExtrainfo();
    }

}
