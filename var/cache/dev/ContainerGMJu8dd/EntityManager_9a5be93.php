<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderca0cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere8d36 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7b94 = [
        
    ];

    public function getConnection()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getConnection', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getMetadataFactory', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getExpressionBuilder', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'beginTransaction', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getCache', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'transactional', array('func' => $func), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'commit', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->commit();
    }

    public function rollback()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'rollback', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getClassMetadata', array('className' => $className), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'createQuery', array('dql' => $dql), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'createNamedQuery', array('name' => $name), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'createQueryBuilder', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'flush', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'clear', array('entityName' => $entityName), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->clear($entityName);
    }

    public function close()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'close', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->close();
    }

    public function persist($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'persist', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'remove', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'refresh', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'detach', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'merge', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'contains', array('entity' => $entity), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getEventManager', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getConfiguration', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'isOpen', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getUnitOfWork', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getProxyFactory', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'initializeObject', array('obj' => $obj), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'getFilters', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'isFiltersStateClean', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'hasFilters', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return $this->valueHolderca0cc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere8d36 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderca0cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderca0cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderca0cc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__get', ['name' => $name], $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        if (isset(self::$publicPropertiesc7b94[$name])) {
            return $this->valueHolderca0cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca0cc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca0cc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca0cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca0cc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__isset', array('name' => $name), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca0cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderca0cc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__unset', array('name' => $name), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca0cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderca0cc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__clone', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        $this->valueHolderca0cc = clone $this->valueHolderca0cc;
    }

    public function __sleep()
    {
        $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, '__sleep', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;

        return array('valueHolderca0cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere8d36 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere8d36;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere8d36 && ($this->initializere8d36->__invoke($valueHolderca0cc, $this, 'initializeProxy', array(), $this->initializere8d36) || 1) && $this->valueHolderca0cc = $valueHolderca0cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca0cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca0cc;
    }
}
