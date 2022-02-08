<?php

namespace ContainerU6EBQk1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ac7d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf4c85 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf511b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getConnection', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getMetadataFactory', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getExpressionBuilder', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'beginTransaction', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getCache', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'transactional', array('func' => $func), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'commit', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->commit();
    }

    public function rollback()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'rollback', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'createQuery', array('dql' => $dql), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'createQueryBuilder', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'flush', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'clear', array('entityName' => $entityName), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'close', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->close();
    }

    public function persist($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'persist', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'remove', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'refresh', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'detach', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'merge', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'contains', array('entity' => $entity), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getEventManager', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getConfiguration', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'isOpen', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getUnitOfWork', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getProxyFactory', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'getFilters', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'isFiltersStateClean', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'hasFilters', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return $this->valueHolder5ac7d->hasFilters();
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

        $instance->initializerf4c85 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ac7d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ac7d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ac7d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__get', ['name' => $name], $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        if (isset(self::$publicPropertiesf511b[$name])) {
            return $this->valueHolder5ac7d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac7d;

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

        $targetObject = $this->valueHolder5ac7d;
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
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac7d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ac7d;
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
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__isset', array('name' => $name), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac7d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ac7d;
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
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__unset', array('name' => $name), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac7d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ac7d;
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
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__clone', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        $this->valueHolder5ac7d = clone $this->valueHolder5ac7d;
    }

    public function __sleep()
    {
        $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, '__sleep', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;

        return array('valueHolder5ac7d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4c85 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4c85;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf4c85 && ($this->initializerf4c85->__invoke($valueHolder5ac7d, $this, 'initializeProxy', array(), $this->initializerf4c85) || 1) && $this->valueHolder5ac7d = $valueHolder5ac7d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ac7d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ac7d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
