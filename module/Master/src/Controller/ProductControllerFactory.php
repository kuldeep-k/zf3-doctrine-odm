<?php
namespace Master\Controller;
// use Doctrine\ODM\EntityManager;
use Doctrine\ODM\MongoDB\DocumentManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
class ProductControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $em = $container->get(DocumentManager::class);
        return new ProductController($em);
    }
}
