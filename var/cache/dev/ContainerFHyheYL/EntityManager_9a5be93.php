<?php

namespace ContainerFHyheYL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc09a6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerab383 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40006 = [
        
    ];

    public function getConnection()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getConnection', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getMetadataFactory', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getExpressionBuilder', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'beginTransaction', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getCache', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getCache();
    }

    public function transactional($func)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'transactional', array('func' => $func), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'wrapInTransaction', array('func' => $func), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'commit', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->commit();
    }

    public function rollback()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'rollback', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getClassMetadata', array('className' => $className), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'createQuery', array('dql' => $dql), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'createNamedQuery', array('name' => $name), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'createQueryBuilder', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'flush', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'clear', array('entityName' => $entityName), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->clear($entityName);
    }

    public function close()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'close', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->close();
    }

    public function persist($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'persist', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'remove', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'refresh', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'detach', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'merge', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getRepository', array('entityName' => $entityName), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'contains', array('entity' => $entity), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getEventManager', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getConfiguration', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'isOpen', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getUnitOfWork', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getProxyFactory', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'initializeObject', array('obj' => $obj), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'getFilters', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'isFiltersStateClean', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'hasFilters', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return $this->valueHolderc09a6->hasFilters();
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

        $instance->initializerab383 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc09a6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc09a6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc09a6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__get', ['name' => $name], $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        if (isset(self::$publicProperties40006[$name])) {
            return $this->valueHolderc09a6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc09a6;

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

        $targetObject = $this->valueHolderc09a6;
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
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc09a6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc09a6;
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
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__isset', array('name' => $name), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc09a6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc09a6;
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
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__unset', array('name' => $name), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc09a6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc09a6;
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
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__clone', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        $this->valueHolderc09a6 = clone $this->valueHolderc09a6;
    }

    public function __sleep()
    {
        $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, '__sleep', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;

        return array('valueHolderc09a6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerab383 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerab383;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerab383 && ($this->initializerab383->__invoke($valueHolderc09a6, $this, 'initializeProxy', array(), $this->initializerab383) || 1) && $this->valueHolderc09a6 = $valueHolderc09a6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc09a6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc09a6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
