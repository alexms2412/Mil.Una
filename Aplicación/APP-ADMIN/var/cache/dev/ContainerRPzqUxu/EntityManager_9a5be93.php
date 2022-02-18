<?php

namespace ContainerRPzqUxu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3fc50 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer070a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb694f = [
        
    ];

    public function getConnection()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getConnection', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getMetadataFactory', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getExpressionBuilder', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'beginTransaction', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getCache', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getCache();
    }

    public function transactional($func)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'transactional', array('func' => $func), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'wrapInTransaction', array('func' => $func), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'commit', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->commit();
    }

    public function rollback()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'rollback', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getClassMetadata', array('className' => $className), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'createQuery', array('dql' => $dql), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'createNamedQuery', array('name' => $name), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'createQueryBuilder', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'flush', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'clear', array('entityName' => $entityName), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->clear($entityName);
    }

    public function close()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'close', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->close();
    }

    public function persist($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'persist', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'remove', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'refresh', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'detach', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'merge', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getRepository', array('entityName' => $entityName), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'contains', array('entity' => $entity), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getEventManager', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getConfiguration', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'isOpen', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getUnitOfWork', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getProxyFactory', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'initializeObject', array('obj' => $obj), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'getFilters', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'isFiltersStateClean', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'hasFilters', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return $this->valueHolder3fc50->hasFilters();
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

        $instance->initializer070a5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3fc50) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3fc50 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3fc50->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__get', ['name' => $name], $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        if (isset(self::$publicPropertiesb694f[$name])) {
            return $this->valueHolder3fc50->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fc50;

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

        $targetObject = $this->valueHolder3fc50;
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
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fc50;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3fc50;
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
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__isset', array('name' => $name), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fc50;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3fc50;
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
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__unset', array('name' => $name), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fc50;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3fc50;
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
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__clone', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        $this->valueHolder3fc50 = clone $this->valueHolder3fc50;
    }

    public function __sleep()
    {
        $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, '__sleep', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;

        return array('valueHolder3fc50');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer070a5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer070a5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer070a5 && ($this->initializer070a5->__invoke($valueHolder3fc50, $this, 'initializeProxy', array(), $this->initializer070a5) || 1) && $this->valueHolder3fc50 = $valueHolder3fc50;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3fc50;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3fc50;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
