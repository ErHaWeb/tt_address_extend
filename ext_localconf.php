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
 * https://docs.typo3.org/m/typo3/reference-coreapi/12.4/en-us/ExtensionArchitecture/FileStructure/ExtLocalconf.html
 */

use ErHaWeb\TtAddressExtend\Domain\Model\Address;
use FriendsOfTYPO3\TtAddress\Domain\Model\Address as OriginalAddress;

defined('TYPO3') or die();

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][OriginalAddress::class] = [
        'className' => Address::class,
    ];
})();