<?php

namespace Container9UcleKR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a931 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f614 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc8abd = [
        
    ];

    public function getConnection()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getConnection', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getMetadataFactory', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getExpressionBuilder', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'beginTransaction', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getCache', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'transactional', array('func' => $func), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'commit', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->commit();
    }

    public function rollback()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'rollback', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'createQuery', array('dql' => $dql), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'createQueryBuilder', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'flush', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'clear', array('entityName' => $entityName), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->clear($entityName);
    }

    public function close()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'close', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->close();
    }

    public function persist($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'persist', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'remove', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'refresh', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'detach', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'merge', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'contains', array('entity' => $entity), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getEventManager', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getConfiguration', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'isOpen', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getUnitOfWork', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getProxyFactory', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'getFilters', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'isFiltersStateClean', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'hasFilters', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return $this->valueHolder1a931->hasFilters();
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

        $instance->initializer9f614 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1a931) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a931 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a931->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__get', ['name' => $name], $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        if (isset(self::$publicPropertiesc8abd[$name])) {
            return $this->valueHolder1a931->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a931;

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

        $targetObject = $this->valueHolder1a931;
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
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a931;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a931;
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
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__isset', array('name' => $name), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a931;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a931;
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
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__unset', array('name' => $name), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a931;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a931;
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
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__clone', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        $this->valueHolder1a931 = clone $this->valueHolder1a931;
    }

    public function __sleep()
    {
        $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, '__sleep', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;

        return array('valueHolder1a931');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f614 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f614;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9f614 && ($this->initializer9f614->__invoke($valueHolder1a931, $this, 'initializeProxy', array(), $this->initializer9f614) || 1) && $this->valueHolder1a931 = $valueHolder1a931;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a931;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a931;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
