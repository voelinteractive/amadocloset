<?php
 namespace MailPoetVendor\Doctrine\ORM\Id; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\EntityManager; use MailPoetVendor\Doctrine\ORM\ORMException; use function get_class; class AssignedGenerator extends \MailPoetVendor\Doctrine\ORM\Id\AbstractIdGenerator { public function generate(\MailPoetVendor\Doctrine\ORM\EntityManager $em, $entity) { $class = $em->getClassMetadata(\get_class($entity)); $idFields = $class->getIdentifierFieldNames(); $identifier = []; foreach ($idFields as $idField) { $value = $class->getFieldValue($entity, $idField); if (!isset($value)) { throw \MailPoetVendor\Doctrine\ORM\ORMException::entityMissingAssignedIdForField($entity, $idField); } if (isset($class->associationMappings[$idField])) { $value = $em->getUnitOfWork()->getSingleIdentifierValue($value); } $identifier[$idField] = $value; } return $identifier; } } 