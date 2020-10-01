<?php

namespace Modules\AppendIpi\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;
use Modules\Portal\Rules\NullRule;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'ipi' =>  'numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/'
		];
	}

	public function modifiers()
	{
		return  [
			['rule' => ['ipi' => [new NullRule()]], 'filter' => 'setToZero']
		];
	}

	public function columnsFormat($header)
	{
		return  [];
	}

}