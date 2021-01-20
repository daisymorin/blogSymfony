<?php

namespace ContainerAEYwyFx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68587 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1a222 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties24f63 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getConnection', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getMetadataFactory', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getExpressionBuilder', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'beginTransaction', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getCache', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'transactional', array('func' => $func), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->transactional($func);
    }

    public function commit()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'commit', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->commit();
    }

    public function rollback()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'rollback', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getClassMetadata', array('className' => $className), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'createQuery', array('dql' => $dql), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'createNamedQuery', array('name' => $name), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'createQueryBuilder', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'flush', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'clear', array('entityName' => $entityName), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->clear($entityName);
    }

    public function close()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'close', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->close();
    }

    public function persist($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'persist', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'remove', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'refresh', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'detach', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'merge', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'contains', array('entity' => $entity), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getEventManager', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getConfiguration', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'isOpen', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getUnitOfWork', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getProxyFactory', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'initializeObject', array('obj' => $obj), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'getFilters', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'isFiltersStateClean', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'hasFilters', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return $this->valueHolder68587->hasFilters();
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

        $instance->initializer1a222 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder68587) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68587 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder68587->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__get', ['name' => $name], $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        if (isset(self::$publicProperties24f63[$name])) {
            return $this->valueHolder68587->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68587;

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

        $targetObject = $this->valueHolder68587;
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
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68587;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68587;
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
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__isset', array('name' => $name), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68587;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68587;
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
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__unset', array('name' => $name), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68587;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68587;
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
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__clone', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        $this->valueHolder68587 = clone $this->valueHolder68587;
    }

    public function __sleep()
    {
        $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, '__sleep', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;

        return array('valueHolder68587');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1a222 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1a222;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1a222 && ($this->initializer1a222->__invoke($valueHolder68587, $this, 'initializeProxy', array(), $this->initializer1a222) || 1) && $this->valueHolder68587 = $valueHolder68587;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68587;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68587;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
