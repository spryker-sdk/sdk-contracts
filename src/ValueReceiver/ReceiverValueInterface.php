<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sdk\Contracts\ValueReceiver;

interface ReceiverValueInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return mixed
     */
    public function getDefaultValue(): mixed;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return array
     */
    public function getChoiceValues(): array;
}
