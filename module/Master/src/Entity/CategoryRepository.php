<?php
namespace Master\Entity;
use Doctrine\ODM\MongoDB\DocumentRepository;
/**
 * Category
 *
 */
class CategoryRepository extends DocumentRepository 
{
    public function getAll() {
      return $this->findOneBy(array('id' => $id));
    }
    
    public function getById(int $id) {
      return $this->findOneBy(array('id' => $id));
    }
}
