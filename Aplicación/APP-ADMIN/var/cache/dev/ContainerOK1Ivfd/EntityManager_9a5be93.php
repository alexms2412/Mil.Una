<?php

namespace ContainerOK1Ivfd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc76ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd9794 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2c458 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getConnection', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getMetadataFactory', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getExpressionBuilder', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'beginTransaction', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getCache', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'transactional', array('func' => $func), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'commit', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->commit();
    }

    public function rollback()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'rollback', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getClassMetadata', array('className' => $className), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'createQuery', array('dql' => $dql), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'createNamedQuery', array('name' => $name), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'createQueryBuilder', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'flush', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'clear', array('entityName' => $entityName), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->clear($entityName);
    }

    public function close()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'close', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->close();
    }

    public function persist($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'persist', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'remove', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'refresh', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'detach', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'merge', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'contains', array('entity' => $entity), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getEventManager', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getConfiguration', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'isOpen', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getUnitOfWork', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getProxyFactory', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'initializeObject', array('obj' => $obj), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'getFilters', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'isFiltersStateClean', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'hasFilters', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return $this->valueHolderc76ea->hasFilters();
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

        $instance->initializerd9794 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc76ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc76ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc76ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__get', ['name' => $name], $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        if (isset(self::$publicProperties2c458[$name])) {
            return $this->valueHolderc76ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc76ea;

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

        $targetObject = $this->valueHolderc76ea;
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
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc76ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc76ea;
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
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__isset', array('name' => $name), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc76ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc76ea;
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
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__unset', array('name' => $name), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc76ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc76ea;
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
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__clone', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        $this->valueHolderc76ea = clone $this->valueHolderc76ea;
    }

    public function __sleep()
    {
        $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, '__sleep', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;

        return array('valueHolderc76ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd9794 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd9794;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd9794 && ($this->initializerd9794->__invoke($valueHolderc76ea, $this, 'initializeProxy', array(), $this->initializerd9794) || 1) && $this->valueHolderc76ea = $valueHolderc76ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc76ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc76ea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
