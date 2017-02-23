<?php

use CodeFin\Models\Bank;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankLogoDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $logo = new \Illuminate\Http\UploadedFile(
            storage_path('app/files/banks/logos/logo_no_image.jpg'),
            'logo_no_imagem.jpg'
        );
        $name = env('BANK_LOGO_DEFAULT');

        $destFile = Bank::logosDir();

        \Storage::disk('public')->putFileAs($destFile, $logo, $name);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
