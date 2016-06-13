<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ["Carlos Nápoli", "cnapoli@opsa.com"], 
            ["Oscar Polignano", "opolignano@siaco.com.ar"], 
            ["Guillermo Nervi", "nervi@consulmed.com.ar"], 
            ["Ezequiel Basilico", "ezequiel.basilico@dentalsystem.com.ar"], 
            ["Mario Alperin", "marioalperin@gmail.com"], 
            ["Antonio Cumini", "acumini211@gmail.com"], 
            ["Rogelio Nuñez", "rogelio.nunez@medicus.com.ar"], 
            ["Mery Brauchli", "mbrauchli@mbodontologia.com.ar"], 
            ["Elida Cosentino", "administracion@st-leger.com"], 
            ["Daniel Klurfan", "dek12@sion.com"], 
            ["Claudia Tuozzo", "presidencia@amasis.com.ar"], 
            ["Ofelia Garcia", "garciaofelia@hotmail.com"], 
            ["Marcelo Shwiff", "mshwiff@fibertel.com.ar"], 
            ["Marcelo Destefano", "mdestefano@consulmed.com.ar"], 
            ["Roberto Basile", "robertobasile06@yahoo.com.ar"], 
            ["Martín Ranalli", "martinr@tcmaxonline.com"],
            ];
            

        /*$users = [
            ["Andrés Teszkiewicz","andres.teszkiewicz@cardumen.com.ar"],
        ];*/

        foreach($users as $user){
            $pass = str_random(6);
            DB::table('users')->insert([
                    'name' => $user[0],
                    'email' => $user[1],
                    'password' => bcrypt($pass),
                ]);
                Mail::send('auth.email-user', array('email' => $user[1],'clave'=>$pass), function($message) use ($user)
                {
                    $message->from('info@caeso.com.ar','Caeso')->to($user[1], $user[0])->subject('Acceso a consulta de la bolsa de trabajo de Caeso');
                });
        }
    }

}
