<?php

namespace Drupal\scrapper;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Annotation\Translation;

interface ScrapperPluginInterface extends PluginInspectionInterface {

  /**
   * Returns the ID of the scrapper.
   *
   * @return string
   *   The ID of the scrapper.
   */
  public function getId(): string;

  /**
   * Returns the label of the scrapper.
   *
   * @return Translation
   *   The label of the scrapper.
   */
  public function getLabel(): Translation;

  /**
   * Process scrapped item and save as node.
   */
  public function processItem($item, $context);

}
