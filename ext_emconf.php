<?php
declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * https://docs.typo3.org/m/typo3/reference-coreapi/12.4/en-us/ExtensionArchitecture/FileStructure/ExtEmconf.html
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extended Address List',
    'description' => 'Example for the extension of the address model of the TYPO3 extension tt_address',
    'category' => 'plugin',
    'author' => 'Eric Harrer',
    'author_email' => 'info@eric-harrer.de',
    'author_company' => 'eric-harrer.de',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-12.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ErHaWeb\\TtAddressExtend\\' => 'Classes',
        ],
    ],
];
