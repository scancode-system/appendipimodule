<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation; 
use Modules\Portal\Entities\Append; 

class InsertAppendsRecordsIpi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $validation = Validation::where('module_name', 'ValidationProduct')->first();
        Append::create(['validation_id' => $validation->id, 'module' => 'AppendIpi', 'alias' => 'Ipi']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       (Append::where('module', 'AppendIpi')->first())->delete();
    }
}
