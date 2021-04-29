<?php

use Illuminate\Database\Seeder;
use App\TipoDocumento;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_documento')->insert([
            'tipo_nome' => "tipo 1"
        ]);

        DB::table('tipo_documento')->insert([
            'tipo_nome' => "tipo 2"
        ]);

        DB::table('tipo_documento')->insert([
            'tipo_nome' => "tipo 3"
        ]);

        DB::table('tipo_documento')->insert([
            'tipo_nome' => "tipo 4"
        ]);
    }
}
