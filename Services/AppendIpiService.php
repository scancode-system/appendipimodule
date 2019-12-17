<?php

namespace Modules\AppendIpi\Services;


class AppendIpiService {
	
	public function fields(){
		return config('appendipi.fields');
	}

	public function sample(){
		return config('appendipi.sample');
	}

}
