<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Workflow;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

interface TransitionResolverInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     * @param array $settings
     *
     * @return string|null
     */
    public function resolveTransition(ContextInterface $context, array $settings): ?string;
}
