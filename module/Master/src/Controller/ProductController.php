<?php 
namespace Master\Controller;
// use Doctrine\ORM\EntityManager;
use Doctrine\ODM\MongoDB\DocumentManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Master\Entity\Product;
use Master\Form\ProductForm;

class ProductController extends AbstractActionController
{
  private $em;
  
  public function __construct(DocumentManager $em)
  {
    $this->em = $em;
  }
  
  public function indexAction()
  {
    $products = $this->em->getRepository('Master\Entity\Product')->findAll();
    // print_r($attributes);
    return [
        //'attributes' => $this->em->getRepository(Attribute::class)->findAll(),
        'products' => $products,
    ];
  }

  public function addAction()
  {
    $services       = $this->getServiceLocator();
    $productForm    = $services->get('FormElementManager')->get('Master\Form\ProductForm');
        
    return new ViewModel(array(
      'form' => $productForm, 
    ));
  }

  public function editAction()
  {
  }

  public function deleteAction()
  {
  }
}
 ?>
