<?php
	
	
return [
	
	// Set whether or not this is a landlord or tenant site.
	// Landlord is set by default so the first install is
	// the master site.
	//
	// @return bool
	//
	'landlord' => env('LANDLORD', true),
	
	//
	// To use the replicate and delete across database features,
	// a master database configuration must be set, so that the
	// site knows where to look for information on the tenants
	// and their database connections.
	//
	// In the tenant .env files set the following site configs:
	// 
	// MASTER_DB_DRIVER (Optional)
	// MASTER_DB_URL
	// MASTER_DB_HOST (Optional)
	// MASTER_DB_PORT (Optional)
	// MASTER_DB_DATABASE
	// MASTER_DB_USERNAME
	// MASTER_DB_PASSWORD
	// MASTER_DB_SOCKET (Optional)
	// MASTER_DB_CHARACTER_SET (Optional)
	// MASTER_DB_COLLATION (Optional)
	// MASTER_DB_PREFIX (Optional)
	// MASTER_DB_PREFIX_INDEXES (Optional)
	// MASTER_DB_STRICT (Optional)
	// MASTER_DB_ENGINE (Optional)
	//
/*
	'master' => [
        'driver' => env('MASTER_DB_URL', 'mysql'),
        'url' => env('MASTER_DB_URL'),
        'host' => env('MASTER_DB_HOST', '127.0.0.1'),
        'port' => env('MASTER_DB_PORT', '3306'),
        'database' => env('MASTER_DB_DATABASE', 'forge'),
        'username' => env('MASTER_DB_USERNAME', 'forge'),
        'password' => env('MASTER_DB_PASSWORD', ''),
        'unix_socket' => env('MASTER_DB_SOCKET', ''),
        'charset' => env('MASTER_DB_CHARSET','utf8mb4'),
        'collation' => env('MASTER_DB_COLLATION','utf8mb4_unicode_ci'),
        'prefix' => env('MASTER_DB_PREFIX',''),
        'prefix_indexes' => env('MASTER_DB_PREFIX_INDEXES', true),
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ],
*/

	//
	// Set whether or not to duplicate models across databases
	// using the ReplicateAcrossDbs trait to determine to copy
	// and delete data from Landlord or Tenant sites on model
	// creation and updates.
	//
	// @see Coyote6\LaravelTenants\Traits\ReplicateAcrossDbs
	//
	// @return bool
	//
	'replicate-to-landlord' => env('REPLICATE_TO_LANDLOARD', false),
	'replicate-to-tenants' => env('REPLICATE_TO_TENANTS', false),
	'replicate-to-tenant' => env('REPLICATE_TO_TENANT', false),
	
	//
	// Set whether or not to remove models across databases
	// using the DeleteAcrossDbs trait to determine to delete 
	// data from Landlord or Tenant sites on model deletion.
	//
	// @see Coyote6\LaravelTenants\Traits\RemoveAcrossDbs
	// @return bool
	//
	'remove-from-landlord' => env('DELETE_FROM_LANDLOARD', false),
	'remove-from-tenants' => env('DELETE_FROM_TENANTS', false),
	'remove-from-tenant' => env('DELETE_FROM_TENANT', false),
	
];
