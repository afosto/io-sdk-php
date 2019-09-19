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
        $normalizers[] = new CntProxyNormalizer();
        $normalizers[] = new CntProxyModelNormalizer();
        $normalizers[] = new CntProxyUpdateModelNormalizer();
        $normalizers[] = new CntConfigNormalizer();
        $normalizers[] = new OdrStackNormalizer();
        $normalizers[] = new OdrStackModelNormalizer();
        $normalizers[] = new OdrStackAddModelNormalizer();
        $normalizers[] = new OdrTransitionModelNormalizer();
        $normalizers[] = new OdrItemNormalizer();
        $normalizers[] = new OdrItemModelNormalizer();
        $normalizers[] = new OdrTypeNormalizer();
        $normalizers[] = new OdrGroupNormalizer();
        $normalizers[] = new OdrStackReferenceNormalizer();
        $normalizers[] = new OdrSearchNormalizer();
        $normalizers[] = new OdrSkuNormalizer();
        $normalizers[] = new OdrSkuResultNormalizer();
        $normalizers[] = new OdrAddressSetNormalizer();
        $normalizers[] = new OdrAddressSetItemNormalizer();
        $normalizers[] = new OdrAddressSetItemModelNormalizer();
        $normalizers[] = new OdrAddressSetModelNormalizer();
        $normalizers[] = new OdrAddressNormalizer();
        $normalizers[] = new OdrFormattedAddressSetNormalizer();
        $normalizers[] = new OdrFormattedAddressSetAddressesItemNormalizer();
        $normalizers[] = new OdrOrderNormalizer();
        $normalizers[] = new OdrOrderModelNormalizer();
        $normalizers[] = new OdrOrderUpdateModelNormalizer();
        $normalizers[] = new OdrStateNormalizer();
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
        $normalizers[] = new IamSecretRequestNormalizer();
        $normalizers[] = new IamSecretUpdateNormalizer();
        $normalizers[] = new IamBackupNormalizer();
        $normalizers[] = new IamBackupResponseNormalizer();
        $normalizers[] = new IamValidationRequestNormalizer();
        $normalizers[] = new IamValidationResponseNormalizer();
        $normalizers[] = new IamSecretReadNormalizer();
        $normalizers[] = new IamSecretNormalizer();
        $normalizers[] = new SplJobNormalizer();
        $normalizers[] = new SplJobModelNormalizer();
        $normalizers[] = new SplJobResultNormalizer();
        $normalizers[] = new SplStatusNormalizer();
        $normalizers[] = new MesParticipantNormalizer();
        $normalizers[] = new MesNotifyNormalizer();
        $normalizers[] = new MesConversationNormalizer();
        $normalizers[] = new MesMessageNormalizer();
        $normalizers[] = new MesSearchNormalizer();
        $normalizers[] = new MesConversationCreateNormalizer();
        $normalizers[] = new MesMessageCreateNormalizer();
        $normalizers[] = new MesMessageAddNormalizer();
        $normalizers[] = new MesParticipantCreateNormalizer();
        $normalizers[] = new MesSubscriptionNormalizer();
        $normalizers[] = new MesCancelNormalizer();
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
        $normalizers[] = new OdrChannelNormalizer();
        $normalizers[] = new OdrChannelModelNormalizer();
        $normalizers[] = new OdrChannelSettingsNormalizer();
        $normalizers[] = new OdrPhonenumberModelNormalizer();
        $normalizers[] = new OdrPhonenumberNormalizer();
        $normalizers[] = new MesMailModelNormalizer();
        $normalizers[] = new MesContactModelNormalizer();
        $normalizers[] = new MesContactNormalizer();
        $normalizers[] = new MesMailNormalizer();
        $normalizers[] = new MesInboxNormalizer();
        $normalizers[] = new MesInboxModelNormalizer();
        $normalizers[] = new MesInboxUpdateModelNormalizer();
        $normalizers[] = new MesDnsRecordNormalizer();
        $normalizers[] = new MesDomainNormalizer();
        $normalizers[] = new MesDomainModelNormalizer();
        $normalizers[] = new CntUploadRequestNormalizer();
        $normalizers[] = new CntUploadResponseNormalizer();
        $normalizers[] = new CntFileNormalizer();
        $normalizers[] = new SplPrinterNormalizer();
        $normalizers[] = new SplPrinterModelNormalizer();
        $normalizers[] = new SplConnectionNormalizer();
        $normalizers[] = new SplInboxNormalizer();
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
        $normalizers[] = new OdrStockQueryNormalizer();
        $normalizers[] = new OdrTransferReportNormalizer();
        $normalizers[] = new OdrClaimCreateNormalizer();
        $normalizers[] = new OdrClaimNormalizer();
        $normalizers[] = new OdrClaimItemNormalizer();
        $normalizers[] = new OdrTransferCreateNormalizer();
        $normalizers[] = new OdrTransferNormalizer();
        $normalizers[] = new OdrTransferRouteNormalizer();
        $normalizers[] = new OdrRouteModelNormalizer();
        $normalizers[] = new OdrRouteUpdateModelNormalizer();
        $normalizers[] = new OdrRouteNormalizer();
        $normalizers[] = new OdrHopNormalizer();
        $normalizers[] = new OdrHopCreateModelNormalizer();
        $normalizers[] = new OdrHopUpdateModelNormalizer();
        $normalizers[] = new OdrLocationNormalizer();
        $normalizers[] = new OdrLocationModelNormalizer();
        $normalizers[] = new OdrLocationUpdateModelNormalizer();
        $normalizers[] = new OdrScheduleNormalizer();
        $normalizers[] = new OdrWarehouseModelNormalizer();
        $normalizers[] = new OdrWarehouseNormalizer();
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
        $normalizers[] = new IamAddressNormalizer();
        $normalizers[] = new IamUserTokenRequestNormalizer();
        $normalizers[] = new IamUserTokenResponseNormalizer();
        $normalizers[] = new IamSignupNormalizer();
        $normalizers[] = new IamInvoiceNormalizer();
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
        $normalizers[] = new OdrCustomerModelNormalizer();
        $normalizers[] = new OdrCustomerNormalizer();
        $normalizers[] = new OdrGroupModelNormalizer();
        $normalizers[] = new OdrVerifyRequestNormalizer();
        $normalizers[] = new OdrTokenRequestNormalizer();
        $normalizers[] = new OdrPasswordResetNormalizer();
        $normalizers[] = new OdrSignOnNormalizer();
        $normalizers[] = new OdrTokenResponseNormalizer();
        $normalizers[] = new IamLogNormalizer();
        $normalizers[] = new OdrAddressesIdPostBodyNormalizer();
        $normalizers[] = new OdrOrdersIdStackPostBodyNormalizer();
        $normalizers[] = new CntDirectoriesGetResponse200Normalizer();
        $normalizers[] = new OdrClaimsIdExtendPutBodyNormalizer();
        $normalizers[] = new IamTenantsPostResponse200Normalizer();
        $normalizers[] = new IamTenantsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsInvitesIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsRequestsPostBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsRequestsIdPutBodyNormalizer();
        $normalizers[] = new IamSubtenantsAuthorizationsInvitesPostBodyNormalizer();
        $normalizers[] = new IamOauthForwardReferenceGetResponse200Normalizer();
        $normalizers[] = new IamCardsPostBodyNormalizer();
        $normalizers[] = new IamLogsFiltersGetResponse200Normalizer();

        return $normalizers;
    }
}
