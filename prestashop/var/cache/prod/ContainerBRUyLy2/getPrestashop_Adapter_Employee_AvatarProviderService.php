<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.employee.avatar_provider' shared service.

return $this->services['prestashop.adapter.employee.avatar_provider'] = new \PrestaShop\PrestaShop\Adapter\Employee\AvatarProvider(($this->services['prestashop.adapter.tools'] ?? ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));