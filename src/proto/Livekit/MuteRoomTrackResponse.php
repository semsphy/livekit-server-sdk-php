<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_room.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.MuteRoomTrackResponse</code>
 */
class MuteRoomTrackResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.TrackInfo track = 1;</code>
     */
    private $track = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Livekit\TrackInfo $track
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackInfo track = 1;</code>
     * @return \Livekit\TrackInfo
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackInfo track = 1;</code>
     * @param \Livekit\TrackInfo $var
     * @return $this
     */
    public function setTrack($var)
    {
        GPBUtil::checkMessage($var, \Livekit\TrackInfo::class);
        $this->track = $var;

        return $this;
    }

}
