<?php

namespace Container2x9EUrJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3f9a0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera486d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa7fcd = [
        
    ];

    public function getConnection()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getConnection', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getMetadataFactory', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getExpressionBuilder', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'beginTransaction', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getCache', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getCache();
    }

    public function transactional($func)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'transactional', array('func' => $func), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'wrapInTransaction', array('func' => $func), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'commit', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->commit();
    }

    public function rollback()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'rollback', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getClassMetadata', array('className' => $className), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'createQuery', array('dql' => $dql), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'createNamedQuery', array('name' => $name), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'createQueryBuilder', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'flush', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'clear', array('entityName' => $entityName), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->clear($entityName);
    }

    public function close()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'close', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->close();
    }

    public function persist($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'persist', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'remove', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'refresh', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'detach', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'merge', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getRepository', array('entityName' => $entityName), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'contains', array('entity' => $entity), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getEventManager', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getConfiguration', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'isOpen', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getUnitOfWork', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getProxyFactory', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'initializeObject', array('obj' => $obj), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'getFilters', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'isFiltersStateClean', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'hasFilters', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return $this->valueHolder3f9a0->hasFilters();
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

        $instance->initializera486d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3f9a0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3f9a0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3f9a0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__get', ['name' => $name], $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        if (isset(self::$publicPropertiesa7fcd[$name])) {
            return $this->valueHolder3f9a0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f9a0;

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

        $targetObject = $this->valueHolder3f9a0;
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
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f9a0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3f9a0;
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
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__isset', array('name' => $name), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f9a0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3f9a0;
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
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__unset', array('name' => $name), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f9a0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3f9a0;
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
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__clone', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        $this->valueHolder3f9a0 = clone $this->valueHolder3f9a0;
    }

    public function __sleep()
    {
        $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, '__sleep', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;

        return array('valueHolder3f9a0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera486d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera486d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera486d && ($this->initializera486d->__invoke($valueHolder3f9a0, $this, 'initializeProxy', array(), $this->initializera486d) || 1) && $this->valueHolder3f9a0 = $valueHolder3f9a0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3f9a0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3f9a0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
