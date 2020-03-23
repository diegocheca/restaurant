<?php

use Illuminate\Database\Seeder;
use Faker\Factory  as Faker;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i=0; $i < 30; $i++) {
        	$dni_random =  $faker->numberBetween($min = 10000000, $max = 60000000);
			DB::table('clientes')->insert([
	            'id'=>null,
				'nombre' => $faker->firstNameFemale,
				'apellido' => $faker->lastName,
				'telefono1' => $faker->e164PhoneNumber,
				'telefono2' => $faker->e164PhoneNumber,
				'telefono3' => $faker->e164PhoneNumber,
				'telefono4' => $faker->e164PhoneNumber,
				'direccion1' => $faker->streetAddress,
				'ciudad1' => $faker->city,
				'numerodireccion1' => $faker->numberBetween($min = 1000, $max = 9000),
				'orientacion1' => $faker->randomElement($array = array ('sur','este','oeste','norte')),
				'direccion2' => $faker->streetAddress,
				'ciudad2' => $faker->city,
				'numerodireccion2' => $faker->numberBetween($min = 1000, $max = 9000),
				'orientacion2' => $faker->randomElement($array = array ('sur','este','oeste','norte')),
				'direccion' => $faker->streetAddress,
				'ciudad3' => $faker->city,
				'numerodireccion3' => $faker->numberBetween($min = 1000, $max = 9000),
				'orientacion3' => $faker->randomElement($array = array ('sur','este','oeste','norte')),
				'dni' => $dni_random,
				'cantidad_compras' => $faker->numberBetween($min = 0, $max = 50),
				'avatar' => null,
				'cuit' => '20-'.$dni_random.'-7',
				'observacion' => $faker->text(142),
				'quien_creo' => 1,
				'quien_modfico' => 1,
				'promos' => null,
				'afavor' => null,
				'deuda' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000),
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s"),
				'deleted_at' => null,
				'ultima_compra'=> date("Y-m-d H:i:s"),
				'facebook' =>null,
				'instagram' => null,
				'email' => $faker->email,
	        ]);
        }
    }
}


