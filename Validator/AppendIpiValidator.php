<?php

namespace Modules\AppendIpi\Validator; 


class AppendIpiValidator
{

	public function rule($data){
		return [
			'ipi' =>  'numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/'
		];
	}

	public function filterRules($data)
	{

	}

}
