<?php
/**
 * @file
 * Contains \Drupal\my_module\Plugin\Block\ArticleBlock.
 */

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("Article Form block"),
 *   category = @Translation("Custom article form block example")
 * )
 */
class ArticleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\my_module\Form\WorkForm');

    return $form;
   }
}