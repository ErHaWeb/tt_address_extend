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

namespace ErHaWeb\TtAddressExtend\Domain\Model;

/**
 * https://docs.typo3.org/m/typo3/reference-coreapi/12.4/en-us/ExtensionArchitecture/Extbase/Reference/Domain/Model.html
 */

use FriendsOfTYPO3\TtAddress\Domain\Model\Address as OriginalAddress;

class Address extends OriginalAddress
{
    /**
     * @var string
     */
    protected string $myCustomField = '';

    public function setMyCustomField(string $myCustomField): void
    {
        $this->myCustomField = $myCustomField;
    }

    public function getMyCustomField(): string
    {
        return $this->myCustomField;
    }
}
