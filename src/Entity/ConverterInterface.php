<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides convertor structure that shared between tasks.
 */
interface ConverterInterface
{
    /**
     * Specification:
     * - Returns convertor name.
     *
     * @api
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Specification:
     * - Returns configuration for convertor.
     *
     * @api
     *
     * @return array<string, mixed>
     */
    public function getConfiguration(): array;
}
