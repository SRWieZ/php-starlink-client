<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace GPBMetadata\Spacex\Api\Device;

class Dish
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Spacex\Api\Device\Common::initOnce();
        \GPBMetadata\Spacex\Api\Device\DishConfig::initOnce();
        \GPBMetadata\Spacex\Api\Device\RssiScan::initOnce();
        \GPBMetadata\Spacex\Api\Satellites\Network\UtDisablementCodes::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xED{\x0A\x1Cspacex/api/device/dish.proto\x12\x11SpaceX.API.Device\x1A#spacex/api/device/dish_config.proto\x1A!spacex/api/device/rssi_scan.proto\x1A8spacex/api/satellites/network/ut_disablement_codes.proto\"9\x0A\x0FDishStowRequest\x12\x1B\x0A\x06unstow\x18\x01 \x01(\x08H\x00R\x06unstow\x88\x01\x01B\x09\x0A\x07_unstow\"\x12\x0A\x10DishStowResponse\"\x17\x0A\x15DishGetContextRequest\"\xC5\x10\x0A\x16DishGetContextResponse\x12C\x0A\x0Bdevice_info\x18\x01 \x01(\x0B2\x1D.SpaceX.API.Device.DeviceInfoH\x00R\x0AdeviceInfo\x88\x01\x01\x12F\x0A\x0Cdevice_state\x18\x07 \x01(\x0B2\x1E.SpaceX.API.Device.DeviceStateH\x01R\x0BdeviceState\x88\x01\x01\x126\x0A\x14obstruction_fraction\x18\x02 \x01(\x02H\x02R\x13obstructionFraction\x88\x01\x01\x12.\x0A\x10obstruction_time\x18\x14 \x01(\x02H\x03R\x0FobstructionTime\x88\x01\x01\x123\x0A\x13obstruction_valid_s\x18\x03 \x01(\x02H\x04R\x11obstructionValidS\x88\x01\x01\x124\x0A\x13obstruction_current\x18\x0C \x01(\x08H\x05R\x12obstructionCurrent\x88\x01\x01\x12\x1C\x0A\x07cell_id\x18\x04 \x01(\x0DH\x06R\x06cellId\x88\x01\x01\x12#\x0A\x0Bpop_rack_id\x18\x05 \x01(\x0DH\x07R\x09popRackId\x88\x01\x01\x125\x0A\x14initial_satellite_id\x18\x08 \x01(\x0DH\x08R\x12initialSatelliteId\x88\x01\x01\x121\x0A\x12initial_gateway_id\x18\x09 \x01(\x0DH\x09R\x10initialGatewayId\x88\x01\x01\x12)\x0A\x0Eon_backup_beam\x18\x0A \x01(\x08H\x0AR\x0ConBackupBeam\x88\x01\x01\x122\x0A\x13seconds_to_slot_end\x18\x06 \x01(\x02H\x0BR\x10secondsToSlotEnd\x88\x01\x01\x12;\x0A\x17debug_telemetry_enabled\x18\x0B \x01(\x08H\x0CR\x15debugTelemetryEnabled\x88\x01\x01\x12@\x0A\x1Bpop_ping_drop_rate_15s_mean\x18\x0D \x01(\x02H\x0DR\x16popPingDropRate15sMean\x88\x01\x01\x12B\x0A\x1Cpop_ping_latency_ms_15s_mean\x18\x0E \x01(\x02H\x0ER\x17popPingLatencyMs15sMean\x88\x01\x01\x12C\x0A\x1Cseconds_since_last_1s_outage\x18\x0F \x01(\x02H\x0FR\x18secondsSinceLast1sOutage\x88\x01\x01\x12C\x0A\x1Cseconds_since_last_2s_outage\x18\x10 \x01(\x02H\x10R\x18secondsSinceLast2sOutage\x88\x01\x01\x12C\x0A\x1Cseconds_since_last_5s_outage\x18\x11 \x01(\x02H\x11R\x18secondsSinceLast5sOutage\x88\x01\x01\x12E\x0A\x1Dseconds_since_last_15s_outage\x18\x12 \x01(\x02H\x12R\x19secondsSinceLast15sOutage\x88\x01\x01\x12E\x0A\x1Dseconds_since_last_60s_outage\x18\x13 \x01(\x02H\x13R\x19secondsSinceLast60sOutage\x88\x01\x01\x122\x0A\x13outage_1s_within_1h\x18\x17 \x01(\x08H\x14R\x10outage1sWithin1h\x88\x01\x01\x122\x0A\x13outage_2s_within_1h\x18\x18 \x01(\x08H\x15R\x10outage2sWithin1h\x88\x01\x01\x122\x0A\x13outage_5s_within_1h\x18\x19 \x01(\x08H\x16R\x10outage5sWithin1h\x88\x01\x01\x12`\x0A\x10disablement_code\x18\x15 \x01(\x0E20.SpaceX.API.Satellites.Network.UtDisablementCodeH\x17R\x0FdisablementCode\x88\x01\x01\x122\x0A\x13ku_mac_active_ratio\x18\x16 \x01(\x02H\x18R\x10kuMacActiveRatio\x88\x01\x01B\x0E\x0A\x0C_device_infoB\x0F\x0A\x0D_device_stateB\x17\x0A\x15_obstruction_fractionB\x13\x0A\x11_obstruction_timeB\x16\x0A\x14_obstruction_valid_sB\x16\x0A\x14_obstruction_currentB\x0A\x0A\x08_cell_idB\x0E\x0A\x0C_pop_rack_idB\x17\x0A\x15_initial_satellite_idB\x15\x0A\x13_initial_gateway_idB\x11\x0A\x0F_on_backup_beamB\x16\x0A\x14_seconds_to_slot_endB\x1A\x0A\x18_debug_telemetry_enabledB\x1E\x0A\x1C_pop_ping_drop_rate_15s_meanB\x1F\x0A\x1D_pop_ping_latency_ms_15s_meanB\x1F\x0A\x1D_seconds_since_last_1s_outageB\x1F\x0A\x1D_seconds_since_last_2s_outageB\x1F\x0A\x1D_seconds_since_last_5s_outageB \x0A\x1E_seconds_since_last_15s_outageB \x0A\x1E_seconds_since_last_60s_outageB\x16\x0A\x14_outage_1s_within_1hB\x16\x0A\x14_outage_2s_within_1hB\x16\x0A\x14_outage_5s_within_1hB\x13\x0A\x11_disablement_codeB\x16\x0A\x14_ku_mac_active_ratio\"\xEF\x03\x0A\x0ADishOutage\x12>\x0A\x05cause\x18\x01 \x01(\x0E2#.SpaceX.API.Device.DishOutage.CauseH\x00R\x05cause\x88\x01\x01\x121\x0A\x12start_timestamp_ns\x18\x02 \x01(\x03H\x01R\x10startTimestampNs\x88\x01\x01\x12\$\x0A\x0Bduration_ns\x18\x03 \x01(\x04H\x02R\x0AdurationNs\x88\x01\x01\x12\"\x0A\x0Adid_switch\x18\x04 \x01(\x08H\x03R\x09didSwitch\x88\x01\x01\"\xE3\x01\x0A\x05Cause\x12\x0B\x0A\x07UNKNOWN\x10\x00\x12\x0B\x0A\x07BOOTING\x10\x01\x12\x0A\x0A\x06STOWED\x10\x02\x12\x14\x0A\x10THERMAL_SHUTDOWN\x10\x03\x12\x0F\x0A\x0BNO_SCHEDULE\x10\x04\x12\x0B\x0A\x07NO_SATS\x10\x05\x12\x0E\x0A\x0AOBSTRUCTED\x10\x06\x12\x0F\x0A\x0BNO_DOWNLINK\x10\x07\x12\x0C\x0A\x08NO_PINGS\x10\x08\x12\x15\x0A\x11ACTUATOR_ACTIVITY\x10\x09\x12\x0E\x0A\x0ACABLE_TEST\x10\x0A\x12\x0C\x0A\x08SLEEPING\x10\x0B\x12\x1C\x0A\x18MOVING_WHILE_NOT_ALLOWED\x10\x0CB\x08\x0A\x06_causeB\x15\x0A\x13_start_timestamp_nsB\x0E\x0A\x0C_duration_nsB\x0D\x0A\x0B_did_switch\"\xE5\x02\x0A\x16DishGetHistoryResponse\x12\x1D\x0A\x07current\x18\x01 \x01(\x04H\x00R\x07current\x88\x01\x01\x12,\x0A\x12pop_ping_drop_rate\x18\xE9\x07 \x03(\x02R\x0FpopPingDropRate\x12.\x0A\x13pop_ping_latency_ms\x18\xEA\x07 \x03(\x02R\x10popPingLatencyMs\x127\x0A\x17downlink_throughput_bps\x18\xEB\x07 \x03(\x02R\x15downlinkThroughputBps\x123\x0A\x15uplink_throughput_bps\x18\xEC\x07 \x03(\x02R\x13uplinkThroughputBps\x128\x0A\x07outages\x18\xF1\x07 \x03(\x0B2\x1D.SpaceX.API.Device.DishOutageR\x07outages\x12\x1A\x0A\x08power_in\x18\xF2\x07 \x03(\x02R\x07powerInB\x0A\x0A\x08_current\"\x86\x19\x0A\x15DishGetStatusResponse\x12C\x0A\x0Bdevice_info\x18\x01 \x01(\x0B2\x1D.SpaceX.API.Device.DeviceInfoH\x00R\x0AdeviceInfo\x88\x01\x01\x12F\x0A\x0Cdevice_state\x18\x02 \x01(\x0B2\x1E.SpaceX.API.Device.DeviceStateH\x01R\x0BdeviceState\x88\x01\x01\x12;\x0A\x06alerts\x18\xED\x07 \x01(\x0B2\x1D.SpaceX.API.Device.DishAlertsH\x02R\x06alerts\x88\x01\x01\x12;\x0A\x06outage\x18\xF6\x07 \x01(\x0B2\x1D.SpaceX.API.Device.DishOutageH\x03R\x06outage\x88\x01\x01\x12B\x0A\x09gps_stats\x18\xF7\x07 \x01(\x0B2\x1F.SpaceX.API.Device.DishGpsStatsH\x04R\x08gpsStats\x88\x01\x01\x12H\x0A\x1Eseconds_to_first_nonempty_slot\x18\xEA\x07 \x01(\x02H\x05R\x1AsecondsToFirstNonemptySlot\x88\x01\x01\x121\x0A\x12pop_ping_drop_rate\x18\xEB\x07 \x01(\x02H\x06R\x0FpopPingDropRate\x88\x01\x01\x12<\x0A\x17downlink_throughput_bps\x18\xEF\x07 \x01(\x02H\x07R\x15downlinkThroughputBps\x88\x01\x01\x128\x0A\x15uplink_throughput_bps\x18\xF0\x07 \x01(\x02H\x08R\x13uplinkThroughputBps\x88\x01\x01\x123\x0A\x13pop_ping_latency_ms\x18\xF1\x07 \x01(\x02H\x09R\x10popPingLatencyMs\x88\x01\x01\x12Z\x0A\x11obstruction_stats\x18\xEC\x07 \x01(\x0B2'.SpaceX.API.Device.DishObstructionStatsH\x0AR\x10obstructionStats\x88\x01\x01\x12+\x0A\x0Estow_requested\x18\xF2\x07 \x01(\x08H\x0BR\x0DstowRequested\x88\x01\x01\x128\x0A\x15boresight_azimuth_deg\x18\xF3\x07 \x01(\x02H\x0CR\x13boresightAzimuthDeg\x88\x01\x01\x12<\x0A\x17boresight_elevation_deg\x18\xF4\x07 \x01(\x02H\x0DR\x15boresightElevationDeg\x88\x01\x01\x12*\x0A\x0Eeth_speed_mbps\x18\xF8\x07 \x01(\x05H\x0ER\x0CethSpeedMbps\x88\x01\x01\x12Q\x0A\x0Emobility_class\x18\xF9\x07 \x01(\x0E2\$.SpaceX.API.Device.UserMobilityClassH\x0FR\x0DmobilityClass\x88\x01\x01\x12<\x0A\x18is_snr_above_noise_floor\x18\xFA\x07 \x01(\x08H\x10R\x14isSnrAboveNoiseFloor\x88\x01\x01\x12K\x0A\x0Cready_states\x18\xFB\x07 \x01(\x0B2\".SpaceX.API.Device.DishReadyStatesH\x11R\x0BreadyStates\x88\x01\x01\x12U\x0A\x10class_of_service\x18\xFC\x07 \x01(\x0E2%.SpaceX.API.Device.UserClassOfServiceH\x12R\x0EclassOfService\x88\x01\x01\x12`\x0A\x15software_update_state\x18\xFD\x07 \x01(\x0E2&.SpaceX.API.Device.SoftwareUpdateStateH\x13R\x13softwareUpdateState\x88\x01\x01\x128\x0A\x15swupdate_reboot_ready\x18\x86\x08 \x01(\x08H\x14R\x13swupdateRebootReady\x88\x01\x01\x12J\x0A\x0Dreboot_reason\x18\x88\x08 \x01(\x0E2\x1F.SpaceX.API.Device.RebootReasonH\x15R\x0CrebootReason\x88\x01\x01\x12`\x0A\x15software_update_stats\x18\x82\x08 \x01(\x0B2&.SpaceX.API.Device.SoftwareUpdateStatsH\x16R\x13softwareUpdateStats\x88\x01\x01\x12P\x0A\x0Falignment_stats\x18\x83\x08 \x01(\x0B2!.SpaceX.API.Device.AlignmentStatsH\x17R\x0EalignmentStats\x88\x01\x01\x12;\x0A\x17is_snr_persistently_low\x18\xFE\x07 \x01(\x08H\x18R\x14isSnrPersistentlyLow\x88\x01\x01\x12J\x0A\x0Dhas_actuators\x18\xFF\x07 \x01(\x0E2\x1F.SpaceX.API.Device.HasActuatorsH\x19R\x0ChasActuators\x88\x01\x01\x12a\x0A\x10disablement_code\x18\x80\x08 \x01(\x0E20.SpaceX.API.Satellites.Network.UtDisablementCodeH\x1AR\x0FdisablementCode\x88\x01\x01\x12,\x0A\x0Fhas_signed_cals\x18\x81\x08 \x01(\x08H\x1BR\x0DhasSignedCals\x88\x01\x01\x12;\x0A\x06config\x18\xD0\x0F \x01(\x0B2\x1D.SpaceX.API.Device.DishConfigH\x1CR\x06config\x88\x01\x01\x12~\x0A\x1Finitialization_duration_seconds\x18\x84\x08 \x01(\x0B20.SpaceX.API.Device.InitializationDurationSecondsH\x1DR\x1DinitializationDurationSeconds\x88\x01\x01\x12.\x0A\x10is_cell_disabled\x18\x85\x08 \x01(\x08H\x1ER\x0EisCellDisabled\x88\x01\x01\x12X\x0A&seconds_until_swupdate_reboot_possible\x18\x87\x08 \x01(\x05H\x1FR\"secondsUntilSwupdateRebootPossible\x88\x01\x01\x125\x0A\x14high_power_test_mode\x18\x89\x08 \x01(\x08H R\x11highPowerTestMode\x88\x01\x01\x12,\x0A\x11connected_routers\x18\x90\x08 \x03(\x09R\x10connectedRouters\x12>\x0A\x09plc_stats\x18\x91\x08 \x01(\x0B2\x1B.SpaceX.API.Device.PLCStatsH!R\x08plcStats\x88\x01\x01B\x0E\x0A\x0C_device_infoB\x0F\x0A\x0D_device_stateB\x09\x0A\x07_alertsB\x09\x0A\x07_outageB\x0C\x0A\x0A_gps_statsB!\x0A\x1F_seconds_to_first_nonempty_slotB\x15\x0A\x13_pop_ping_drop_rateB\x1A\x0A\x18_downlink_throughput_bpsB\x18\x0A\x16_uplink_throughput_bpsB\x16\x0A\x14_pop_ping_latency_msB\x14\x0A\x12_obstruction_statsB\x11\x0A\x0F_stow_requestedB\x18\x0A\x16_boresight_azimuth_degB\x1A\x0A\x18_boresight_elevation_degB\x11\x0A\x0F_eth_speed_mbpsB\x11\x0A\x0F_mobility_classB\x1B\x0A\x19_is_snr_above_noise_floorB\x0F\x0A\x0D_ready_statesB\x13\x0A\x11_class_of_serviceB\x18\x0A\x16_software_update_stateB\x18\x0A\x16_swupdate_reboot_readyB\x10\x0A\x0E_reboot_reasonB\x18\x0A\x16_software_update_statsB\x12\x0A\x10_alignment_statsB\x1A\x0A\x18_is_snr_persistently_lowB\x10\x0A\x0E_has_actuatorsB\x13\x0A\x11_disablement_codeB\x12\x0A\x10_has_signed_calsB\x09\x0A\x07_configB\"\x0A _initialization_duration_secondsB\x13\x0A\x11_is_cell_disabledB)\x0A'_seconds_until_swupdate_reboot_possibleB\x17\x0A\x15_high_power_test_modeB\x0C\x0A\x0A_plc_stats\"\x1E\x0A\x1CDishGetObstructionMapRequest\"\x8B\x03\x0A\x1DDishGetObstructionMapResponse\x12\x1E\x0A\x08num_rows\x18\x01 \x01(\x0DH\x00R\x07numRows\x88\x01\x01\x12\x1E\x0A\x08num_cols\x18\x02 \x01(\x0DH\x01R\x07numCols\x88\x01\x01\x12\x10\x0A\x03snr\x18\x03 \x03(\x02R\x03snr\x12/\x0A\x11min_elevation_deg\x18\x04 \x01(\x02H\x02R\x0FminElevationDeg\x88\x01\x01\x12'\x0A\x0Dmax_theta_deg\x18\x05 \x01(\x02H\x03R\x0BmaxThetaDeg\x88\x01\x01\x12d\x0A\x13map_reference_frame\x18\x06 \x01(\x0E2/.SpaceX.API.Device.ObstructionMapReferenceFrameH\x04R\x11mapReferenceFrame\x88\x01\x01B\x0B\x0A\x09_num_rowsB\x0B\x0A\x09_num_colsB\x14\x0A\x12_min_elevation_degB\x10\x0A\x0E_max_theta_degB\x16\x0A\x14_map_reference_frame\"\xE7\x0A\x0A\x0ADishAlerts\x12&\x0A\x0Cmotors_stuck\x18\x01 \x01(\x08H\x00R\x0BmotorsStuck\x88\x01\x01\x12.\x0A\x10thermal_throttle\x18\x03 \x01(\x08H\x01R\x0FthermalThrottle\x88\x01\x01\x12.\x0A\x10thermal_shutdown\x18\x02 \x01(\x08H\x02R\x0FthermalShutdown\x88\x01\x01\x128\x0A\x16mast_not_near_vertical\x18\x05 \x01(\x08H\x03R\x13mastNotNearVertical\x88\x01\x01\x124\x0A\x13unexpected_location\x18\x04 \x01(\x08H\x04R\x12unexpectedLocation\x88\x01\x01\x125\x0A\x14slow_ethernet_speeds\x18\x06 \x01(\x08H\x05R\x12slowEthernetSpeeds\x88\x01\x01\x12<\x0A\x18slow_ethernet_speeds_100\x18\x12 \x01(\x08H\x06R\x15slowEthernetSpeeds100\x88\x01\x01\x12\x1D\x0A\x07roaming\x18\x07 \x01(\x08H\x07R\x07roaming\x88\x01\x01\x12,\x0A\x0Finstall_pending\x18\x08 \x01(\x08H\x08R\x0EinstallPending\x88\x01\x01\x12\"\x0A\x0Ais_heating\x18\x09 \x01(\x08H\x09R\x09isHeating\x88\x01\x01\x12F\x0A\x1Dpower_supply_thermal_throttle\x18\x0A \x01(\x08H\x0AR\x1ApowerSupplyThermalThrottle\x88\x01\x01\x120\x0A\x12is_power_save_idle\x18\x0B \x01(\x08H\x0BR\x0FisPowerSaveIdle\x88\x01\x01\x12:\x0A\x17moving_while_not_mobile\x18\x0C \x01(\x08H\x0CR\x14movingWhileNotMobile\x88\x01\x01\x12?\x0A\x1Amoving_too_fast_for_policy\x18\x0F \x01(\x08H\x0DR\x16movingTooFastForPolicy\x88\x01\x01\x12+\x0A\x0Fdbf_telem_stale\x18\x0E \x01(\x08H\x0ER\x0DdbfTelemStale\x88\x01\x01\x12/\x0A\x11low_motor_current\x18\x10 \x01(\x08H\x0FR\x0FlowMotorCurrent\x88\x01\x01\x12B\x0A\x1Blower_signal_than_predicted\x18\x11 \x01(\x08H\x10R\x18lowerSignalThanPredicted\x88\x01\x01\x127\x0A\x15obstruction_map_reset\x18\x13 \x01(\x08H\x11R\x13obstructionMapReset\x88\x01\x01B\x0F\x0A\x0D_motors_stuckB\x13\x0A\x11_thermal_throttleB\x13\x0A\x11_thermal_shutdownB\x19\x0A\x17_mast_not_near_verticalB\x16\x0A\x14_unexpected_locationB\x17\x0A\x15_slow_ethernet_speedsB\x1B\x0A\x19_slow_ethernet_speeds_100B\x0A\x0A\x08_roamingB\x12\x0A\x10_install_pendingB\x0D\x0A\x0B_is_heatingB \x0A\x1E_power_supply_thermal_throttleB\x15\x0A\x13_is_power_save_idleB\x1A\x0A\x18_moving_while_not_mobileB\x1D\x0A\x1B_moving_too_fast_for_policyB\x12\x0A\x10_dbf_telem_staleB\x14\x0A\x12_low_motor_currentB\x1E\x0A\x1C_lower_signal_than_predictedB\x18\x0A\x16_obstruction_map_reset\"\xD1\x01\x0A\x0FDishReadyStates\x12\x17\x0A\x04cady\x18\x01 \x01(\x08H\x00R\x04cady\x88\x01\x01\x12\x15\x0A\x03scp\x18\x02 \x01(\x08H\x01R\x03scp\x88\x01\x01\x12\x17\x0A\x04l1l2\x18\x03 \x01(\x08H\x02R\x04l1l2\x88\x01\x01\x12\x17\x0A\x04xphy\x18\x04 \x01(\x08H\x03R\x04xphy\x88\x01\x01\x12\x15\x0A\x03aap\x18\x05 \x01(\x08H\x04R\x03aap\x88\x01\x01\x12\x13\x0A\x02rf\x18\x06 \x01(\x08H\x05R\x02rf\x88\x01\x01B\x07\x0A\x05_cadyB\x06\x0A\x04_scpB\x07\x0A\x05_l1l2B\x07\x0A\x05_xphyB\x06\x0A\x04_aapB\x05\x0A\x03_rf\"\xEA\x01\x0A\x0CDishGpsStats\x12 \x0A\x09gps_valid\x18\x01 \x01(\x08H\x00R\x08gpsValid\x88\x01\x01\x12\x1E\x0A\x08gps_sats\x18\x02 \x01(\x0DH\x01R\x07gpsSats\x88\x01\x01\x120\x0A\x12no_sats_after_ttff\x18\x03 \x01(\x08H\x02R\x0FnoSatsAfterTtff\x88\x01\x01\x12\$\x0A\x0Binhibit_gps\x18\x04 \x01(\x08H\x03R\x0AinhibitGps\x88\x01\x01B\x0C\x0A\x0A_gps_validB\x0B\x0A\x09_gps_satsB\x15\x0A\x13_no_sats_after_ttffB\x0E\x0A\x0C_inhibit_gps\"\xC2\x02\x0A\x13SoftwareUpdateStats\x12_\x0A\x15software_update_state\x18\x01 \x01(\x0E2&.SpaceX.API.Device.SoftwareUpdateStateH\x00R\x13softwareUpdateState\x88\x01\x01\x12=\x0A\x18software_update_progress\x18\x02 \x01(\x02H\x01R\x16softwareUpdateProgress\x88\x01\x01\x129\x0A\x16update_requires_reboot\x18\x03 \x01(\x08H\x02R\x14updateRequiresReboot\x88\x01\x01B\x18\x0A\x16_software_update_stateB\x1B\x0A\x19_software_update_progressB\x19\x0A\x17_update_requires_reboot\"\xF9\x06\x0A\x0EAlignmentStats\x12I\x0A\x0Dhas_actuators\x18\x01 \x01(\x0E2\x1F.SpaceX.API.Device.HasActuatorsH\x00R\x0ChasActuators\x88\x01\x01\x12L\x0A\x0Eactuator_state\x18\x02 \x01(\x0E2 .SpaceX.API.Device.ActuatorStateH\x01R\x0DactuatorState\x88\x01\x01\x12)\x0A\x0Etilt_angle_deg\x18\x03 \x01(\x02H\x02R\x0CtiltAngleDeg\x88\x01\x01\x127\x0A\x15boresight_azimuth_deg\x18\x04 \x01(\x02H\x03R\x13boresightAzimuthDeg\x88\x01\x01\x12;\x0A\x17boresight_elevation_deg\x18\x05 \x01(\x02H\x04R\x15boresightElevationDeg\x88\x01\x01\x12F\x0A\x1Ddesired_boresight_azimuth_deg\x18\x08 \x01(\x02H\x05R\x1AdesiredBoresightAzimuthDeg\x88\x01\x01\x12J\x0A\x1Fdesired_boresight_elevation_deg\x18\x09 \x01(\x02H\x06R\x1CdesiredBoresightElevationDeg\x88\x01\x01\x12k\x0A\x19attitude_estimation_state\x18\x06 \x01(\x0E2*.SpaceX.API.Device.AttitudeEstimationStateH\x07R\x17attitudeEstimationState\x88\x01\x01\x12=\x0A\x18attitude_uncertainty_deg\x18\x07 \x01(\x02H\x08R\x16attitudeUncertaintyDeg\x88\x01\x01B\x10\x0A\x0E_has_actuatorsB\x11\x0A\x0F_actuator_stateB\x11\x0A\x0F_tilt_angle_degB\x18\x0A\x16_boresight_azimuth_degB\x1A\x0A\x18_boresight_elevation_degB \x0A\x1E_desired_boresight_azimuth_degB\"\x0A _desired_boresight_elevation_degB\x1C\x0A\x1A_attitude_estimation_stateB\x1B\x0A\x19_attitude_uncertainty_deg\"\xDD\x02\x0A\x14DishObstructionStats\x126\x0A\x14currently_obstructed\x18\x05 \x01(\x08H\x00R\x13currentlyObstructed\x88\x01\x01\x124\x0A\x13fraction_obstructed\x18\x01 \x01(\x02H\x01R\x12fractionObstructed\x88\x01\x01\x12,\x0A\x0Ftime_obstructed\x18\x09 \x01(\x02H\x02R\x0EtimeObstructed\x88\x01\x01\x12\x1C\x0A\x07valid_s\x18\x04 \x01(\x02H\x03R\x06validS\x88\x01\x01\x12(\x0A\x0Dpatches_valid\x18\x0A \x01(\x0DH\x04R\x0CpatchesValid\x88\x01\x01B\x17\x0A\x15_currently_obstructedB\x16\x0A\x14_fraction_obstructedB\x12\x0A\x10_time_obstructedB\x0A\x0A\x08_valid_sB\x10\x0A\x0E_patches_valid\"\xA8\x05\x0A\x1DInitializationDurationSeconds\x12<\x0A\x17attitude_initialization\x18\x01 \x01(\x05H\x00R\x16attitudeInitialization\x88\x01\x01\x12*\x0A\x0Eburst_detected\x18\x02 \x01(\x05H\x01R\x0DburstDetected\x88\x01\x01\x12(\x0A\x0Dekf_converged\x18\x03 \x01(\x05H\x02R\x0CekfConverged\x88\x01\x01\x12&\x0A\x0Cfirst_cplane\x18\x04 \x01(\x05H\x03R\x0BfirstCplane\x88\x01\x01\x12)\x0A\x0Efirst_pop_ping\x18\x05 \x01(\x05H\x04R\x0CfirstPopPing\x88\x01\x01\x12 \x0A\x09gps_valid\x18\x06 \x01(\x05H\x05R\x08gpsValid\x88\x01\x01\x127\x0A\x15initial_network_entry\x18\x07 \x01(\x05H\x06R\x13initialNetworkEntry\x88\x01\x01\x12.\x0A\x10network_schedule\x18\x08 \x01(\x05H\x07R\x0FnetworkSchedule\x88\x01\x01\x12\x1E\x0A\x08rf_ready\x18\x09 \x01(\x05H\x08R\x07rfReady\x88\x01\x01\x120\x0A\x11stable_connection\x18\x0A \x01(\x05H\x09R\x10stableConnection\x88\x01\x01B\x1A\x0A\x18_attitude_initializationB\x11\x0A\x0F_burst_detectedB\x10\x0A\x0E_ekf_convergedB\x0F\x0A\x0D_first_cplaneB\x11\x0A\x0F_first_pop_pingB\x0C\x0A\x0A_gps_validB\x18\x0A\x16_initial_network_entryB\x13\x0A\x11_network_scheduleB\x0B\x0A\x09_rf_readyB\x14\x0A\x12_stable_connection\"b\x0A\x18DishAuthenticateResponse\x12=\x0A\x04dish\x18\x02 \x01(\x0B2\$.SpaceX.API.Device.ChallengeResponseH\x00R\x04dish\x88\x01\x01B\x07\x0A\x05_dish\"?\x0A\x0FSelfTestRequest\x12\x1F\x0A\x08detailed\x18\x01 \x01(\x08H\x00R\x08detailed\x88\x01\x01B\x0B\x0A\x09_detailed\"b\x0A\x10SelfTestResponse\x12\x1B\x0A\x06passed\x18\x01 \x01(\x08H\x00R\x06passed\x88\x01\x01\x12\x1B\x0A\x06report\x18\x02 \x01(\x09H\x01R\x06report\x88\x01\x01B\x09\x0A\x07_passedB\x09\x0A\x07_report\"\xE2\x02\x0A\x12SetTestModeRequest\x12J\x0A\x07rf_mode\x18\x01 \x01(\x0E2,.SpaceX.API.Device.SetTestModeRequest.RfModeH\x00R\x06rfMode\x88\x01\x01\x12>\x0A\x19disable_loss_of_comm_fdir\x18\xE9\x07 \x01(\x08H\x01R\x15disableLossOfCommFdir\x88\x01\x01\x128\x0A\x15enable_rules_override\x18\xEA\x07 \x01(\x08H\x02R\x13enableRulesOverride\x88\x01\x01\"B\x0A\x06RfMode\x12\x06\x0A\x02RX\x10\x00\x12\x08\x0A\x04IDLE\x10\x01\x12\x06\x0A\x02TX\x10\x02\x12\x07\x0A\x03CAL\x10\x03\x12\x08\x0A\x04USER\x10\x04\x12\x0B\x0A\x06NORMAL\x10\xA4\x03B\x0A\x0A\x08_rf_modeB\x1C\x0A\x1A_disable_loss_of_comm_fdirB\x18\x0A\x16_enable_rules_override\"\x15\x0A\x13SetTestModeResponse\"k\x0A\x14DishSetConfigRequest\x12C\x0A\x0Bdish_config\x18\x01 \x01(\x0B2\x1D.SpaceX.API.Device.DishConfigH\x00R\x0AdishConfig\x88\x01\x01B\x0E\x0A\x0C_dish_config\"\xA8\x01\x0A\x15DishSetConfigResponse\x12R\x0A\x13updated_dish_config\x18\x01 \x01(\x0B2\x1D.SpaceX.API.Device.DishConfigH\x00R\x11updatedDishConfig\x88\x01\x01\x12\x19\x0A\x05error\x18\x02 \x01(\x09H\x01R\x05error\x88\x01\x01B\x16\x0A\x14_updated_dish_configB\x08\x0A\x06_error\"\x16\x0A\x14DishGetConfigRequest\"l\x0A\x15DishGetConfigResponse\x12C\x0A\x0Bdish_config\x18\x01 \x01(\x0B2\x1D.SpaceX.API.Device.DishConfigH\x00R\x0AdishConfig\x88\x01\x01B\x0E\x0A\x0C_dish_config\"M\x0A\x15DishInhibitGpsRequest\x12\$\x0A\x0Binhibit_gps\x18\x01 \x01(\x08H\x00R\x0AinhibitGps\x88\x01\x01B\x0E\x0A\x0C_inhibit_gps\"N\x0A\x16DishInhibitGpsResponse\x12\$\x0A\x0Binhibit_gps\x18\x01 \x01(\x08H\x00R\x0AinhibitGps\x88\x01\x01B\x0E\x0A\x0C_inhibit_gps\"0\x0A\x12DishGetDataRequest\x12\x13\x0A\x02id\x18\x01 \x01(\x0DH\x00R\x02id\x88\x01\x01B\x05\x0A\x03_id\" \x0A\x1EDishClearObstructionMapRequest\"!\x0A\x1FDishClearObstructionMapResponse\"y\x0A\x1BDishActivateRssiScanRequest\x12K\x0A\x0Ascan_query\x18\x01 \x01(\x0B2'.SpaceX.API.Device.DishActivateRssiScanH\x00R\x09scanQuery\x88\x01\x01B\x0D\x0A\x0B_scan_query\"I\x0A\x1CDishActivateRssiScanResponse\x12\x1D\x0A\x07success\x18\x01 \x01(\x08H\x00R\x07success\x88\x01\x01B\x0A\x0A\x08_success\"\x1E\x0A\x1CDishGetRssiScanResultRequest\"q\x0A\x1DDishGetRssiScanResultResponse\x12E\x0A\x06result\x18\x01 \x01(\x0B2(.SpaceX.API.Device.DishGetRssiScanResultH\x00R\x06result\x88\x01\x01B\x09\x0A\x07_result\"I\x0A\x17DishFactoryResetRequest\x12 \x0A\x09app_reset\x18\x01 \x01(\x08H\x00R\x08appReset\x88\x01\x01B\x0C\x0A\x0A_app_reset\"\x1A\x0A\x18DishFactoryResetResponse\"?\x0A\x12ResetButtonRequest\x12\x1D\x0A\x07pressed\x18\x01 \x01(\x08H\x00R\x07pressed\x88\x01\x01B\x0A\x0A\x08_pressed\"\x15\x0A\x13ResetButtonResponse\"\xB0\x08\x0A\x08PLCStats\x12(\x0A\x0Dreceiving_plc\x18\x01 \x01(\x08H\x00R\x0CreceivingPlc\x88\x01\x01\x126\x0A\x15average_time_to_empty\x18\x02 \x01(\x0DH\x01R\x12averageTimeToEmpty\x88\x01\x01\x124\x0A\x14average_time_to_full\x18\x03 \x01(\x0DH\x02R\x11averageTimeToFull\x88\x01\x01\x12*\x0A\x0Ebattery_health\x18\x04 \x01(\x0DH\x03R\x0DbatteryHealth\x88\x01\x01\x125\x0A\x14hardware_revision_id\x18\x05 \x01(\x0DH\x04R\x12hardwareRevisionId\x88\x01\x01\x120\x0A\x11permanent_failure\x18\x06 \x01(\x08H\x05R\x10permanentFailure\x88\x01\x01\x12F\x0A\x0Cport_1_stats\x18\x07 \x01(\x0B2\x1F.SpaceX.API.Device.PLCPortStatsH\x06R\x0Aport1Stats\x88\x01\x01\x12F\x0A\x0Cport_2_stats\x18\x08 \x01(\x0B2\x1F.SpaceX.API.Device.PLCPortStatsH\x07R\x0Aport2Stats\x88\x01\x01\x12F\x0A\x0Cport_3_stats\x18\x09 \x01(\x0B2\x1F.SpaceX.API.Device.PLCPortStatsH\x08R\x0Aport3Stats\x88\x01\x01\x12T\x0A\x0Cplc_revision\x18\x0A \x01(\x0E2,.SpaceX.API.Device.PLCStats.ProtocolRevisionH\x09R\x0BplcRevision\x88\x01\x01\x121\x0A\x12safety_mode_active\x18\x0B \x01(\x08H\x0AR\x10safetyModeActive\x88\x01\x01\x12+\x0A\x0Fstate_of_charge\x18\x0C \x01(\x0DH\x0BR\x0DstateOfCharge\x88\x01\x01\x129\x0A\x16thermal_throttle_level\x18\x0D \x01(\x0DH\x0CR\x14thermalThrottleLevel\x88\x01\x01\"\x1D\x0A\x10ProtocolRevision\x12\x09\x0A\x05REV_D\x10\x00B\x10\x0A\x0E_receiving_plcB\x18\x0A\x16_average_time_to_emptyB\x17\x0A\x15_average_time_to_fullB\x11\x0A\x0F_battery_healthB\x17\x0A\x15_hardware_revision_idB\x14\x0A\x12_permanent_failureB\x0F\x0A\x0D_port_1_statsB\x0F\x0A\x0D_port_2_statsB\x0F\x0A\x0D_port_3_statsB\x0F\x0A\x0D_plc_revisionB\x15\x0A\x13_safety_mode_activeB\x12\x0A\x10_state_of_chargeB\x19\x0A\x17_thermal_throttle_level\"\xD9\x01\x0A\x0CPLCPortStats\x12\x19\x0A\x05power\x18\x01 \x01(\x0DH\x00R\x05power\x88\x01\x01\x12G\x0A\x06status\x18\x02 \x01(\x0E2*.SpaceX.API.Device.PLCPortStats.PortStatusH\x01R\x06status\x88\x01\x01\"P\x0A\x0APortStatus\x12\x0C\x0A\x08INACTIVE\x10\x00\x12\x0C\x0A\x08CHARGING\x10\x01\x12\x0F\x0A\x0BDISCHARGING\x10\x02\x12\x15\x0A\x11MOISTURE_DETECTED\x10\x03B\x08\x0A\x06_powerB\x09\x0A\x07_status*<\x0A\x11UserMobilityClass\x12\x0E\x0A\x0ASTATIONARY\x10\x00\x12\x0B\x0A\x07NOMADIC\x10\x01\x12\x0A\x0A\x06MOBILE\x10\x02*P\x0A\x1CObstructionMapReferenceFrame\x12\x11\x0A\x0DFRAME_UNKNOWN\x10\x00\x12\x0F\x0A\x0BFRAME_EARTH\x10\x01\x12\x0C\x0A\x08FRAME_UT\x10\x02*\xAC\x01\x0A\x13SoftwareUpdateState\x12!\x0A\x1DSOFTWARE_UPDATE_STATE_UNKNOWN\x10\x00\x12\x08\x0A\x04IDLE\x10\x01\x12\x0C\x0A\x08FETCHING\x10\x02\x12\x0D\x0A\x09PRE_CHECK\x10\x03\x12\x0B\x0A\x07WRITING\x10\x04\x12\x0E\x0A\x0APOST_CHECK\x10\x05\x12\x13\x0A\x0FREBOOT_REQUIRED\x10\x06\x12\x0C\x0A\x08DISABLED\x10\x07\x12\x0B\x0A\x07FAULTED\x10\x08*\x7F\x0A\x12UserClassOfService\x12!\x0A\x1DUNKNOWN_USER_CLASS_OF_SERVICE\x10\x00\x12\x0C\x0A\x08CONSUMER\x10\x01\x12\x0C\x0A\x08BUSINESS\x10\x02\x12\x11\x0A\x0DBUSINESS_PLUS\x10\x03\x12\x17\x0A\x13COMMERCIAL_AVIATION\x10\x04*V\x0A\x0CHasActuators\x12\x19\x0A\x15HAS_ACTUATORS_UNKNOWN\x10\x00\x12\x15\x0A\x11HAS_ACTUATORS_YES\x10\x01\x12\x14\x0A\x10HAS_ACTUATORS_NO\x10\x02*\xF2\x02\x0A\x0DActuatorState\x12\x17\x0A\x13ACTUATOR_STATE_IDLE\x10\x00\x12\x1C\x0A\x18ACTUATOR_STATE_FULL_TILT\x10\x01\x12\x19\x0A\x15ACTUATOR_STATE_ROTATE\x10\x02\x12\x17\x0A\x13ACTUATOR_STATE_TILT\x10\x03\x12\"\x0A\x1EACTUATOR_STATE_UNWRAP_POSITIVE\x10\x04\x12\"\x0A\x1EACTUATOR_STATE_UNWRAP_NEGATIVE\x10\x05\x12!\x0A\x1DACTUATOR_STATE_TILT_TO_STOWED\x10\x06\x12\x1A\x0A\x16ACTUATOR_STATE_FAULTED\x10\x07\x12\"\x0A\x1EACTUATOR_STATE_WAIT_TIL_STATIC\x10\x08\x12+\x0A'ACTUATOR_STATE_DRIVE_TO_MOBILE_POSITION\x10\x09\x12\x1E\x0A\x1AACTUATOR_STATE_MOBILE_WAIT\x10\x0A*\x81\x01\x0A\x17AttitudeEstimationState\x12\x10\x0A\x0CFILTER_RESET\x10\x00\x12\x16\x0A\x12FILTER_UNCONVERGED\x10\x01\x12\x14\x0A\x10FILTER_CONVERGED\x10\x02\x12\x12\x0A\x0EFILTER_FAULTED\x10\x03\x12\x12\x0A\x0EFILTER_INVALID\x10\x04*\xA8\x04\x0A\x0CRebootReason\x12\x16\x0A\x12REBOOT_REASON_NONE\x10\x00\x12\x18\x0A\x14REBOOT_REASON_MANUAL\x10\x01\x12\x1E\x0A\x1AREBOOT_REASON_LOSS_OF_COMM\x10\x02\x12\x1E\x0A\x1AREBOOT_REASON_SWUPDATE_NOW\x10\x03\x12\$\x0A REBOOT_REASON_SWUPDATE_SCHEDULED\x10\x04\x12\x15\x0A\x11REBOOT_REASON_APP\x10\x05\x12\x15\x0A\x11REBOOT_REASON_EMC\x10\x06\x12\x1F\x0A\x1BREBOOT_REASON_FACTORY_RESET\x10\x07\x12\x1B\x0A\x17REBOOT_REASON_TEST_CASE\x10\x08\x12#\x0A\x1FREBOOT_REASON_THERMAL_POWER_CUT\x10\x09\x12'\x0A#REBOOT_REASON_CRITICAL_PROCESS_DIED\x10\x0A\x12\x1D\x0A\x19REBOOT_REASON_NO_RF_READY\x10\x0B\x12(\x0A\$REBOOT_REASON_POSTPONED_LOSS_OF_COMM\x10\x0C\x12%\x0A!REBOOT_REASON_SWUPDATE_STATIONARY\x10\x0D\x12\x1B\x0A\x17REBOOT_REASON_AAP_CRASH\x10\x0E\x12\x1B\x0A\x17REBOOT_REASON_XP70_SACS\x10\x0F\x12\x1C\x0A\x18REBOOT_REASON_INE_FAILED\x10\x10*C\x0A\x09DishState\x12\x0B\x0A\x07UNKNOWN\x10\x00\x12\x0D\x0A\x09CONNECTED\x10\x01\x12\x0D\x0A\x09SEARCHING\x10\x02\x12\x0B\x0A\x07BOOTING\x10\x03B\x17Z\x15spacex.com/api/deviceb\x06proto3", true);

        static::$is_initialized = true;
    }
}
