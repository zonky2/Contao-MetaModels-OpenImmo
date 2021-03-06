<?php

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the MIT Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the MIT
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the MIT Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Ondrej Brinkel 2014
 * @author     Ondrej Brinkel
 * @package    MetaModelsOpenImmo
 * @license    MIT
 * @filesource
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'MetaModelsOpenImmo',
));

/**
 * Register the classes
 */
$basePath = 'composer/vendor/anzui/metamodels_openimmo/src/MetaModelsOpenImmo';
ClassLoader::addClasses(array
(
	// Classes
	'MetaModelsOpenImmo\FilesHelper' => $basePath . '/FilesHelper.php',
  'MetaModelsOpenImmo\OpenImmo' => $basePath . '/OpenImmo.php',
  'MetaModelsOpenImmo\MetaModelsOpenImmo' => $basePath . '/MetaModelsOpenImmo.php',
  'MetaModelsOpenImmo\Field' => $basePath . '/Field.php',
  'MetaModelsOpenImmo\Cron' => $basePath . '/Cron.php',
  'MetaModelsOpenImmo\Api' => $basePath . '/Api.php',
  'MetaModelsOpenImmo\Settings' => $basePath . '/Settings.php',
  'MetaModelsOpenImmo\Models\MetaModelObject' => $basePath . '/models/MetaModelObject.php',
  'MetaModelsOpenImmo\Models\SyncFile' => $basePath . '/models/SyncFile.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_metamodels_openimmo' => 'system/modules/metamodels_openimmo/templates',
	'be_metamodels_openimmo_settings' => 'system/modules/metamodels_openimmo/templates',
));
