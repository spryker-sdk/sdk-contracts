<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity\Telemetry;

use DateTimeImmutable;

interface TelemetryEventInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return void
     */
    public function markSynchronizeFailed(): void;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\Telemetry\TelemetryEventPayloadInterface
     */
    public function getPayload(): TelemetryEventPayloadInterface;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\Telemetry\TelemetryEventMetadataInterface
     */
    public function getMetadata(): TelemetryEventMetadataInterface;

    /**
     * @return int
     */
    public function getSynchronizationAttemptsCount(): int;

    /**
     * @return int|null
     */
    public function getLastSynchronisationTimestamp(): ?int;

    /**
     * @return \DateTimeImmutable
     */
    public function getTriggeredAt(): DateTimeImmutable;

    /**
     * @return int
     */
    public function getVersion(): int;

    /**
     * @return string
     */
    public function getScope(): string;
}
