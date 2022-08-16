<?php
  
  
namespace Coyote6\LaravelBase\Traits;


use App\Models\User;


trait ReplicateAcrossDbs {
	
	public function modelCreated () {
		if (replicateToLandLord() && isTenant() && $this->getConnection()->getName() != 'master') {
			static::on('master')->create($this->toArray());
		}
		else if (replicateToTenants() && isLandlord() && $this->getConnection()->getName() == 'master') {
//
// Load all configs for each tenant
//
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->create($this->toArray());
		}
		else if (replicateToTenant() && isLandlord() && $this->getConnection()->getName() == 'master') {
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->create($this->toArray());
		}
	}
	
	public function modelUpdated () {
		if (replicateToLandLord() && isTenant() && $this->getConnection()->getName() != 'master') {
			static::on('master')->updateCreate($this->getKey(), $this->toArray());
		}
		else if (replicateToTenants() && isLandlord() && $this->getConnection()->getName() == 'master') {
//
// Load all configs for each tenant
//
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->updateCreate($this->getKey(), $this->toArray());
		}
		else if (replicateToTenant() && isLandlord() && $this->getConnection()->getName() == 'master') {
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->updateCreate($this->getKey(), $this->toArray());
		}
	}
	
}