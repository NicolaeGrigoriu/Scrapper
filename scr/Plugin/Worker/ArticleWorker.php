<?php

namespace Drupal\scrapper\Plugin\Worker;

use Drupal\node\Entity\Node;
use Drupal\scrapper\Annotation\Worker;
use Drupal\scrapper\Plugin\WorkerPluginBase;

/**
 * Class ArticleWorker.
 *
 * @package Drupal\scrapper\Plugin
 *
 * @Worker(
 *   id = "article_worker",
 *   label = @Translation("Article Worker"),
 * )
 */
class ArticleWorker extends WorkerPluginBase {

  /**
   * Save scrapped item as article node.
   *
   * @param $item
   * @param $context
   *
   * @return void
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function processItem($item, $context) {
    [$id, $title, $body, $tags] = $item;
    if (!empty($id)) {
      $node = Node::load($id);
    }
    else {
      $node = Node::create([
        'type' => 'article',
        'langcode' => 'ru',
        'uid' => 1,
        'status' => 1,
      ]);
    }

    $node->title = $title;
    $node->body = [
      'value' => $body,
      'format' => 'full_html',
    ];
    $node->save();

    $context['results'][] = $node->id() . ' : ' . $node->label();
    $context['message'] = $node->label();
  }

}
