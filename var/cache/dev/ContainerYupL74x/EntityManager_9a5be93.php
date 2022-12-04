<?php

namespace ContainerYupL74x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60a5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20022 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d50e = [
        
    ];

    public function getConnection()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getConnection', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getMetadataFactory', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getExpressionBuilder', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'beginTransaction', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getCache', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'transactional', array('func' => $func), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'commit', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->commit();
    }

    public function rollback()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'rollback', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getClassMetadata', array('className' => $className), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'createQuery', array('dql' => $dql), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'createNamedQuery', array('name' => $name), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'createQueryBuilder', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'flush', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'clear', array('entityName' => $entityName), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->clear($entityName);
    }

    public function close()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'close', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->close();
    }

    public function persist($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'persist', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'remove', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'refresh', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'detach', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'merge', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'contains', array('entity' => $entity), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getEventManager', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getConfiguration', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'isOpen', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getUnitOfWork', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getProxyFactory', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'initializeObject', array('obj' => $obj), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'getFilters', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'isFiltersStateClean', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'hasFilters', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return $this->valueHolder60a5c->hasFilters();
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

        $instance->initializer20022 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder60a5c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60a5c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60a5c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__get', ['name' => $name], $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        if (isset(self::$publicProperties3d50e[$name])) {
            return $this->valueHolder60a5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60a5c;

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

        $targetObject = $this->valueHolder60a5c;
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
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60a5c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60a5c;
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
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__isset', array('name' => $name), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60a5c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60a5c;
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
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__unset', array('name' => $name), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60a5c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60a5c;
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
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__clone', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        $this->valueHolder60a5c = clone $this->valueHolder60a5c;
    }

    public function __sleep()
    {
        $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, '__sleep', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;

        return array('valueHolder60a5c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20022 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20022;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20022 && ($this->initializer20022->__invoke($valueHolder60a5c, $this, 'initializeProxy', array(), $this->initializer20022) || 1) && $this->valueHolder60a5c = $valueHolder60a5c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60a5c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60a5c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
