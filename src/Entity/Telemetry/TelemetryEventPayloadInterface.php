<?php

namespace SprykerSdk\SdkContracts\Entity\Telemetry;

interface TelemetryEventPayloadInterface
{
    /**
     * @return string
     */
    public static function getEventName(): string;

    /**
     * @return int
     */
    public static function getLatestVersion(): int;
}
