<?php

namespace SprykerSdk\SdkContracts\Entity\Telemetry;

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
    public function synchronizeFailed(): void;

    /**
     * @return TelemetryEventPayloadInterface
     */
    public function getPayload(): TelemetryEventPayloadInterface;

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
    public function getCreatedAt(): \DateTimeImmutable;

    /**
     * @return int
     */
    public function getVersion(): int;
}
