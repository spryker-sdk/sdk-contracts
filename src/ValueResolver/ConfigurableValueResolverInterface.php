<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\ValueResolver;

interface ConfigurableValueResolverInterface extends ValueResolverInterface
{
    /**
     * @param array $values
     *
     * @return void
     */
    public function configure(array $values): void;
}
