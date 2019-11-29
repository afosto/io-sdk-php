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
        $normalizers[] = new OdrOrderNormalizer();
        $normalizers[] = new OdrOrderModelNormalizer();
        $normalizers[] = new OdrOrderUpdateModelNormalizer();
        $normalizers[] = new OdrStateNormalizer();
        $normalizers[] = new MesMailModelNormalizer();
        $normalizers[] = new MesContactModelNormalizer();
        $normalizers[] = new MesMailNormalizer();
        $normalizers[] = new MesInboxNormalizer();
        $normalizers[] = new MesInboxModelNormalizer();
        $normalizers[] = new MesInboxUpdateModelNormalizer();
        $normalizers[] = new MesDnsRecordNormalizer();
        $normalizers[] = new MesDomainNormalizer();
        $normalizers[] = new MesDomainModelNormalizer();
        $normalizers[] = new OdrInvoiceStateNormalizer();
        $normalizers[] = new OdrInvoiceNormalizer();
        $normalizers[] = new OdrInvoiceListItemNormalizer();
        $normalizers[] = new OdrInvoiceRequestNormalizer();
        $normalizers[] = new OdrInvoiceItemNormalizer();
        $normalizers[] = new OdrInvoiceItemModelNormalizer();
        $normalizers[] = new OdrProjectionModelNormalizer();
        $normalizers[] = new OdrProjectionNormalizer();
        $normalizers[] = new OdrProjectionItemNormalizer();
        $normalizers[] = new OdrStackReferenceNormalizer();
        $normalizers[] = new OdrVatResultNormalizer();
        $normalizers[] = new OdrContactNormalizer();
        $normalizers[] = new OdrContactContactNormalizer();
        $normalizers[] = new OdrAdjustmentNormalizer();
        $normalizers[] = new OdrAdjustmentResponseNormalizer();
        $normalizers[] = new OdrAdjustmentResponseMetadataNormalizer();
        $normalizers[] = new OdrPricingRuleModelNormalizer();
        $normalizers[] = new OdrPricingRuleNormalizer();
        $normalizers[] = new OdrPricingRuleFilterNormalizer();
        $normalizers[] = new OdrPricingRuleConstraintNormalizer();
        $normalizers[] = new OdrPriceRuleEvaluationNormalizer();
        $normalizers[] = new OdrEvaluationItemNormalizer();
        $normalizers[] = new IamSecretRequestNormalizer();
        $normalizers[] = new IamSecretUpdateNormalizer();
        $normalizers[] = new IamBackupNormalizer();
        $normalizers[] = new IamBackupResponseNormalizer();
        $normalizers[] = new IamValidationRequestNormalizer();
        $normalizers[] = new IamValidationResponseNormalizer();
        $normalizers[] = new IamSecretReadNormalizer();
        $normalizers[] = new IamSecretNormalizer();
        $normalizers[] = new SplPrinterNormalizer();
        $normalizers[] = new SplPrinterModelNormalizer();
        $normalizers[] = new SplConnectionNormalizer();
        $normalizers[] = new SplInboxNormalizer();
        $normalizers[] = new CntProxyNormalizer();
        $normalizers[] = new CntProxyModelNormalizer();
        $normalizers[] = new CntProxyUpdateModelNormalizer();
        $normalizers[] = new CntConfigNormalizer();
        $normalizers[] = new IamInvoiceNormalizer();
        $normalizers[] = new IamCompanyNormalizer();
        $normalizers[] = new IamAddressNormalizer();
        $normalizers[] = new IamCardNormalizer();
        $normalizers[] = new IamSubscriptionNormalizer();
        $normalizers[] = new IamSubscriptionItemNormalizer();
        $normalizers[] = new IamUsageRequestNormalizer();
        $normalizers[] = new IamTrialNormalizer();
        $normalizers[] = new IamSubscribeNormalizer();
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
        $normalizers[] = new IamUserTokenRequestNormalizer();
        $normalizers[] = new IamUserTokenResponseNormalizer();
        $normalizers[] = new IamSignupNormalizer();
        $normalizers[] = new PkrShipmentNormalizer();
        $normalizers[] = new PkrShipmentAddressNormalizer();
        $normalizers[] = new PkrShipmentAddressCountryNormalizer();
        $normalizers[] = new PkrShipmentItemsItemNormalizer();
        $normalizers[] = new PkrShipmentItemsItemImageNormalizer();
        $normalizers[] = new PkrShipmentItemsItemImageThumbnailsNormalizer();
        $normalizers[] = new PkrShipmentItemsItemProductNormalizer();
        $normalizers[] = new PkrShipmentSaleNormalizer();
        $normalizers[] = new PkrShipmentWarehouseNormalizer();
        $normalizers[] = new PkrShipmentDocumentNormalizer();
        $normalizers[] = new PkrTaskNormalizer();
        $normalizers[] = new OdrProviderNormalizer();
        $normalizers[] = new OdrProviderMethodNormalizer();
        $normalizers[] = new OdrMethodNormalizer();
        $normalizers[] = new OdrIssuerNormalizer();
        $normalizers[] = new OdrPaymentIntentNormalizer();
        $normalizers[] = new OdrPaymentNormalizer();
        $normalizers[] = new OdrProcessNormalizer();
        $normalizers[] = new OdrAttemptNormalizer();
        $normalizers[] = new OdrTransactionNormalizer();
        $normalizers[] = new OdrPurchaseNormalizer();
        $normalizers[] = new OdrTransactionModelNormalizer();
        $normalizers[] = new OdrPurchaseItemNormalizer();
        $normalizers[] = new WmsStockNormalizer();
        $normalizers[] = new WmsStockUpRequestNormalizer();
        $normalizers[] = new WmsInventoryConstraintNormalizer();
        $normalizers[] = new WmsUpdateWarehouseItemRequestNormalizer();
        $normalizers[] = new WmsUpdateTransferRequestNormalizer();
        $normalizers[] = new WmsCreateRouteRequestNormalizer();
        $normalizers[] = new WmsUpdateRouteRequestNormalizer();
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
        $normalizers[] = new WmsAvailableProjectionItemNormalizer();
        $normalizers[] = new WmsUnavailableProjectionItemNormalizer();
        $normalizers[] = new WmsCreateClaimRequestNormalizer();
        $normalizers[] = new WmsCreateTransferRequestNormalizer();
        $normalizers[] = new WmsWarehouseItemNormalizer();
        $normalizers[] = new WmsRouteNormalizer();
        $normalizers[] = new WmsHopNormalizer();
        $normalizers[] = new WmsLocationNormalizer();
        $normalizers[] = new WmsScheduleNormalizer();
        $normalizers[] = new WmsDurationNormalizer();
        $normalizers[] = new WmsStackReferenceNormalizer();
        $normalizers[] = new WmsWarehouseNormalizer();
        $normalizers[] = new WmsTransferReportNormalizer();
        $normalizers[] = new WmsProjectionNormalizer();
        $normalizers[] = new WmsAvailableRouteNormalizer();
        $normalizers[] = new WmsConstraintNormalizer();
        $normalizers[] = new WmsSortNormalizer();
        $normalizers[] = new WmsBackorderNormalizer();
        $normalizers[] = new WmsClaimNormalizer();
        $normalizers[] = new WmsClaimItemNormalizer();
        $normalizers[] = new WmsTransferNormalizer();
        $normalizers[] = new WmsSubTransferSummaryNormalizer();
        $normalizers[] = new WmsSubTransferNormalizer();
        $normalizers[] = new WmsSubTransferItemNormalizer();
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
        $normalizers[] = new LcsListSearchNormalizer();
        $normalizers[] = new LcsListSearchConstraintNormalizer();
        $normalizers[] = new LcsShipmentSearchNormalizer();
        $normalizers[] = new LcsShipmentSearchConstraintNormalizer();
        $normalizers[] = new LcsLocationSkuNormalizer();
        $normalizers[] = new LcsHandlingListUpdateNormalizer();
        $normalizers[] = new LcsHandlingListItemUpdateNormalizer();
        $normalizers[] = new LcsHandlingListItemNormalizer();
        $normalizers[] = new LcsHandlingModelNormalizer();
        $normalizers[] = new LcsHandlingListResponseNormalizer();
        $normalizers[] = new LcsHandlingListNormalizer();
        $normalizers[] = new LcsListedHandlingListNormalizer();
        $normalizers[] = new LcsLocationPositionNormalizer();
        $normalizers[] = new LcsLabelRequestNormalizer();
        $normalizers[] = new LcsFileNormalizer();
        $normalizers[] = new LcsMethodNormalizer();
        $normalizers[] = new LcsShipmentNormalizer();
        $normalizers[] = new LcsShipmentAddressingNormalizer();
        $normalizers[] = new LcsShipmentAddressingNormalizer();
        $normalizers[] = new LcsShipmentAddressingCarrierNormalizer();
        $normalizers[] = new LcsBackorderItemNormalizer();
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
        $normalizers[] = new LcsShipmentModelStackNormalizer();
        $normalizers[] = new SplJobNormalizer();
        $normalizers[] = new SplJobModelNormalizer();
        $normalizers[] = new SplJobResultNormalizer();
        $normalizers[] = new SplStatusNormalizer();
        $normalizers[] = new OdrDisposalNormalizer();
        $normalizers[] = new OdrLogNormalizer();
        $normalizers[] = new OdrStackNormalizer();
        $normalizers[] = new OdrStackModelNormalizer();
        $normalizers[] = new OdrStackAddModelNormalizer();
        $normalizers[] = new OdrStackDeleteModelNormalizer();
        $normalizers[] = new OdrTransitionModelNormalizer();
        $normalizers[] = new OdrItemNormalizer();
        $normalizers[] = new OdrItemModelNormalizer();
        $normalizers[] = new OdrGroupNormalizer();
        $normalizers[] = new OdrSearchNormalizer();
        $normalizers[] = new OdrSearchConstraintNormalizer();
        $normalizers[] = new OdrSkuNormalizer();
        $normalizers[] = new OdrSkuResultNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestSizeNormalizer();
        $normalizers[] = new CntHtmlToPdfRequestMarginNormalizer();
        $normalizers[] = new CatFilterSetNormalizer();
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
        $normalizers[] = new IamCardsPostBodyNormalizer();
        $normalizers[] = new IamLogsFiltersGetResponse200Normalizer();
        $normalizers[] = new IamTenantsPostResponse200Normalizer();
        $normalizers[] = new IamTenantsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsInvitesIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsRequestsPostBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsRequestsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsInvitesPostBodyNormalizer();
        $normalizers[] = new IamOauthForwardReferenceGetResponse200Normalizer();
        $normalizers[] = new WmsClaimsPostResponse200Normalizer();
        $normalizers[] = new WmsClaimsIdExtendPutBodyNormalizer();
        $normalizers[] = new WmsInventoryPostBodyNormalizer();
        $normalizers[] = new CntDirectoriesGetResponse200Normalizer();
        $normalizers[] = new LcsListsIdItemsPutResponse200Normalizer();
        $normalizers[] = new LcsListsIdStatePutResponse200Normalizer();
        $normalizers[] = new LcsLocationsIdPositionsPutResponse200Normalizer();
        $normalizers[] = new LcsLocationsIdSkusPutResponse200Normalizer();
        $normalizers[] = new CatGroupsIdPricesPutResponse200Normalizer();
        $normalizers[] = new CatVatProductsPutResponse200Normalizer();
        $normalizers[] = new CatFiltersPutResponse200Normalizer();

        return $normalizers;
    }
}
