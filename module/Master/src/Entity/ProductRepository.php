<?php
namespace Master\Entity;
use Doctrine\ODM\MongoDB\DocumentRepository;
/**
 * Product
 *
 */
class ProductRepository extends DocumentRepository 
{
    public function getAll() {
      return $this->findOneBy(array('id' => $id));
    }
    
    public function getById(int $id) {
      return $this->findOneBy(array('id' => $id));
    }
}
