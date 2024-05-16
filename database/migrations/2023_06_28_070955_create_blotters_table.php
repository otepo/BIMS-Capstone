<?php

use App\Models\Blotter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        function generateBlotterId()
    {
        $today = Carbon::now();
        $year = $today->year;
        $month = $today->format('m');
        $count = Blotter::count();
        $padLength = 5;
        $blotterId = 'blttr' . $year . $month . str_pad($count + 1, $padLength, '0', STR_PAD_LEFT);
        return $blotterId;
    }
        Schema::create('blotters', function (Blueprint $table) {
            $table->string('blotterId')->primary();
            $table->string('complainantFullName');
            $table->string('complainantAddress');
            $table->string('complainantNumber');
            $table->string('complaineeAddress');
            $table->string('complaineeFullName');
            $table->string('complaineeNumber');
            $table->string('complaintSubject');
            $table->date('incidentDate');
            $table->text('complaint');
            $table->string('complaintStatus')->nullable()->default('On going');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blotters');
    }
};
