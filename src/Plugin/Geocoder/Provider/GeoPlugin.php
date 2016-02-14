<?php

/**
 * @file
 * The GeoPlugin plugin.
 */

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderWithHttpAdapterBase;

/**
 * Provides a GeoPlugin geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "geoplugin",
 *   name = "GeoPlugin",
 *   handler = "\Geocoder\Provider\GeoPlugin"
 * )
 */
class GeoPlugin extends ProviderWithHttpAdapterBase { }
