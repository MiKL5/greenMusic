<?php

namespace Container9iNnm4W;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1039f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8d8bf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese75af = [
        
    ];

    public function getConnection()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getConnection', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getMetadataFactory', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getExpressionBuilder', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'beginTransaction', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getCache', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'transactional', array('func' => $func), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'commit', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->commit();
    }

    public function rollback()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'rollback', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getClassMetadata', array('className' => $className), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'createQuery', array('dql' => $dql), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'createNamedQuery', array('name' => $name), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'createQueryBuilder', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'flush', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'clear', array('entityName' => $entityName), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->clear($entityName);
    }

    public function close()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'close', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->close();
    }

    public function persist($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'persist', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'remove', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'refresh', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'detach', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'merge', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'contains', array('entity' => $entity), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getEventManager', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getConfiguration', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'isOpen', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getUnitOfWork', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getProxyFactory', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'initializeObject', array('obj' => $obj), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'getFilters', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'isFiltersStateClean', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'hasFilters', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return $this->valueHolder1039f->hasFilters();
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

        $instance->initializer8d8bf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1039f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1039f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1039f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__get', ['name' => $name], $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        if (isset(self::$publicPropertiese75af[$name])) {
            return $this->valueHolder1039f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1039f;

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

        $targetObject = $this->valueHolder1039f;
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
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1039f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1039f;
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
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__isset', array('name' => $name), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1039f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1039f;
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
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__unset', array('name' => $name), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1039f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1039f;
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
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__clone', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        $this->valueHolder1039f = clone $this->valueHolder1039f;
    }

    public function __sleep()
    {
        $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, '__sleep', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;

        return array('valueHolder1039f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8d8bf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8d8bf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8d8bf && ($this->initializer8d8bf->__invoke($valueHolder1039f, $this, 'initializeProxy', array(), $this->initializer8d8bf) || 1) && $this->valueHolder1039f = $valueHolder1039f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1039f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1039f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
