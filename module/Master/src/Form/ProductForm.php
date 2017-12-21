<?php 

namespace Master\Form;
 
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Doctrine\ODM\MongoDB\DocumentManager;
 
class ProductForm extends Form
    implements InputFilterProviderInterface
{
    protected $entityManager;
     
    public function __construct(DocumentManager $entityManager)
    {
        parent::__construct();
 
        $this->entityManager = $entityManager;       
    }
     
    public function init()
    {
        /*$this->add(array(
           'name' => 'continent',
           'type' => 'DoctrineModule\Form\Element\ObjectSelect',
           'options' => array(
                'object_manager'     => $this->entityManager,
                'target_class'       => 'Tutorial\Entity\Countries',
                'property' => 'continent',
                'is_method' => true,
                'find_method'        => array(
                    'name'   => 'getContinent',
                ),
            ), 
        ));*/
        
        $this->add(array(
           'name' => 'code',
           'type' => 'text',
           'options' => array(
                'label'     => 'Code'
            ), 
        ));
        
        $this->add(array(
           'name' => 'name',
           'type' => 'text',
           'options' => array(
                'label'     => 'Name'
            ), 
        ));
    }
     
    public function getInputFilterSpecification()
    {
        return array(); // filter and validation here
    }
}
 ?>
