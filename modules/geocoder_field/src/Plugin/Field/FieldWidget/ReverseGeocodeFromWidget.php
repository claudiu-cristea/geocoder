<?php

/**
 * @file
 * Contains \Drupal\geocoder_field\Plugin\Field\FieldWidget\ReverseGeocodeFromWidget.
 */

namespace Drupal\geocoder_field\Plugin\Field\FieldWidget;

use Drupal\geocoder\Geocoder;
use Drupal\geocoder_field\Plugin\Field\GeocodeBaseWidget;
use Drupal\geocoder_field\Plugin\Field\ReverseGeocodeFromBaseWidget;

/**
 * Reverse geocode widget implementation for the Geocoder Field module.
 *
 * @FieldWidget(
 *   id = "geocoder_reverse_geocode_from_widget",
 *   label = @Translation("Reverse geocode from an existing field"),
 *   field_types = {
 *     "string",
 *     "file",
 *     "image"
 *   },
 * )
 */
class ReverseGeocodeFromWidget extends ReverseGeocodeFromBaseWidget {

}