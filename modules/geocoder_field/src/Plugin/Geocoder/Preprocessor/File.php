<?php

/**
 * @file
 * Contains \Drupal\geocoder_field\Plugin\Geocoder\Preprocessor\File.
 */

namespace Drupal\geocoder_field\Plugin\Geocoder\Preprocessor;

use Drupal\Core\File\FileSystemInterface;
use Drupal\file\Entity\File as FileEntity;
use Drupal\geocoder_field\PreprocessorBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a geocoder preprocessor plugin for file fields.
 *
 * @GeocoderPreprocessor(
 *   id = "file",
 *   name = "File",
 *   field_types = {
 *     "file",
 *     "image"
 *   }
 * )
 */
class File extends PreprocessorBase {

  /**
   * The file system service.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * Constructs a geocoder file field preprocessor base class.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   *
   * @para, \Drupal\Core\File\FileSystemInterface $file_system
   *   The file system service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, FileSystemInterface $file_system) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->fileSystem = $file_system;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('file_system')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function preprocess() {
    parent::preprocess();

    foreach ($this->field->getValue() as $delta => $value) {
      if ($value['target_id']) {
        $uri = FileEntity::load($value['target_id'])->getFileUri();
        $value['value'] = $this->fileSystem->realpath($uri);
        $this->field->set($delta, $value);
      }
    }

    return $this;
  }

}
