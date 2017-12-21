<?php 
namespace Master\Controller;
// use Doctrine\ORM\EntityManager;
use Doctrine\ODM\MongoDB\DocumentManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Master\Entity\Attribute;

class AttributeController extends AbstractActionController
{
  private $em;
  
  public function __construct(DocumentManager $em)
  {
    $this->em = $em;
  }
  
  public function indexAction()
  {
    $attributes = $this->em->getRepository('Master\Entity\Attribute')->findAll();
    // print_r($attributes);
    return [
        //'attributes' => $this->em->getRepository(Attribute::class)->findAll(),
        'attributes' => $attributes,
    ];
  }

  public function addAction()
  {
  }

  public function editAction()
  {
  }

  public function deleteAction()
  {
  }
}
 ?>
