<?php

namespace ContainerHqPUZCG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13569 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd9c7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7bd0b = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getConnection', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getMetadataFactory', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getExpressionBuilder', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'beginTransaction', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getCache', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'transactional', array('func' => $func), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'commit', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->commit();
    }

    public function rollback()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'rollback', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'createQuery', array('dql' => $dql), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'createQueryBuilder', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'flush', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'clear', array('entityName' => $entityName), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'close', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->close();
    }

    public function persist($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'persist', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'remove', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'refresh', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'detach', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'merge', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'contains', array('entity' => $entity), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getEventManager', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getConfiguration', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'isOpen', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getUnitOfWork', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getProxyFactory', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'getFilters', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'isFiltersStateClean', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'hasFilters', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return $this->valueHolder13569->hasFilters();
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

        $instance->initializerdd9c7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13569) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13569 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13569->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__get', ['name' => $name], $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        if (isset(self::$publicProperties7bd0b[$name])) {
            return $this->valueHolder13569->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13569;

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

        $targetObject = $this->valueHolder13569;
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
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13569;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13569;
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
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__isset', array('name' => $name), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13569;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder13569;
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
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__unset', array('name' => $name), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13569;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder13569;
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
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__clone', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        $this->valueHolder13569 = clone $this->valueHolder13569;
    }

    public function __sleep()
    {
        $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, '__sleep', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;

        return array('valueHolder13569');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd9c7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd9c7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd9c7 && ($this->initializerdd9c7->__invoke($valueHolder13569, $this, 'initializeProxy', array(), $this->initializerdd9c7) || 1) && $this->valueHolder13569 = $valueHolder13569;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13569;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13569;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
