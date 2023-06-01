<?php

namespace Drupal\scrapper\Annotation;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Defines a Worker type annotation object.
 *
 * Plugin Namespace: Plugin\Scrapper
 *
 * @Annotation
 */
class Worker extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public string $id;

  /**
   * The label of the Worker.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public Translation $label;

}
