<?php
namespace Master\Entity;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** 
* @ODM\Document(repositoryClass="Master\Entity\AttributeRepository") 
* @ODM\Document(collection="attributes")
*/
class Attribute 
{
  /** @ODM\Id */
  private $id;

  /** @ODM\Field(type="string") */
  private $name;

  /** @ODM\Field(type="string") */
  private $code;

  /**
   * @return the $id
   */
  public function getId() {
      return $this->id;
  }

  /**
   * @return the $name
   */
  public function getName() {
      return $this->name;
  }

  /**
   * @return the $name
   */
  public function getCode() {
      return $this->code;
  }

  /**
   * @param field_type $id
   */
  public function setId($id) {
      $this->id = $id;
  }

  /**
   * @param field_type $name
   */
  public function setName($name) {
      $this->name = $name;
  }

  /**
   * @param field_type $name
   */
  public function setCode($code) {
      $this->code = $code;
  }

}
