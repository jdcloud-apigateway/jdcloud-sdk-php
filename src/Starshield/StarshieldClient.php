<?php
/**
 * Starshield
 *
 * @category Jdcloud
 * @package  Jdcloud\Starshield
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Starshield;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with starshield.
 *
 * @method \Jdcloud\Result dashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dashboardAsync(array $args = [])
 * @method \Jdcloud\Result topK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise topKAsync(array $args = [])
 * @method \Jdcloud\Result bandwidthTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bandwidthTopKAsync(array $args = [])
 * @method \Jdcloud\Result dateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result dateHistogramBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dateHistogramBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result bandwidthTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bandwidthTrendAsync(array $args = [])
 * @method \Jdcloud\Result cacheTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cacheTopKAsync(array $args = [])
 * @method \Jdcloud\Result cacheBandwidthTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cacheBandwidthTopKAsync(array $args = [])
 * @method \Jdcloud\Result cacheDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cacheDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result cacheDateHistogramBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cacheDateHistogramBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result firewallTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise firewallTopKAsync(array $args = [])
 * @method \Jdcloud\Result firewallDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise firewallDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result qpsZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise qpsZoneAsync(array $args = [])
 * @method \Jdcloud\Result xps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise xpsAsync(array $args = [])
 * @method \Jdcloud\Result qpsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise qpsInstanceAsync(array $args = [])
 * @method \Jdcloud\Result bpsZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bpsZoneAsync(array $args = [])
 * @method \Jdcloud\Result bpsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bpsInstanceAsync(array $args = [])
 * @method \Jdcloud\Result firewallActivityLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise firewallActivityLogAsync(array $args = [])
 * @method \Jdcloud\Result accessLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise accessLogAsync(array $args = [])
 * @method \Jdcloud\Result groupBy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise groupByAsync(array $args = [])
 * @method \Jdcloud\Result listAvailablePageRuleSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailablePageRuleSettingAsync(array $args = [])
 * @method \Jdcloud\Result botDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise botDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result listCertificatePacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatePacksAsync(array $args = [])
 * @method \Jdcloud\Result deleteAdvancedCertificateManagerCertificatePack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAdvancedCertificateManagerCertificatePackAsync(array $args = [])
 * @method \Jdcloud\Result orderAdvancedCertificateManagerCertificatePack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise orderAdvancedCertificateManagerCertificatePackAsync(array $args = [])
 * @method \Jdcloud\Result listAvailableCustomPages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableCustomPagesAsync(array $args = [])
 * @method \Jdcloud\Result updateCustomPageURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCustomPageURLAsync(array $args = [])
 * @method \Jdcloud\Result listSSLConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSSLConfigurationsAsync(array $args = [])
 * @method \Jdcloud\Result createSSLConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSSLConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result editSSLConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editSSLConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result deleteSSLConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSSLConfigurationAsync(array $args = [])
 * @method \Jdcloud\Result listDNSRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDNSRecordsAsync(array $args = [])
 * @method \Jdcloud\Result createDNSRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDNSRecordAsync(array $args = [])
 * @method \Jdcloud\Result updateDNSRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDNSRecordAsync(array $args = [])
 * @method \Jdcloud\Result deleteDNSRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDNSRecordAsync(array $args = [])
 * @method \Jdcloud\Result createFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFiltersAsync(array $args = [])
 * @method \Jdcloud\Result updateIndividualFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndividualFilterAsync(array $args = [])
 * @method \Jdcloud\Result listOfFirewallRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfFirewallRulesAsync(array $args = [])
 * @method \Jdcloud\Result createFirewallRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFirewallRulesAsync(array $args = [])
 * @method \Jdcloud\Result updateIndividualFirewallRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndividualFirewallRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteIndividualFirewallRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIndividualFirewallRulesAsync(array $args = [])
 * @method \Jdcloud\Result describeBotStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBotStatusAsync(array $args = [])
 * @method \Jdcloud\Result openFirewallBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openFirewallBotAsync(array $args = [])
 * @method \Jdcloud\Result closeFirewallBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeFirewallBotAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result createFlowPack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlowPackAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceByOrderNo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceByOrderNoAsync(array $args = [])
 * @method \Jdcloud\Result selectDetailList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise selectDetailListAsync(array $args = [])
 * @method \Jdcloud\Result checkInstancesName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkInstancesNameAsync(array $args = [])
 * @method \Jdcloud\Result ips(array $args = [])
 * @method \GuzzleHttp\Promise\Promise ipsAsync(array $args = [])
 * @method \Jdcloud\Result submitOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitOrderAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthAvg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthAvgAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthMax(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthMaxAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthP95(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthP95Async(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result bandwidthDateHistogramTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bandwidthDateHistogramTopKAsync(array $args = [])
 * @method \Jdcloud\Result bandwidthTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bandwidthTopKAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthListAsync(array $args = [])
 * @method \Jdcloud\Result instanceTrafficSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceTrafficSumAsync(array $args = [])
 * @method \Jdcloud\Result instanceTrafficDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceTrafficDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result instanceTrafficMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceTrafficMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result trafficDateHistogramTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise trafficDateHistogramTopKAsync(array $args = [])
 * @method \Jdcloud\Result trafficTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise trafficTopKAsync(array $args = [])
 * @method \Jdcloud\Result instanceRequestSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceRequestSumAsync(array $args = [])
 * @method \Jdcloud\Result instanceRequestDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceRequestDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result instanceRequestMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceRequestMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result requestDateHistogramTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestDateHistogramTopKAsync(array $args = [])
 * @method \Jdcloud\Result requestTopK(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestTopKAsync(array $args = [])
 * @method \Jdcloud\Result listLogpushJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLogpushJobsAsync(array $args = [])
 * @method \Jdcloud\Result createLogpushJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogpushJobAsync(array $args = [])
 * @method \Jdcloud\Result fields(array $args = [])
 * @method \GuzzleHttp\Promise\Promise fieldsAsync(array $args = [])
 * @method \Jdcloud\Result fieldsDefault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise fieldsDefaultAsync(array $args = [])
 * @method \Jdcloud\Result updateLogpushJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogpushJobAsync(array $args = [])
 * @method \Jdcloud\Result deleteLogpushJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogpushJobAsync(array $args = [])
 * @method \Jdcloud\Result checkDestinationExists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkDestinationExistsAsync(array $args = [])
 * @method \Jdcloud\Result describePackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagesAsync(array $args = [])
 * @method \Jdcloud\Result describePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageAsync(array $args = [])
 * @method \Jdcloud\Result listPageRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPageRulesAsync(array $args = [])
 * @method \Jdcloud\Result createPageRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPageRuleAsync(array $args = [])
 * @method \Jdcloud\Result updatePageRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePageRuleAsync(array $args = [])
 * @method \Jdcloud\Result deletePageRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePageRuleAsync(array $args = [])
 * @method \Jdcloud\Result instanceTrafficDateHistogram4Pa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceTrafficDateHistogram4PaAsync(array $args = [])
 * @method \Jdcloud\Result zoneTrafficDateHistogram4Pa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneTrafficDateHistogram4PaAsync(array $args = [])
 * @method \Jdcloud\Result spectrumAppTrafficDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise spectrumAppTrafficDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result instanceBandwidthDateHistogram4Pa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceBandwidthDateHistogram4PaAsync(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthDateHistogram4Pa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthDateHistogram4PaAsync(array $args = [])
 * @method \Jdcloud\Result spectrumAppBandwidthDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise spectrumAppBandwidthDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result universalSSLSettingsDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise universalSSLSettingsDetailsAsync(array $args = [])
 * @method \Jdcloud\Result editUniversalSSLSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editUniversalSSLSettingsAsync(array $args = [])
 * @method \Jdcloud\Result listRuleGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleGroupsAsync(array $args = [])
 * @method \Jdcloud\Result ruleGroupDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise ruleGroupDetailsAsync(array $args = [])
 * @method \Jdcloud\Result editRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editRuleGroupAsync(array $args = [])
 * @method \Jdcloud\Result listFirewallPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFirewallPackagesAsync(array $args = [])
 * @method \Jdcloud\Result firewallPackageDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise firewallPackageDetailsAsync(array $args = [])
 * @method \Jdcloud\Result editFirewallPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editFirewallPackageAsync(array $args = [])
 * @method \Jdcloud\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \Jdcloud\Result ruleDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise ruleDetailsAsync(array $args = [])
 * @method \Jdcloud\Result editRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editRuleAsync(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthAvg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthAvgAsync(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthMax(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthMaxAsync(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthP95(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthP95Async(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneBandwidthMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneBandwidthMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneTrafficSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneTrafficSumAsync(array $args = [])
 * @method \Jdcloud\Result zoneTrafficDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneTrafficDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneTrafficMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneTrafficMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneRequestSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneRequestSumAsync(array $args = [])
 * @method \Jdcloud\Result zoneRequestDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneRequestDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneRequestMultiDateHistogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneRequestMultiDateHistogramAsync(array $args = [])
 * @method \Jdcloud\Result zoneSecurityReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise zoneSecurityReportAsync(array $args = [])
 * @method \Jdcloud\Result listZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listZonesAsync(array $args = [])
 * @method \Jdcloud\Result createZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createZoneAsync(array $args = [])
 * @method \Jdcloud\Result deleteZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteZoneAsync(array $args = [])
 * @method \Jdcloud\Result purgeAllFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purgeAllFilesAsync(array $args = [])
 * @method \Jdcloud\Result purgeFilesByURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purgeFilesByURLAsync(array $args = [])
 * @method \Jdcloud\Result purgeFilesByCache_TagsAndHostOrPrefix(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purgeFilesByCache_TagsAndHostOrPrefixAsync(array $args = [])
 * @method \Jdcloud\Result getAllZoneSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAllZoneSettingsAsync(array $args = [])
 * @method \Jdcloud\Result editZoneSettingsInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise editZoneSettingsInfoAsync(array $args = [])
 * @method \Jdcloud\Result getAdvancedDDOSSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAdvancedDDOSSettingAsync(array $args = [])
 * @method \Jdcloud\Result getAlwaysOnlineSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAlwaysOnlineSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeAlwaysOnlineSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeAlwaysOnlineSettingAsync(array $args = [])
 * @method \Jdcloud\Result getAlwaysUseHTTPSSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAlwaysUseHTTPSSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeAlwaysUseHTTPSSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeAlwaysUseHTTPSSettingAsync(array $args = [])
 * @method \Jdcloud\Result getAutomaticHTTPSRewritesSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomaticHTTPSRewritesSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeAutomaticHTTPSRewritesSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeAutomaticHTTPSRewritesSettingAsync(array $args = [])
 * @method \Jdcloud\Result getBrowserCacheTTLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBrowserCacheTTLSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeBrowserCacheTTLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeBrowserCacheTTLSettingAsync(array $args = [])
 * @method \Jdcloud\Result getBrowserCheckSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBrowserCheckSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeBrowserCheckSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeBrowserCheckSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeCacheLevelSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeCacheLevelSettingAsync(array $args = [])
 * @method \Jdcloud\Result getChallengeTTLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChallengeTTLSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeChallengeTTLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeChallengeTTLSettingAsync(array $args = [])
 * @method \Jdcloud\Result getDevelopmentModeSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevelopmentModeSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeDevelopmentModeSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeDevelopmentModeSettingAsync(array $args = [])
 * @method \Jdcloud\Result getEmailObfuscationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailObfuscationSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeEmailObfuscationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeEmailObfuscationSettingAsync(array $args = [])
 * @method \Jdcloud\Result getHotlinkProtectionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHotlinkProtectionSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeHotlinkProtectionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeHotlinkProtectionSettingAsync(array $args = [])
 * @method \Jdcloud\Result getIPGeolocationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPGeolocationSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeIPGeolocationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeIPGeolocationSettingAsync(array $args = [])
 * @method \Jdcloud\Result getIPv6Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPv6SettingAsync(array $args = [])
 * @method \Jdcloud\Result changeIPv6Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeIPv6SettingAsync(array $args = [])
 * @method \Jdcloud\Result getMinifySetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMinifySettingAsync(array $args = [])
 * @method \Jdcloud\Result changeMinifySetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMinifySettingAsync(array $args = [])
 * @method \Jdcloud\Result getMobileRedirectSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMobileRedirectSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeMobileRedirectSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMobileRedirectSettingAsync(array $args = [])
 * @method \Jdcloud\Result getMirageSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMirageSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeMirageSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMirageSettingAsync(array $args = [])
 * @method \Jdcloud\Result getEnableErrorPagesOnSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnableErrorPagesOnSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeEnableErrorPagesOnSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeEnableErrorPagesOnSettingAsync(array $args = [])
 * @method \Jdcloud\Result getOpportunisticEncryptionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpportunisticEncryptionSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeOpportunisticEncryptionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeOpportunisticEncryptionSettingAsync(array $args = [])
 * @method \Jdcloud\Result getPolishSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolishSettingAsync(array $args = [])
 * @method \Jdcloud\Result changePolishSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePolishSettingAsync(array $args = [])
 * @method \Jdcloud\Result getWebPSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebPSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeWebPSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeWebPSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeBrotliSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeBrotliSettingAsync(array $args = [])
 * @method \Jdcloud\Result getPrefetchPreloadSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPrefetchPreloadSettingAsync(array $args = [])
 * @method \Jdcloud\Result changePrefetchPreloadSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePrefetchPreloadSettingAsync(array $args = [])
 * @method \Jdcloud\Result getPrivacyPassSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPrivacyPassSettingAsync(array $args = [])
 * @method \Jdcloud\Result changePrivacyPassSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePrivacyPassSettingAsync(array $args = [])
 * @method \Jdcloud\Result getRocketLoaderSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRocketLoaderSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeRocketLoaderSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeRocketLoaderSettingAsync(array $args = [])
 * @method \Jdcloud\Result getSecurityHeaderHSTSSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecurityHeaderHSTSSettingAsync(array $args = [])
 * @method \Jdcloud\Result getSecurityLevelSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecurityLevelSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeSecurityLevelSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeSecurityLevelSettingAsync(array $args = [])
 * @method \Jdcloud\Result getServerSideExcludeSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServerSideExcludeSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeServerSideExcludeSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeServerSideExcludeSettingAsync(array $args = [])
 * @method \Jdcloud\Result getEnableQueryStringSortSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnableQueryStringSortSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeEnableQueryStringSortSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeEnableQueryStringSortSettingAsync(array $args = [])
 * @method \Jdcloud\Result getSSLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSSLSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeSSLSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeSSLSettingAsync(array $args = [])
 * @method \Jdcloud\Result getMinimumTLSVersionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMinimumTLSVersionSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeMinimumTLSVersionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMinimumTLSVersionSettingAsync(array $args = [])
 * @method \Jdcloud\Result getCiphersSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCiphersSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeCiphersSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeCiphersSettingAsync(array $args = [])
 * @method \Jdcloud\Result getZoneEnableTLS1_3Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getZoneEnableTLS1_3SettingAsync(array $args = [])
 * @method \Jdcloud\Result changeTLS1_3Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTLS1_3SettingAsync(array $args = [])
 * @method \Jdcloud\Result getTLSClientAuthSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTLSClientAuthSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeTLSClientAuthSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTLSClientAuthSettingAsync(array $args = [])
 * @method \Jdcloud\Result getTrueClientIPSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrueClientIPSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeTrueClientIPSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTrueClientIPSettingAsync(array $args = [])
 * @method \Jdcloud\Result getWebApplicationFirewallWAFSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebApplicationFirewallWAFSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeWebApplicationFirewallWAFSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeWebApplicationFirewallWAFSettingAsync(array $args = [])
 * @method \Jdcloud\Result getHTTP2Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHTTP2SettingAsync(array $args = [])
 * @method \Jdcloud\Result changeHTTP2Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeHTTP2SettingAsync(array $args = [])
 * @method \Jdcloud\Result getHTTP3Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHTTP3SettingAsync(array $args = [])
 * @method \Jdcloud\Result changeHTTP3Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeHTTP3SettingAsync(array $args = [])
 * @method \Jdcloud\Result get0_RTTSessionResumptionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise get0_RTTSessionResumptionSettingAsync(array $args = [])
 * @method \Jdcloud\Result change0_RTTSessionResumptionSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise change0_RTTSessionResumptionSettingAsync(array $args = [])
 * @method \Jdcloud\Result getPseudoIPv4Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPseudoIPv4SettingAsync(array $args = [])
 * @method \Jdcloud\Result changePseudoIPv4Setting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePseudoIPv4SettingAsync(array $args = [])
 * @method \Jdcloud\Result getWebSocketsSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebSocketsSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeWebSocketsSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeWebSocketsSettingAsync(array $args = [])
 * @method \Jdcloud\Result getImageResizingSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageResizingSettingAsync(array $args = [])
 * @method \Jdcloud\Result getHTTP2EdgePrioritizationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHTTP2EdgePrioritizationSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeHTTP2EdgePrioritizationSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeHTTP2EdgePrioritizationSettingAsync(array $args = [])
 * @method \Jdcloud\Result changeMaxUploadSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMaxUploadSettingAsync(array $args = [])
 */
class StarshieldClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'starshield',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'starshield'
            );
        };

        parent::__construct($args);
    }
}