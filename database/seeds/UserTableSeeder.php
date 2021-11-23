<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Clecyo Rodrigues',
            'status' => 'N',
            'email' => 'clecyo@sgia.com',
            'end_cep' => 71692715,
            'end_rua' => 'Quadra 301 conjunto 4 casa',
            'end_numero' => '14',
            'end_complemento' => 'a',
            'end_bairro' => 'Residencial Oeste São Sebastião',
            'end_cidade' => 'Brasília',
            'end_uf' => 'DF',
            'password' => bcrypt('12345678'),
        ]);
    }
}
