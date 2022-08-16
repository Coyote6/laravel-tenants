<?php
  
  
namespace Coyote6\LaravelBase\Traits;


use App\Models\User;


trait RemoveAcrossDbs {
	
	public function modelDeleted () {
		if (removeFromLandLord() && isTenant() && $this->getConnection()->getName() != 'master') {
			static::on('master')->delete($this->getKey());
		}
		else if (removeFromTenants() && isLandlord() && $this->getConnection()->getName() == 'master') {
//
// Get all db connections
//
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->delete($this->getKey());
		}
		else if (removeFromTenant() && isLandlord() && $this->getConnection()->getName() == 'master') {
			$defaultDriver = config('database', 'default');
			static::on($defaultDriver)->delete($this->getKey());
		}
	}
	
}