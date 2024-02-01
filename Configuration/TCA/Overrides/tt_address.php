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

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function () {
    ExtensionManagementUtility::addTCAcolumns('tt_address',
        [
            'my_custom_field' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:tt_address_extend/Resources/Private/Language/locallang_db.xlf:tt_address.my_custom_field.title',
                'description' => 'LLL:EXT:tt_address_extend/Resources/Private/Language/locallang_db.xlf:tt_address.my_custom_field.description',
                'config' => [
                    'type' => 'input',
                    'size' => 40,
                    'eval' => 'trim',
                    'max' => 255
                ]
            ],
        ]
    );

    ExtensionManagementUtility::addToAllTCAtypes(
        'tt_address',
        'my_custom_field',
        '',
        'before:name'
    );
})();