<?php

/**
 * @file
 * Definition of \Drupal\apa_events\Plugin\CKEditorPlugin\LinkButton.
 */

namespace Drupal\editor_experience\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\editor\Entity\Editor;
use Drupal\views\Plugin\views\PluginBase;

/**
 * Defines the "link" plugin.
 *
 * @CKEditorPlugin(
 *   id = "allowspan",
 *   label = @Translation("Allow Span")
 * )
 */
class AllowEmptySpan extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return drupal_get_path('module', 'editor_experience') . '/js/allowspan.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    $config = [];

    $settings = $editor->getSettings();
    if (isset($settings['plugins']['allowspan'])) {
      $config = $settings['plugins']['allowspan'];
    }

    return $config;
  }

  /**
   * {@inheritdoc}
   */
  function isEnabled(Editor $editor) {
    return TRUE;
  }

}