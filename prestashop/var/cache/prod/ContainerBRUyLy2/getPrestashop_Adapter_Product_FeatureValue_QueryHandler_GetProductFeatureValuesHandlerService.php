<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.feature_value.query_handler.get_product_feature_values_handler' shared service.

return $this->services['prestashop.adapter.product.feature_value.query_handler.get_product_feature_values_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\QueryHandler\GetProductFeatureValuesHandler(($this->services['prestashop.adapter.feature.repository.feature_value_repository'] ?? $this->load('getPrestashop_Adapter_Feature_Repository_FeatureValueRepositoryService.php')));