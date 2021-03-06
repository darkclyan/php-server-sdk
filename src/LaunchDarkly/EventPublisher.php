<?php
namespace LaunchDarkly;

/**
 * Interface for the component that sends events to the LaunchDarkly service.
 *
 * The default implementation is {@link \LaunchDarkly\Integrations\Curl::eventPublisher()}. The SDK also
 * provides {@link \LaunchDarkly\Integrations\Guzzle::eventPublisher()}.
 */
interface EventPublisher
{
    const CURRENT_SCHEMA_VERSION = 2;

    /**
     * @param string $sdkKey The SDK key for your account
     * @param mixed[] $options Client configuration settings
     */
    public function __construct($sdkKey, array $options);

    /**
     * Publishes events to LaunchDarkly.
     *
     * @param $payload string Event payload
     * @return bool Whether the events were successfully published
     */
    public function publish($payload);
}
