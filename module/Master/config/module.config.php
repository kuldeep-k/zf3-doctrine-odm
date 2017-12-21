<?php 
namespace Master;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            //Controller\AttributeController::class => InvokableFactory::class,
            Controller\AttributeController::class => Controller\AttributeControllerFactory::class,
            Controller\CategoryController::class => Controller\CategoryControllerFactory::class,
            Controller\ProductController::class => Controller\ProductControllerFactory::class
            
        ],
    ],
    'form_elements' => array(
        'factories' => array(
            'Master\Form\ProductForm' => 'Master\Factory\Form\ProductFormFactory',  
        ),
    ),
    'doctrine' => array(
      'driver' => array(
          'odm_driver' => array(
              'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',          
              'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
          ),
          'odm_default' => array(
              'drivers' => array(
                  __NAMESPACE__ . '\Entity' => 'odm_driver'
              )
          )                   
      )
  ),  
    'router' => [
        'routes' => [
            'attribute' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/attribute[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[a-zA-Z0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AttributeController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'category' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/category[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[a-zA-Z0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\CategoryController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'product' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/product[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[a-zA-Z0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ProductController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'master' => __DIR__ . '/../view',
        ],
    ],
];
 ?>
