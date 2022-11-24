<?php

namespace Container5JWiPLO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdb9aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer827e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1cf4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getConnection', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getMetadataFactory', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getExpressionBuilder', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'beginTransaction', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getCache', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'transactional', array('func' => $func), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'commit', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->commit();
    }

    public function rollback()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'rollback', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getClassMetadata', array('className' => $className), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'createQuery', array('dql' => $dql), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'createNamedQuery', array('name' => $name), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'createQueryBuilder', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'flush', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'clear', array('entityName' => $entityName), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->clear($entityName);
    }

    public function close()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'close', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->close();
    }

    public function persist($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'persist', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'remove', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'refresh', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'detach', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'merge', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'contains', array('entity' => $entity), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getEventManager', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getConfiguration', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'isOpen', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getUnitOfWork', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getProxyFactory', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'initializeObject', array('obj' => $obj), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'getFilters', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'isFiltersStateClean', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'hasFilters', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return $this->valueHolderdb9aa->hasFilters();
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

        $instance->initializer827e0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdb9aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdb9aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdb9aa->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__get', ['name' => $name], $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        if (isset(self::$publicPropertiesb1cf4[$name])) {
            return $this->valueHolderdb9aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb9aa;

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

        $targetObject = $this->valueHolderdb9aa;
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
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb9aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdb9aa;
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
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__isset', array('name' => $name), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb9aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdb9aa;
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
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__unset', array('name' => $name), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb9aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdb9aa;
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
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__clone', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        $this->valueHolderdb9aa = clone $this->valueHolderdb9aa;
    }

    public function __sleep()
    {
        $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, '__sleep', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;

        return array('valueHolderdb9aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer827e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer827e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer827e0 && ($this->initializer827e0->__invoke($valueHolderdb9aa, $this, 'initializeProxy', array(), $this->initializer827e0) || 1) && $this->valueHolderdb9aa = $valueHolderdb9aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdb9aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdb9aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
