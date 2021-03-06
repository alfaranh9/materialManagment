<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Authy\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class ServiceOptions {
    /**
     * @param string $push Optional service level push factors configuration
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return CreateServiceOptions Options builder
     */
    public static function create(string $push = Values::NONE, string $twilioAuthySandboxMode = Values::NONE): CreateServiceOptions {
        return new CreateServiceOptions($push, $twilioAuthySandboxMode);
    }

    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return DeleteServiceOptions Options builder
     */
    public static function delete(string $twilioAuthySandboxMode = Values::NONE): DeleteServiceOptions {
        return new DeleteServiceOptions($twilioAuthySandboxMode);
    }

    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return FetchServiceOptions Options builder
     */
    public static function fetch(string $twilioAuthySandboxMode = Values::NONE): FetchServiceOptions {
        return new FetchServiceOptions($twilioAuthySandboxMode);
    }

    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return ReadServiceOptions Options builder
     */
    public static function read(string $twilioAuthySandboxMode = Values::NONE): ReadServiceOptions {
        return new ReadServiceOptions($twilioAuthySandboxMode);
    }

    /**
     * @param string $friendlyName A human readable description of this resource.
     * @param string $push Optional service level push factors configuration
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return UpdateServiceOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $push = Values::NONE, string $twilioAuthySandboxMode = Values::NONE): UpdateServiceOptions {
        return new UpdateServiceOptions($friendlyName, $push, $twilioAuthySandboxMode);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param string $push Optional service level push factors configuration
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     */
    public function __construct(string $push = Values::NONE, string $twilioAuthySandboxMode = Values::NONE) {
        $this->options['push'] = $push;
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
    }

    /**
     * The optional service level push factors configuration. If present it must be a json string with the following format: {"notify_service_sid": "ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "include_date": true}
     *
     * @param string $push Optional service level push factors configuration
     * @return $this Fluent Builder
     */
    public function setPush(string $push): self {
        $this->options['push'] = $push;
        return $this;
    }

    /**
     * The Twilio-Authy-Sandbox-Mode HTTP request header
     *
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return $this Fluent Builder
     */
    public function setTwilioAuthySandboxMode(string $twilioAuthySandboxMode): self {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Authy.V1.CreateServiceOptions ' . $options . ']';
    }
}

class DeleteServiceOptions extends Options {
    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     */
    public function __construct(string $twilioAuthySandboxMode = Values::NONE) {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
    }

    /**
     * The Twilio-Authy-Sandbox-Mode HTTP request header
     *
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return $this Fluent Builder
     */
    public function setTwilioAuthySandboxMode(string $twilioAuthySandboxMode): self {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Authy.V1.DeleteServiceOptions ' . $options . ']';
    }
}

class FetchServiceOptions extends Options {
    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     */
    public function __construct(string $twilioAuthySandboxMode = Values::NONE) {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
    }

    /**
     * The Twilio-Authy-Sandbox-Mode HTTP request header
     *
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return $this Fluent Builder
     */
    public function setTwilioAuthySandboxMode(string $twilioAuthySandboxMode): self {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Authy.V1.FetchServiceOptions ' . $options . ']';
    }
}

class ReadServiceOptions extends Options {
    /**
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     */
    public function __construct(string $twilioAuthySandboxMode = Values::NONE) {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
    }

    /**
     * The Twilio-Authy-Sandbox-Mode HTTP request header
     *
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return $this Fluent Builder
     */
    public function setTwilioAuthySandboxMode(string $twilioAuthySandboxMode): self {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Authy.V1.ReadServiceOptions ' . $options . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $friendlyName A human readable description of this resource.
     * @param string $push Optional service level push factors configuration
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     */
    public function __construct(string $friendlyName = Values::NONE, string $push = Values::NONE, string $twilioAuthySandboxMode = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['push'] = $push;
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
    }

    /**
     * A human readable description of this resource, up to 64 characters.
     *
     * @param string $friendlyName A human readable description of this resource.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The optional service level push factors configuration. If present it must be a json string with the following format: {"notify_service_sid": "ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "include_date": true}
     *
     * @param string $push Optional service level push factors configuration
     * @return $this Fluent Builder
     */
    public function setPush(string $push): self {
        $this->options['push'] = $push;
        return $this;
    }

    /**
     * The Twilio-Authy-Sandbox-Mode HTTP request header
     *
     * @param string $twilioAuthySandboxMode The Twilio-Authy-Sandbox-Mode HTTP
     *                                       request header
     * @return $this Fluent Builder
     */
    public function setTwilioAuthySandboxMode(string $twilioAuthySandboxMode): self {
        $this->options['twilioAuthySandboxMode'] = $twilioAuthySandboxMode;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Authy.V1.UpdateServiceOptions ' . $options . ']';
    }
}