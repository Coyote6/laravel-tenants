<?php

//
// Global helper functions to help control landlord/tenant
// relationships throughout the site(s).
//

//
// @return bool
//
if (!function_exists('isLandlord')) {
	function isLandlord () {
		return (bool) config('c6gx-tenants.landlord', false);
	}
}


//
// @return bool
//
if (!function_exists('isTenant')) {
	function isTenant () {
		return !isLandlord();
	}
}


//
// @return bool
//
if (!function_exists('replicateToLandlord')) {
	function replicateToLandlord () {
		return (bool) config('c6gx-tenants.replicate-to-landlord', false);
	}
}


//
// @return bool
//
if (!function_exists('replicateToTenant')) {
	function replicateToTenant () {
		return (bool) config('c6gx-tenants.replicate-to-tenant', false);
	}
}


//
// @return bool
//
if (!function_exists('replicateToTenants')) {
	function replicateToTenants () {
		return (bool) config('c6gx-tenants.replicate-to-tenants', false);
	}
}


//
// @return bool
//
if (!function_exists('removeFromLandlord')) {
	function removeFromLandlord () {
		return (bool) config('c6gx-tenants.remove-from-landlord', false);
	}
}


//
// @return bool
//
if (!function_exists('removeFromTenant')) {
	function removeFromTenant () {
		return (bool) config('c6gx-tenants.remove-from-tenant', false);
	}
}


//
// @return bool
//
if (!function_exists('removeFromTenants')) {
	function removeFromTenants () {
		return (bool) config('c6gx-tenants.remove-from-tenants', false);
	}
}
