<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\ValueResolver;

/**
 * Short desc.
 */
interface ConfigurableValueResolverInterface extends ValueResolverInterface
{
    /**
     * Specification:
     * -
     *
     * @api
     *
     * @param array $values
     *
     * @return void
     */
    public function configure(array $values): void;
}
