<?php

namespace ContainerCdokpWl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3c743 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae85e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbbf57 = [
        
    ];

    public function getConnection()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getConnection', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getMetadataFactory', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getExpressionBuilder', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'beginTransaction', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getCache', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'transactional', array('func' => $func), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->transactional($func);
    }

    public function commit()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'commit', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->commit();
    }

    public function rollback()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'rollback', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getClassMetadata', array('className' => $className), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'createQuery', array('dql' => $dql), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'createNamedQuery', array('name' => $name), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'createQueryBuilder', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'flush', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'clear', array('entityName' => $entityName), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->clear($entityName);
    }

    public function close()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'close', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->close();
    }

    public function persist($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'persist', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'remove', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'refresh', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'detach', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'merge', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'contains', array('entity' => $entity), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getEventManager', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getConfiguration', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'isOpen', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getUnitOfWork', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getProxyFactory', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'initializeObject', array('obj' => $obj), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'getFilters', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'isFiltersStateClean', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'hasFilters', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return $this->valueHolder3c743->hasFilters();
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

        $instance->initializerae85e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3c743) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3c743 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3c743->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__get', ['name' => $name], $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        if (isset(self::$publicPropertiesbbf57[$name])) {
            return $this->valueHolder3c743->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c743;

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

        $targetObject = $this->valueHolder3c743;
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
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c743;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3c743;
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
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__isset', array('name' => $name), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c743;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3c743;
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
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__unset', array('name' => $name), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c743;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3c743;
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
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__clone', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        $this->valueHolder3c743 = clone $this->valueHolder3c743;
    }

    public function __sleep()
    {
        $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, '__sleep', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;

        return array('valueHolder3c743');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae85e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae85e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae85e && ($this->initializerae85e->__invoke($valueHolder3c743, $this, 'initializeProxy', array(), $this->initializerae85e) || 1) && $this->valueHolder3c743 = $valueHolder3c743;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c743;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c743;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
