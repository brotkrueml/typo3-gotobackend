<?php

declare(strict_types=1);

/*
 * This file is part of the "gotobackend" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\GoToBackend;

final class Extension
{
    public const KEY = 'gotobackend';

    public const LANGUAGE_PATH = 'LLL:EXT:' . self::KEY . '/Resources/Private/Language/locallang.xlf';

    public const ADMINPANEL_MODULE_IDENTIFIER = 'ext-' . self::KEY;
}
