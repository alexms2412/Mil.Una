<?php

namespace ContainerVNeTNLV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51c47 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7861 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties103de = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getConnection', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getMetadataFactory', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getExpressionBuilder', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'beginTransaction', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getCache', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'transactional', array('func' => $func), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'commit', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->commit();
    }

    public function rollback()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'rollback', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'createQuery', array('dql' => $dql), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'createQueryBuilder', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'flush', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'clear', array('entityName' => $entityName), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'close', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->close();
    }

    public function persist($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'persist', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'remove', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'refresh', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'detach', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'merge', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'contains', array('entity' => $entity), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getEventManager', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getConfiguration', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'isOpen', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getUnitOfWork', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getProxyFactory', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'getFilters', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'isFiltersStateClean', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'hasFilters', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return $this->valueHolder51c47->hasFilters();
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

        $instance->initializerc7861 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder51c47) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51c47 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder51c47->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__get', ['name' => $name], $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        if (isset(self::$publicProperties103de[$name])) {
            return $this->valueHolder51c47->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51c47;

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

        $targetObject = $this->valueHolder51c47;
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
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51c47;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder51c47;
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
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__isset', array('name' => $name), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51c47;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder51c47;
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
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__unset', array('name' => $name), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51c47;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder51c47;
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
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__clone', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        $this->valueHolder51c47 = clone $this->valueHolder51c47;
    }

    public function __sleep()
    {
        $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, '__sleep', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;

        return array('valueHolder51c47');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7861 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7861;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7861 && ($this->initializerc7861->__invoke($valueHolder51c47, $this, 'initializeProxy', array(), $this->initializerc7861) || 1) && $this->valueHolder51c47 = $valueHolder51c47;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51c47;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51c47;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
