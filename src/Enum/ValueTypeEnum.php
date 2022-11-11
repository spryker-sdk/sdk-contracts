<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Enum;

final class ValueTypeEnum
{
    /**
     * @var string
     */
    public const TYPE_BOOL = 'bool';

    /**
     * @var string
     */
    public const TYPE_ARRAY = 'array';

    /**
     * @var string
     */
    public const TYPE_PATH = 'path';

    /**
     * @var string
     */
    public const TYPE_STRING = 'string';

    /**
     * @var string
     */
    public const TYPE_INT = 'int';

    /**
     * @var string
     */
    public const TYPE_UUID = 'uuid';

    /**
     * @return array<string>
     */
    public static function getAllValueTypes(): array
    {
        return [
            self::TYPE_BOOL,
            self::TYPE_ARRAY,
            self::TYPE_PATH,
            self::TYPE_STRING,
            self::TYPE_INT,
            self::TYPE_UUID,
        ];
    }
}
