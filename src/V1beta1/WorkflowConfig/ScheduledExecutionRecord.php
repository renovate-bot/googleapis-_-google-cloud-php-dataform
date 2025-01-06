<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\WorkflowConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A record of an attempt to create a workflow invocation for this workflow
 * config.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.WorkflowConfig.ScheduledExecutionRecord</code>
 */
class ScheduledExecutionRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * The timestamp of this execution attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 1;</code>
     */
    protected $execution_time = null;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $execution_time
     *           The timestamp of this execution attempt.
     *     @type string $workflow_invocation
     *           The name of the created workflow invocation, if one was successfully
     *           created. Must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowInvocations/&#42;`.
     *     @type \Google\Rpc\Status $error_status
     *           The error status encountered upon this attempt to create the
     *           workflow invocation, if the attempt was unsuccessful.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * The timestamp of this execution attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExecutionTime()
    {
        return $this->execution_time;
    }

    public function hasExecutionTime()
    {
        return isset($this->execution_time);
    }

    public function clearExecutionTime()
    {
        unset($this->execution_time);
    }

    /**
     * The timestamp of this execution attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExecutionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->execution_time = $var;

        return $this;
    }

    /**
     * The name of the created workflow invocation, if one was successfully
     * created. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowInvocations/&#42;`.
     *
     * Generated from protobuf field <code>string workflow_invocation = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkflowInvocation()
    {
        return $this->readOneof(2);
    }

    public function hasWorkflowInvocation()
    {
        return $this->hasOneof(2);
    }

    /**
     * The name of the created workflow invocation, if one was successfully
     * created. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowInvocations/&#42;`.
     *
     * Generated from protobuf field <code>string workflow_invocation = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowInvocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The error status encountered upon this attempt to create the
     * workflow invocation, if the attempt was unsuccessful.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getErrorStatus()
    {
        return $this->readOneof(3);
    }

    public function hasErrorStatus()
    {
        return $this->hasOneof(3);
    }

    /**
     * The error status encountered upon this attempt to create the
     * workflow invocation, if the attempt was unsuccessful.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setErrorStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}


