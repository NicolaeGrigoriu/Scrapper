<?php

namespace Drupal\scrapper\Annotation;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Defines a Scrapper type annotation object.
 *
 * Plugin Namespace: Plugin\Scrapper
 *
 * @Annotation
 */
class Scrapper extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public string $id;

  /**
   * The label of the scrapper.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public Translation $label;

}
