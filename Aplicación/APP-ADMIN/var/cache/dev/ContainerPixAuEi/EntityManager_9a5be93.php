<?php

namespace ContainerPixAuEi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46dee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46fef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties69647 = [
        
    ];

    public function getConnection()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getConnection', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getMetadataFactory', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getExpressionBuilder', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'beginTransaction', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getCache', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'transactional', array('func' => $func), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'commit', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->commit();
    }

    public function rollback()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'rollback', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getClassMetadata', array('className' => $className), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'createQuery', array('dql' => $dql), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'createNamedQuery', array('name' => $name), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'createQueryBuilder', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'flush', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'clear', array('entityName' => $entityName), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->clear($entityName);
    }

    public function close()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'close', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->close();
    }

    public function persist($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'persist', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'remove', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'refresh', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'detach', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'merge', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'contains', array('entity' => $entity), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getEventManager', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getConfiguration', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'isOpen', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getUnitOfWork', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getProxyFactory', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'initializeObject', array('obj' => $obj), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'getFilters', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'isFiltersStateClean', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'hasFilters', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return $this->valueHolder46dee->hasFilters();
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

        $instance->initializer46fef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder46dee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46dee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46dee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__get', ['name' => $name], $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        if (isset(self::$publicProperties69647[$name])) {
            return $this->valueHolder46dee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46dee;

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

        $targetObject = $this->valueHolder46dee;
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
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46dee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46dee;
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
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__isset', array('name' => $name), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46dee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46dee;
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
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__unset', array('name' => $name), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46dee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46dee;
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
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__clone', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        $this->valueHolder46dee = clone $this->valueHolder46dee;
    }

    public function __sleep()
    {
        $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, '__sleep', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;

        return array('valueHolder46dee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46fef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46fef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46fef && ($this->initializer46fef->__invoke($valueHolder46dee, $this, 'initializeProxy', array(), $this->initializer46fef) || 1) && $this->valueHolder46dee = $valueHolder46dee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46dee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46dee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
