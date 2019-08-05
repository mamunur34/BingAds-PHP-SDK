<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getlistitemsbysharedlist?view=bingads-13 GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        /**
         * The list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;
    }
}