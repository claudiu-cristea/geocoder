<?php

/**
 * @file
 * Contains \Drupal\geocoder\Plugin\Geocoder\Provider\Geoip.
 */

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderBase;

/**
 * Provides a Geoip geocoder provider plugin.
 *
 * @GeocoderProvoder(
 *   id = "geoip",
 *   name = "Geoip",
 *   handler = "\Geocoder\Provider\Geoip"
 * )
 */
class Geoip extends ProviderBase {}
