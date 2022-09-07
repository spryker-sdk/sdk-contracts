<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides interface for staged task.
 */
interface StagedTaskInterface extends TaskInterface
{
    /**
     * Specification:
     * - Returns task stage.
     *
     * @api
     *
     * @return string
     */
    public function getStage(): string;
}
