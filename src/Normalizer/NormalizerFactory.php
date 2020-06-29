<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new MesParticipantNormalizer();
        $normalizers[] = new MesNotifyNormalizer();
        $normalizers[] = new MesConversationNormalizer();
        $normalizers[] = new MesMessageNormalizer();
        $normalizers[] = new MesSearchConstraintNormalizer();
        $normalizers[] = new MesSearchNormalizer();
        $normalizers[] = new MesConversationCreateNormalizer();
        $normalizers[] = new MesMessageAddNormalizer();
        $normalizers[] = new MesParticipantCreateNormalizer();
        $normalizers[] = new MesSubscriptionNormalizer();
        $normalizers[] = new MesCancelNormalizer();
        $normalizers[] = new OdrCalculationAdjustmentNormalizer();
        $normalizers[] = new OdrCalculationAdjustmentResultNormalizer();
        $normalizers[] = new OdrContactNormalizer();
        $normalizers[] = new OdrContactContactNormalizer();
        $normalizers[] = new OdrProjectionNormalizer();
        $normalizers[] = new OdrProjectionItemNormalizer();
        $normalizers[] = new OdrOrderCalculationRequestNormalizer();
        $normalizers[] = new OdrAdjustmentNormalizer();
        $normalizers[] = new OdrCalculationItemModelNormalizer();
        $normalizers[] = new OdrCalculationsNormalizer();
        $normalizers[] = new OdrCalculationItemsNormalizer();
        $normalizers[] = new OdrCalculationStackItemNormalizer();
        $normalizers[] = new OdrVatResultNormalizer();
        $normalizers[] = new OdrFilterSetNormalizer();
        $normalizers[] = new OdrSettingsNormalizer();
        $normalizers[] = new OdrSettingsContactNormalizer();
        $normalizers[] = new OdrSettingsOrganisationNormalizer();
        $normalizers[] = new OdrSettingsBillingNormalizer();
        $normalizers[] = new OdrSettingsShippingNormalizer();
        $normalizers[] = new OdrSettingsShippingWindowNormalizer();
        $normalizers[] = new OdrOrderSettingsNormalizer();
        $normalizers[] = new OdrOrderSettingsContactNormalizer();
        $normalizers[] = new OdrOrderSettingsOrganisationNormalizer();
        $normalizers[] = new OdrOrderSettingsBillingNormalizer();
        $normalizers[] = new OdrOrderSettingsShippingNormalizer();
        $normalizers[] = new OdrOrderSettingsShippingWindowNormalizer();
        $normalizers[] = new OdrOrderStepNormalizer();
        $normalizers[] = new OdrStepActionNormalizer();
        $normalizers[] = new OdrOrderNormalizer();
        $normalizers[] = new OdrOrderStateNormalizer();
        $normalizers[] = new OdrOrderAcceptancesItemNormalizer();
        $normalizers[] = new OdrOrderCalculationsItemNormalizer();
        $normalizers[] = new OdrProcessingNormalizer();
        $normalizers[] = new OdrStackNormalizer();
        $normalizers[] = new OdrStackReferenceNormalizer();
        $normalizers[] = new OdrStackStateNormalizer();
        $normalizers[] = new OdrOrderModelNormalizer();
        $normalizers[] = new OdrOrderAuthorizationResponseNormalizer();
        $normalizers[] = new OdrReferenceModelNormalizer();
        $normalizers[] = new OdrSimpleOrderItemNormalizer();
        $normalizers[] = new OdrFilterNormalizer();
        $normalizers[] = new OdrOrderItemModelNormalizer();
        $normalizers[] = new OdrGroupNormalizer();
        $normalizers[] = new OdrGroupReferencesNormalizer();
        $normalizers[] = new OdrGroupReferencesOrdersItemNormalizer();
        $normalizers[] = new OdrGroupReferencesOrdersItemWarehouseNormalizer();
        $normalizers[] = new OdrGroupReferencesOrdersItemShipmentsItemNormalizer();
        $normalizers[] = new OdrStackReferenceNormalizer();
        $normalizers[] = new OdrStackReferenceStateNormalizer();
        $normalizers[] = new OdrSearchNormalizer();
        $normalizers[] = new OdrSearchConstraintNormalizer();
        $normalizers[] = new OdrSearchFilterNormalizer();
        $normalizers[] = new OdrFilterSearchNormalizer();
        $normalizers[] = new OdrFilterSearchConstraintNormalizer();
        $normalizers[] = new OdrSkuNormalizer();
        $normalizers[] = new OdrSkuResultNormalizer();
        $normalizers[] = new MesMailModelNormalizer();
        $normalizers[] = new MesContactModelNormalizer();
        $normalizers[] = new MesMailNormalizer();
        $normalizers[] = new MesInboxNormalizer();
        $normalizers[] = new MesInboxModelNormalizer();
        $normalizers[] = new MesInboxUpdateModelNormalizer();
        $normalizers[] = new MesDnsRecordNormalizer();
        $normalizers[] = new MesDomainNormalizer();
        $normalizers[] = new MesDomainModelNormalizer();
        $normalizers[] = new OdrCalculatedInvoiceRequestNormalizer();
        $normalizers[] = new OdrCalculationNormalizer();
        $normalizers[] = new OdrCalculationItemNormalizer();
        $normalizers[] = new OdrInvoiceItemNormalizer();
        $normalizers[] = new OdrCalculationOrderItemNormalizer();
        $normalizers[] = new OdrInvoiceStateNormalizer();
        $normalizers[] = new OdrInvoiceNormalizer();
        $normalizers[] = new OdrInvoiceListItemNormalizer();
        $normalizers[] = new OdrInvoiceRequestNormalizer();
        $normalizers[] = new OdrInvoiceItemModelNormalizer();
        $normalizers[] = new OdrItemModelNormalizer();
        $normalizers[] = new OdrProjectionModelNormalizer();
        $normalizers[] = new OdrInvoiceAdjustmentResponseNormalizer();
        $normalizers[] = new OdrInvoiceAdjustmentResponseResultNormalizer();
        $normalizers[] = new OdrPricingRuleModelNormalizer();
        $normalizers[] = new OdrPricingRuleNormalizer();
        $normalizers[] = new OdrPricingRuleFilterNormalizer();
        $normalizers[] = new OdrPricingRuleConstraintNormalizer();
        $normalizers[] = new OdrPriceRuleEvaluationNormalizer();
        $normalizers[] = new OdrEvaluationItemNormalizer();
        $normalizers[] = new CntActionNormalizer();
        $normalizers[] = new CntColumnConfigNormalizer();
        $normalizers[] = new CntDatasetNormalizer();
        $normalizers[] = new CntDatasetRequestNormalizer();
        $normalizers[] = new CntBatchRequestNormalizer();
        $normalizers[] = new CntBatchRequestImportNormalizer();
        $normalizers[] = new CntBatchRequestExportNormalizer();
        $normalizers[] = new CntBatchNormalizer();
        $normalizers[] = new CntBatchImportNormalizer();
        $normalizers[] = new CntBatchExportNormalizer();
        $normalizers[] = new CntLineNormalizer();
        $normalizers[] = new CntBatchFileNormalizer();
        $normalizers[] = new CntLineErrorNormalizer();
        $normalizers[] = new CntColumnErrorNormalizer();
        $normalizers[] = new LcsDPDServicePointResponseNormalizer();
        $normalizers[] = new LcsDPDServicePointNormalizer();
        $normalizers[] = new LcsDPDServicePointOpeningHoursItemNormalizer();
        $normalizers[] = new IamSecretRequestNormalizer();
        $normalizers[] = new IamSecretUpdateNormalizer();
        $normalizers[] = new IamBackupNormalizer();
        $normalizers[] = new IamBackupResponseNormalizer();
        $normalizers[] = new IamValidationRequestNormalizer();
        $normalizers[] = new IamValidationResponseNormalizer();
        $normalizers[] = new IamSecretReadNormalizer();
        $normalizers[] = new IamSecretNormalizer();
        $normalizers[] = new OdrKeyNormalizer();
        $normalizers[] = new OdrBalanceRequestNormalizer();
        $normalizers[] = new OdrBalanceNormalizer();
        $normalizers[] = new OdrRecordNormalizer();
        $normalizers[] = new SplPrinterNormalizer();
        $normalizers[] = new SplPrinterModelNormalizer();
        $normalizers[] = new SplConnectionNormalizer();
        $normalizers[] = new SplInboxNormalizer();
        $normalizers[] = new CntProxyNormalizer();
        $normalizers[] = new CntProxyModelNormalizer();
        $normalizers[] = new CntProxyUpdateModelNormalizer();
        $normalizers[] = new CntConfigNormalizer();
        $normalizers[] = new IamUpcomingInvoiceNormalizer();
        $normalizers[] = new IamInvoiceNormalizer();
        $normalizers[] = new IamBillingCompanyNormalizer();
        $normalizers[] = new IamAddressNormalizer();
        $normalizers[] = new IamPaymentSourceNormalizer();
        $normalizers[] = new IamSubscriptionNormalizer();
        $normalizers[] = new IamSubscriptionItemNormalizer();
        $normalizers[] = new IamUsageRequestNormalizer();
        $normalizers[] = new IamTrialNormalizer();
        $normalizers[] = new IamSubscribeNormalizer();
        $normalizers[] = new IamAddOnNormalizer();
        $normalizers[] = new IamInvoiceProductNormalizer();
        $normalizers[] = new IamProductNormalizer();
        $normalizers[] = new IamPlanNormalizer();
        $normalizers[] = new IamTierNormalizer();
        $normalizers[] = new IamUsageRecordNormalizer();
        $normalizers[] = new MesUsageRecordNormalizer();
        $normalizers[] = new MesReportRequestNormalizer();
        $normalizers[] = new MesReportNormalizer();
        $normalizers[] = new MesBucketNormalizer();
        $normalizers[] = new MesTypeNormalizer();
        $normalizers[] = new SplHubNormalizer();
        $normalizers[] = new SplHubModelNormalizer();
        $normalizers[] = new SplPropertyNormalizer();
        $normalizers[] = new SplPubnubNormalizer();
        $normalizers[] = new SplTokenNormalizer();
        $normalizers[] = new SplIntegrationNormalizer();
        $normalizers[] = new SplHubErrorNormalizer();
        $normalizers[] = new SplHubErrorModelNormalizer();
        $normalizers[] = new SplHubStatusNormalizer();
        $normalizers[] = new SplHubNetworkNormalizer();
        $normalizers[] = new SplHubImageNormalizer();
        $normalizers[] = new SplNetworkDeviceNormalizer();
        $normalizers[] = new SplCreateNetworkDeviceNormalizer();
        $normalizers[] = new IamLogNormalizer();
        $normalizers[] = new CntGifInfoNormalizer();
        $normalizers[] = new IamPhoneNumberNormalizer();
        $normalizers[] = new IamPhoneNumberModelNormalizer();
        $normalizers[] = new IamSubtenantNormalizer();
        $normalizers[] = new IamPendingRequestNormalizer();
        $normalizers[] = new IamPendingAuthorizationNormalizer();
        $normalizers[] = new IamAuthorizationNormalizer();
        $normalizers[] = new IamSubtenantUserNormalizer();
        $normalizers[] = new IamRoleNormalizer();
        $normalizers[] = new IamSystemRoleNormalizer();
        $normalizers[] = new IamRoleModelNormalizer();
        $normalizers[] = new IamScopeNormalizer();
        $normalizers[] = new IamVerifyRequestNormalizer();
        $normalizers[] = new IamAccessTokenNormalizer();
        $normalizers[] = new IamTokenRequestNormalizer();
        $normalizers[] = new IamAuthorizationResponseNormalizer();
        $normalizers[] = new IamClientModelNormalizer();
        $normalizers[] = new IamClientUpdateModelNormalizer();
        $normalizers[] = new IamClientNormalizer();
        $normalizers[] = new IamUserModelNormalizer();
        $normalizers[] = new IamUserUpdateModelNormalizer();
        $normalizers[] = new IamPasswordResetNormalizer();
        $normalizers[] = new IamUserNormalizer();
        $normalizers[] = new IamTenantNormalizer();
        $normalizers[] = new IamCompanyNormalizer();
        $normalizers[] = new IamUserTokenRequestNormalizer();
        $normalizers[] = new IamUserTokenResponseNormalizer();
        $normalizers[] = new IamSignupNormalizer();
        $normalizers[] = new OdrProviderNormalizer();
        $normalizers[] = new OdrProviderMethodNormalizer();
        $normalizers[] = new OdrMethodNormalizer();
        $normalizers[] = new OdrReferenceNormalizer();
        $normalizers[] = new OdrIssuerNormalizer();
        $normalizers[] = new OdrPaymentIntentNormalizer();
        $normalizers[] = new OdrPaymentNormalizer();
        $normalizers[] = new OdrProcessNormalizer();
        $normalizers[] = new OdrAttemptNormalizer();
        $normalizers[] = new OdrTransactionNormalizer();
        $normalizers[] = new OdrPurchaseNormalizer();
        $normalizers[] = new OdrTransactionModelNormalizer();
        $normalizers[] = new OdrPresetNormalizer();
        $normalizers[] = new OdrPurchaseItemNormalizer();
        $normalizers[] = new MesWebhookDelayNormalizer();
        $normalizers[] = new MesWebhookAttemptNormalizer();
        $normalizers[] = new MesWebhookTestMessageNormalizer();
        $normalizers[] = new MesWebhookMessageNormalizer();
        $normalizers[] = new MesWebhookEventNormalizer();
        $normalizers[] = new MesTriggerNormalizer();
        $normalizers[] = new MesSubscriptionModelNormalizer();
        $normalizers[] = new MesWebhookSubscriptionNormalizer();
        $normalizers[] = new WmsStockNormalizer();
        $normalizers[] = new WmsStockUpRequestNormalizer();
        $normalizers[] = new WmsStockUpItemNormalizer();
        $normalizers[] = new WmsInventorySummaryConstraintNormalizer();
        $normalizers[] = new WmsInventoryConstraintNormalizer();
        $normalizers[] = new WmsUpdateWarehouseItemRequestNormalizer();
        $normalizers[] = new WmsCreateRouteRequestNormalizer();
        $normalizers[] = new WmsUpdateRouteRequestNormalizer();
        $normalizers[] = new WmsAttachItemClaimRequestNormalizer();
        $normalizers[] = new WmsCreateHopRequestNormalizer();
        $normalizers[] = new WmsCreateHopScheduleRequestNormalizer();
        $normalizers[] = new WmsCreateLocationRequestNormalizer();
        $normalizers[] = new WmsUpdateLocationRequestNormalizer();
        $normalizers[] = new WmsCreateScheduleRequestNormalizer();
        $normalizers[] = new WmsUpdateScheduleRequestNormalizer();
        $normalizers[] = new WmsCreateDurationRequestNormalizer();
        $normalizers[] = new WmsCreateWarehouseRequestNormalizer();
        $normalizers[] = new WmsUpdateWarehouseRequestNormalizer();
        $normalizers[] = new WmsCreateProjectionRequestNormalizer();
        $normalizers[] = new WmsCreateProjectionRequestItemsItemNormalizer();
        $normalizers[] = new WmsAvailableProjectionItemNormalizer();
        $normalizers[] = new WmsUnavailableProjectionItemNormalizer();
        $normalizers[] = new WmsCreateClaimRequestNormalizer();
        $normalizers[] = new WmsCreateClaimResponseNormalizer();
        $normalizers[] = new WmsConfirmClaimRequestNormalizer();
        $normalizers[] = new WmsCreateTransferRequestNormalizer();
        $normalizers[] = new WmsCreateTransferRequestRoutingItemNormalizer();
        $normalizers[] = new WmsPositionLogResponseNormalizer();
        $normalizers[] = new WmsPositionVerificationRequestNormalizer();
        $normalizers[] = new WmsWarehouseItemNormalizer();
        $normalizers[] = new WmsRouteNormalizer();
        $normalizers[] = new WmsHopNormalizer();
        $normalizers[] = new WmsLocationNormalizer();
        $normalizers[] = new WmsScheduleNormalizer();
        $normalizers[] = new WmsWarehouseNormalizer();
        $normalizers[] = new WmsTransferReportNormalizer();
        $normalizers[] = new WmsProjectionNormalizer();
        $normalizers[] = new WmsConstraintNormalizer();
        $normalizers[] = new WmsClaimNormalizer();
        $normalizers[] = new WmsClaimItemNormalizer();
        $normalizers[] = new WmsTransferNormalizer();
        $normalizers[] = new WmsSubTransferSummaryNormalizer();
        $normalizers[] = new WmsDurationResponseNormalizer();
        $normalizers[] = new WmsSubTransferNormalizer();
        $normalizers[] = new WmsSubTransferItemNormalizer();
        $normalizers[] = new OdrStartSessionRequestNormalizer();
        $normalizers[] = new OdrAttachSessionRequestNormalizer();
        $normalizers[] = new OdrStartSessionResponseNormalizer();
        $normalizers[] = new OdrSelectSessionBillingMethodRequestNormalizer();
        $normalizers[] = new OdrSelectSessionBillingRequestNormalizer();
        $normalizers[] = new OdrSelectSessionOrganisationRequestNormalizer();
        $normalizers[] = new OdrSelectSessionShippingMethodRequestNormalizer();
        $normalizers[] = new OdrSelectSessionShippingRequestNormalizer();
        $normalizers[] = new OdrGetSessionShippingResponseItemNormalizer();
        $normalizers[] = new OdrGetSessionShippingMethodResponseNormalizer();
        $normalizers[] = new OdrSelectSessionShippingPointRequestNormalizer();
        $normalizers[] = new OdrSelectSessionShippingWindowRequestNormalizer();
        $normalizers[] = new OdrSelectSessionShippingWindowResponseNormalizer();
        $normalizers[] = new OdrGetSessionResponseNormalizer();
        $normalizers[] = new OdrGetSessionOrganisationOptionsResponseNormalizer();
        $normalizers[] = new OdrAuthenticationRequestNormalizer();
        $normalizers[] = new OdrIdentityExistsRequestNormalizer();
        $normalizers[] = new OdrAuthenticationResponseNormalizer();
        $normalizers[] = new OdrAuthorizationRequestNormalizer();
        $normalizers[] = new OdrAuthorizationResponseNormalizer();
        $normalizers[] = new OdrCombinedAddressSetNormalizer();
        $normalizers[] = new OdrAddressSetNormalizer();
        $normalizers[] = new OdrPointNormalizer();
        $normalizers[] = new OdrPointOpeningsItemNormalizer();
        $normalizers[] = new OdrPointOpeningsItemWindowsItemNormalizer();
        $normalizers[] = new OdrAddressNormalizer();
        $normalizers[] = new OdrSessionProjectionNormalizer();
        $normalizers[] = new OdrSessionCalculationNormalizer();
        $normalizers[] = new OdrSessionProjectionItemNormalizer();
        $normalizers[] = new OdrSessionCalculationAdjustmentNormalizer();
        $normalizers[] = new OdrSessionCalculationAdjustmentResultNormalizer();
        $normalizers[] = new OdrNewPhonenumberNormalizer();
        $normalizers[] = new OdrPhonenumberNormalizer();
        $normalizers[] = new OdrNewContactNormalizer();
        $normalizers[] = new OdrNewAddressNormalizer();
        $normalizers[] = new OdrSessionContactNormalizer();
        $normalizers[] = new OdrSessionProviderMethodNormalizer();
        $normalizers[] = new OdrOrganisationNormalizer();
        $normalizers[] = new OdrNewOrganisationNormalizer();
        $normalizers[] = new OdrVatRegistrationNormalizer();
        $normalizers[] = new OdrSessionIssuerNormalizer();
        $normalizers[] = new CntDirectoryRequestNormalizer();
        $normalizers[] = new CntUploadRequestNormalizer();
        $normalizers[] = new CntUploadResponseNormalizer();
        $normalizers[] = new CntFileNormalizer();
        $normalizers[] = new CntSimpleQueryNormalizer();
        $normalizers[] = new CntFilterNormalizer();
        $normalizers[] = new CntSearchQueryNormalizer();
        $normalizers[] = new CntSimpleSeachResponseNormalizer();
        $normalizers[] = new CntSeachResponseNormalizer();
        $normalizers[] = new CntSuggestResponseNormalizer();
        $normalizers[] = new CntFacetNormalizer();
        $normalizers[] = new CntBucketNormalizer();
        $normalizers[] = new CntDocumentResponseNormalizer();
        $normalizers[] = new CntSimpleDocumentResponseNormalizer();
        $normalizers[] = new CntFieldNormalizer();
        $normalizers[] = new CntSortNormalizer();
        $normalizers[] = new CntDefinitionModelNormalizer();
        $normalizers[] = new CntDefinitionNormalizer();
        $normalizers[] = new CntPaginationNormalizer();
        $normalizers[] = new LcsShipmentItemCorrectionNormalizer();
        $normalizers[] = new LcsListSearchNormalizer();
        $normalizers[] = new LcsListSearchConstraintNormalizer();
        $normalizers[] = new LcsShipmentSearchNormalizer();
        $normalizers[] = new LcsShipmentSearchConstraintNormalizer();
        $normalizers[] = new LcsLocationSkuNormalizer();
        $normalizers[] = new LcsHandlingListUpdateNormalizer();
        $normalizers[] = new LcsHandlingListItemUpdateNormalizer();
        $normalizers[] = new LcsHandlingListItemNormalizer();
        $normalizers[] = new LcsHandlingModelNormalizer();
        $normalizers[] = new LcsHandlingModelShipmentsItemNormalizer();
        $normalizers[] = new LcsHandlingListResponseNormalizer();
        $normalizers[] = new LcsHandlingListNormalizer();
        $normalizers[] = new LcsListedHandlingListNormalizer();
        $normalizers[] = new LcsLocationPositionNormalizer();
        $normalizers[] = new LcsMethodNormalizer();
        $normalizers[] = new LcsCountryNormalizer();
        $normalizers[] = new LcsListedShipmentNormalizer();
        $normalizers[] = new LcsListedShipmentAddressingNormalizer();
        $normalizers[] = new LcsShipmentNormalizer();
        $normalizers[] = new LcsShipmentAddressingNormalizer();
        $normalizers[] = new LcsShipmentAddressingNormalizer();
        $normalizers[] = new LcsShipmentAddressingCarrierNormalizer();
        $normalizers[] = new LcsShipmentItemModelNormalizer();
        $normalizers[] = new LcsShipmentItemModelPositionsNormalizer();
        $normalizers[] = new LcsShipmentItemNormalizer();
        $normalizers[] = new LcsParcelItemNormalizer();
        $normalizers[] = new LcsServiceOptionNormalizer();
        $normalizers[] = new LcsServiceOptionConfigurationItemNormalizer();
        $normalizers[] = new LcsParcelNormalizer();
        $normalizers[] = new LcsParcelLabelNormalizer();
        $normalizers[] = new LcsPlaceNormalizer();
        $normalizers[] = new LcsParcelCreateModelNormalizer();
        $normalizers[] = new LcsParcelModelNormalizer();
        $normalizers[] = new LcsFulfilmentLocationNormalizer();
        $normalizers[] = new LcsFulfilmentLocationCreateNormalizer();
        $normalizers[] = new LcsShipmentUpdateModelNormalizer();
        $normalizers[] = new LcsShipmentUpdateModelAddressingNormalizer();
        $normalizers[] = new LcsShipmentModelNormalizer();
        $normalizers[] = new LcsShipmentModelAddressingNormalizer();
        $normalizers[] = new LcsAddressNormalizer();
        $normalizers[] = new LcsPointsItemNormalizer();
        $normalizers[] = new LcsPointNormalizer();
        $normalizers[] = new LcsPointOpeningsItemNormalizer();
        $normalizers[] = new LcsPointOpeningsItemWindowsItemNormalizer();
        $normalizers[] = new SplJobNormalizer();
        $normalizers[] = new SplJobModelNormalizer();
        $normalizers[] = new SplJobResultNormalizer();
        $normalizers[] = new SplStatusNormalizer();
        $normalizers[] = new MesTaskNormalizer();
        $normalizers[] = new CntHtmlToInlinePdfRequestNormalizer();
        $normalizers[] = new CntHtmlToInlinePdfRequestSizeNormalizer();
        $normalizers[] = new CntHtmlToInlinePdfRequestMarginNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestSizeNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestMarginNormalizer();
        $normalizers[] = new CntPdfNormalizer();
        $normalizers[] = new CatGroupNormalizer();
        $normalizers[] = new CatGroupCreateNormalizer();
        $normalizers[] = new CatGroupUpdateNormalizer();
        $normalizers[] = new CatNewPriceNormalizer();
        $normalizers[] = new CatPriceNormalizer();
        $normalizers[] = new CatPriceSearchNormalizer();
        $normalizers[] = new CatPriceConstraintNormalizer();
        $normalizers[] = new CatProductVatModelNormalizer();
        $normalizers[] = new CatVatModelNormalizer();
        $normalizers[] = new CatVatNormalizer();
        $normalizers[] = new CatVatRateNormalizer();
        $normalizers[] = new RelGeocodeRequestNormalizer();
        $normalizers[] = new RelGeoLocationNormalizer();
        $normalizers[] = new RelGeoLocationBoxNormalizer();
        $normalizers[] = new RelGeoLocationBoxNorthEastNormalizer();
        $normalizers[] = new RelGeoLocationBoxSouthWestNormalizer();
        $normalizers[] = new RelGeoLocationAddressNormalizer();
        $normalizers[] = new RelIdentityExistsRequestNormalizer();
        $normalizers[] = new RelCreateIdentityRequestNormalizer();
        $normalizers[] = new RelCreateTokenRequestNormalizer();
        $normalizers[] = new RelCreateResetRequestNormalizer();
        $normalizers[] = new RelCreateConfirmRequestNormalizer();
        $normalizers[] = new RelTokenResponseNormalizer();
        $normalizers[] = new RelSignedTokenResponseNormalizer();
        $normalizers[] = new RelConstraintNormalizer();
        $normalizers[] = new RelSearchNormalizer();
        $normalizers[] = new RelFieldListNormalizer();
        $normalizers[] = new RelContactNormalizer();
        $normalizers[] = new RelContactUpdateNormalizer();
        $normalizers[] = new RelContactUpdateOrganisationsNormalizer();
        $normalizers[] = new RelContactUpdateOrganisationsPrimaryNormalizer();
        $normalizers[] = new RelContactUpdateOrganisationsSecondaryItemNormalizer();
        $normalizers[] = new RelContactUpdateBillingNormalizer();
        $normalizers[] = new RelContactUpdateShippingNormalizer();
        $normalizers[] = new RelContactUpdatePhoneNumbersNormalizer();
        $normalizers[] = new RelOrganisationListNormalizer();
        $normalizers[] = new RelOrganisationNormalizer();
        $normalizers[] = new RelOrganisationPaymentSettingsNormalizer();
        $normalizers[] = new RelOrganisationPaymentSettingsPostPaymentNormalizer();
        $normalizers[] = new RelOrganisationPaymentSettingsInvoiceNormalizer();
        $normalizers[] = new RelOrganisationUpdateModelNormalizer();
        $normalizers[] = new RelOrganisationUpdateModelAddressesNormalizer();
        $normalizers[] = new RelOrganisationUpdateModelPhoneNumbersNormalizer();
        $normalizers[] = new RelVatRegistrationModelNormalizer();
        $normalizers[] = new RelVatRegistrationNormalizer();
        $normalizers[] = new RelVatRegistrationVerificationNormalizer();
        $normalizers[] = new RelPhoneNumberNormalizer();
        $normalizers[] = new RelPhoneNumberListNormalizer();
        $normalizers[] = new RelPhoneNumberModelNormalizer();
        $normalizers[] = new RelAddressListNormalizer();
        $normalizers[] = new RelAddressModelNormalizer();
        $normalizers[] = new RelAddressNormalizer();
        $normalizers[] = new RelVersionNormalizer();
        $normalizers[] = new OdrOrdersIdAuthorizePostBodyNormalizer();
        $normalizers[] = new OdrOrdersIdFlowPutBodyNormalizer();
        $normalizers[] = new OdrOrdersIdFlowPutBodyActionsItemNormalizer();
        $normalizers[] = new OdrFiltersPutResponse200Normalizer();
        $normalizers[] = new OdrOptionsRulesConstraintsGetResponse200Normalizer();
        $normalizers[] = new IamSourcesPostBodyNormalizer();
        $normalizers[] = new IamLogsFiltersGetResponse200Normalizer();
        $normalizers[] = new IamTenantsPostResponse200Normalizer();
        $normalizers[] = new IamTenantsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsInvitesIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsRequestsPostBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsRequestsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsInvitesPostBodyNormalizer();
        $normalizers[] = new IamOauthForwardReferenceGetResponse200Normalizer();
        $normalizers[] = new WmsSearchClaimsPostBodyNormalizer();
        $normalizers[] = new WmsClaimsIdExtendPutBodyNormalizer();
        $normalizers[] = new WmsInventoryPostBodyNormalizer();
        $normalizers[] = new WmsSearchItemsPostBodyNormalizer();
        $normalizers[] = new OdrSessionsIdBillingGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdShippingMethodsGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdShippingWindowGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdShippingPointGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdShippingGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdBillingMethodsGetResponse200Normalizer();
        $normalizers[] = new OdrSessionsIdOrganisationsGetResponse200Normalizer();
        $normalizers[] = new CntDirectoriesGetResponse200Normalizer();
        $normalizers[] = new LcsListsIdItemsPutResponse204Normalizer();
        $normalizers[] = new LcsParcelsIdItemsDeleteResponse200Normalizer();
        $normalizers[] = new LcsParcelsIdItemsPostResponse200Normalizer();
        $normalizers[] = new LcsLocationsIdPositionsPutResponse200Normalizer();
        $normalizers[] = new LcsLocationsIdSkusPutResponse200Normalizer();
        $normalizers[] = new CatGroupsIdPricesPutResponse200Normalizer();
        $normalizers[] = new CatVatProductsPutResponse200Normalizer();

        return $normalizers;
    }
}
