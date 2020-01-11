<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
            [
                'id_lekarza'=> 1,
                'id_pacjenta'=> 4,
                'rok_miesiac_dzien'=>20191227,
                'godzina_minuta'=>'11:00',
                'opis'=> 'opis wizyty test 1',
                'zalecenia'=>'zalecenia1',
            ], [
                'id_lekarza'=> 1,
                'id_pacjenta'=> 12,
                'rok_miesiac_dzien'=>20191228,
                'godzina_minuta'=>'17:00',
                'opis'=>'opis wizyty test 2',
                'zalecenia'=>'zalecenia2',
            ], [
                'id_lekarza'=> 2,
                'id_pacjenta'=> 5,
                'rok_miesiac_dzien'=>20191229,
                'godzina_minuta'=>'12:00',
                'opis'=>'opis wizyty test 4',
                'zalecenia'=>'zalecenia4',
            ], [
                'id_lekarza'=> 3,
                'id_pacjenta'=> 5,
                'rok_miesiac_dzien'=>20191222,
                'godzina_minuta'=>'16:00',
                'opis'=>'opis wizyty test 6',
                'zalecenia'=>'zalecenia6',
            ], [
                'id_lekarza'=> 3,
                'id_pacjenta'=> 4,
                'rok_miesiac_dzien'=>20191222,
                'godzina_minuta'=>'16:30',
                'opis'=>'opis wizyty test 5',
                'zalecenia'=>'zalecenia5',
		 ], [
                'id_lekarza'=> 3,
                'id_pacjenta'=> 4,
                'rok_miesiac_dzien'=>20191221,
                'godzina_minuta'=>'10:30',
                'opis'=>'opis wizyty test 7',
                'zalecenia'=>'zalecenia7',

            ], [
                'id_lekarza'=> 3,
                'id_pacjenta'=> 7,
                'rok_miesiac_dzien'=>20191221,
                'godzina_minuta'=>'11:30',
                'opis'=>'opis wizyty test 5',
                'zalecenia'=>'zalecenia5',
            ], [
                'id_lekarza'=> 4,
                'id_pacjenta'=> 7,
                'rok_miesiac_dzien'=>20191227,
                'godzina_minuta'=>'17:30',
                'opis'=>'opis wizyty test 5',
                'zalecenia'=>'zalecenia5',
            ], [
                'id_lekarza'=> 4,
                'id_pacjenta'=> 12,
                'rok_miesiac_dzien'=>20191227,
                'godzina_minuta'=>'18:30',
                'opis'=>'opis wizyty test 5',
                'zalecenia'=>'zalecenia5',
		 ], [
                'id_lekarza'=> 6,
                'id_pacjenta'=> 7,
                'rok_miesiac_dzien'=>20200112,
                'godzina_minuta'=>'13:30',
                'opis'=>'opis wizyty test 25',
                'zalecenia'=>'zalecenia25',
            ], [
                'id_lekarza'=> 6,
                'id_pacjenta'=> 12,
                'rok_miesiac_dzien'=>20200114,
                'godzina_minuta'=>'12:30',
                'opis'=>'opis wizyty test 15',
                'zalecenia'=>'zalecenia15',

            ], [
                'id_lekarza'=> 5,
                'id_pacjenta'=> 12,
                'rok_miesiac_dzien'=>20191227,
                'godzina_minuta'=>'10:30',
                'opis'=>'opis wizyty test 5',
                'zalecenia'=>'zalecenia5',
            ]
        ]);
    }
}
