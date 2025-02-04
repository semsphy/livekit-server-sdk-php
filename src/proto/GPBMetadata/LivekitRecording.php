<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_recording.proto

namespace GPBMetadata;

class LivekitRecording
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
livekit_recording.protolivekit"�
StartRecordingRequest
url (	H .
template (2.livekit.RecordingTemplateH #
rtmp (2.livekit.RtmpOutputH
filepath (	H*
options (2.livekit.RecordingOptionsB
inputB
output"H
RecordingTemplate
layout (	
	room_name (	
base_url (	"

RtmpOutput
urls (	"�
RecordingOptions(
preset (2.livekit.RecordingPreset
width (
height (
depth (
	framerate (
audio_bitrate (
audio_frequency (
video_bitrate (
profile	 (	".
StartRecordingResponse
recording_id (	":
AddOutputRequest
recording_id (	
rtmp_url (	"=
RemoveOutputRequest
recording_id (	
rtmp_url (	"+
EndRecordingRequest
recording_id (	"�
RecordingInfo

id (	
	room_name (	
active (
error (	!
file (2.livekit.FileResult!
rtmp (2.livekit.RtmpResult"4

FileResult
download_url (	
duration ("2

RtmpResult

stream_url (	
duration (*Q
RecordingPreset
NONE 	
HD_30	
HD_60

FULL_HD_30

FULL_HD_602�
RecordingServiceV
StartRecording.livekit.StartRecordingRequest.livekit.StartRecordingResponse"�C
	AddOutput.livekit.AddOutputRequest.google.protobuf.Empty"�I
RemoveOutput.livekit.RemoveOutputRequest.google.protobuf.Empty"�I
EndRecording.livekit.EndRecordingRequest.google.protobuf.Empty"�BFZ#github.com/livekit/protocol/livekit�LiveKit.Proto�LiveKit::Protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

