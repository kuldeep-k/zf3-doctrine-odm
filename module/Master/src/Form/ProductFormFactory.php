<?php 

namespace Master\Form;
 
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Master\Form\ProductForm;
 
class ProductFormFactory implements FactoryInterface
{
  public function createService(ServiceLocatorInterface $serviceLocator)
  {
    $services         = $serviceLocator->getServiceLocator();
    $entityManager    = $services->get('Doctrine\ODM\MongoDB\DocumentManager');
     
    $form = new ProductForm($entityManager);
    return $form;
  }
}

 ?>
