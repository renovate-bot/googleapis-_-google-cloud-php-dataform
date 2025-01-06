<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `UpdateRepository` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.UpdateRepositoryRequest</code>
 */
class UpdateRepositoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies the fields to be updated in the repository. If left
     * unset, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The repository to update.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $repository = null;

    /**
     * @param \Google\Cloud\Dataform\V1beta1\Repository $repository Required. The repository to update.
     * @param \Google\Protobuf\FieldMask                $updateMask Optional. Specifies the fields to be updated in the repository. If left
     *                                                              unset, all fields will be updated.
     *
     * @return \Google\Cloud\Dataform\V1beta1\UpdateRepositoryRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dataform\V1beta1\Repository $repository, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setRepository($repository)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Specifies the fields to be updated in the repository. If left
     *           unset, all fields will be updated.
     *     @type \Google\Cloud\Dataform\V1beta1\Repository $repository
     *           Required. The repository to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies the fields to be updated in the repository. If left
     * unset, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Specifies the fields to be updated in the repository. If left
     * unset, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The repository to update.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataform\V1beta1\Repository|null
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function hasRepository()
    {
        return isset($this->repository);
    }

    public function clearRepository()
    {
        unset($this->repository);
    }

    /**
     * Required. The repository to update.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataform\V1beta1\Repository $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Repository::class);
        $this->repository = $var;

        return $this;
    }

}

