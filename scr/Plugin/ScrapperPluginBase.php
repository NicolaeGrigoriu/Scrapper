<?php

namespace Drupal\scrapper\Plugin;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\StringTranslation\StringTranslationTrait;

abstract class ScrapperPluginBase extends PluginBase implements ScrapperPluginInterface {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public function getId(): string {
    return $this->pluginDefinition['id'];
  }

  /**
   * {@inheritdoc}
   */
  public function getLabel(): Translation {
    return $this->pluginDefinition['label'];
  }

  /**
   * {@inheritdoc}
   */
  public function processItem($item, $context) {
    $context['results'][] = $item;
    $context['message'] = $this->t('Processed @count items.', ['@count' => count($context['results'])]);
  }

}
