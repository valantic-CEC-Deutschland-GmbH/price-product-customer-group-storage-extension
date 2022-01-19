<?php

declare(strict_types = 1);

interface PriceProductCustomerGroupStorageFilterPluginInterface
{
    /**
     * Specification:
     * - Filters `PriceProductCustomerGroupStorageTransfer` out from array if it is non-actual or|and does not fit certain conditions.
     * - Returns array of filtered `PriceProductCustomerGroupStorageTransfer`.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\PriceProductMerchantRelationshipStorageTransfer> $priceProductMerchantRelationshipStorageTransfers
     *
     * @return array<\Generated\Shared\Transfer\PriceProductMerchantRelationshipStorageTransfer>
     */
    public function filter(array $priceProductMerchantRelationshipStorageTransfers): array;
}
