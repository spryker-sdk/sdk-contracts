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
     * Specification:
     * - Returns all value types.
     *
     * @api
     *
     * @return array<string>
     */
    public static function getAllValueTypes(): array
    {
        return [
            static::TYPE_BOOL,
            static::TYPE_ARRAY,
            static::TYPE_PATH,
            static::TYPE_STRING,
            static::TYPE_INT,
            static::TYPE_UUID,
        ];
    }
}
