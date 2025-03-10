<?php

declare(strict_types=1);

namespace Drupal\custom_entity_sample;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a custom entity sample entity type.
 */
interface CustomEntitySampleInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
