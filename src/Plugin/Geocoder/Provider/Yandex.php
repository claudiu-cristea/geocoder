<?php

/**
 * @file
 * Contains \Drupal\geocoder\Plugin\Geocoder\Provider\Yandex.
 */

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderWithHttpAdapterBase;

/**
 * Provides a Yandex geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "yandex",
 *   name = "Yandex",
 *   handler = "\Geocoder\Provider\Yandex"
 * )
 */
class Yandex extends ProviderWithHttpAdapterBase {}
