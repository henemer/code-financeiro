<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBanksData
 */
class CreateBanksData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $repository = app(\CodeFin\Repositories\BankRepository::class);
        foreach($this->getData() as $bankArray){
            $repository->create($bankArray);
        }
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

    public function getData() {
        return [
            [
                'name' => 'Caixa',
                'logo'=> new \Illuminate\Http\UploadedFile(
                    storage_path('app/files/banks/logos/caixa.jpeg'),
                    'caixa.jpeg'
                )
            ],
            [
                'name' => 'Banco do Brasil',
                'logo'=> new \Illuminate\Http\UploadedFile(
                    storage_path('app/files/banks/logos/banco-do-brasil-logo.jpg'),
                    'bancodobrasil.jpg'
                )
            ],
            [
                'name' => 'Bradesco',
                'logo'=> new \Illuminate\Http\UploadedFile(
                    storage_path('app/files/banks/logos/bradesco.png'),
                    'bradesco.jpg'
                )
            ],
            [
                'name' => 'Itaú',
                'logo'=> new \Illuminate\Http\UploadedFile(
                    storage_path('app/files/banks/logos/itau.png'),
                    'itau.jpg'
                )
            ],
            [
                'name' => 'Santander',
                'logo'=> new \Illuminate\Http\UploadedFile(
                    storage_path('app/files/banks/logos/santander.jpeg'),
                    'santander.jpg'
                )
            ]


        ];
    }
}
