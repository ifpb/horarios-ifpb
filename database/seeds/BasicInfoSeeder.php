<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BasicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            [ 'name' => 'Segunda' ],
            [ 'name' => 'Terça' ],
            [ 'name' => 'Quarta' ],
            [ 'name' => 'Quinta' ],
            [ 'name' => 'Sexta' ],
        ]);

        DB::table('shifts')->insert([
            [ 'name' => 'Matutino' ],
            [ 'name' => 'Vespertino' ],
            [ 'name' => 'Noturno' ],
        ]);

        $matutino = DB::table('shifts')->where('name', 'Matutino')->first()->id;
        $vespertino = DB::table('shifts')->where('name', 'Vespertino')->first()->id;
        $noturno = DB::table('shifts')->where('name', 'Noturno')->first()->id;

        DB::table('times')->insert([
            // MATUTINO
            [
                'name' => 'M1',
                'starts' => extract_time('7:00'),
                'ends' => extract_time('7:50'),
                'shift_id' => $matutino
            ],
            [
                'name' => 'M2',
                'starts' => extract_time('7:50'),
                'ends' => extract_time('8:40'),
                'shift_id' => $matutino
            ],
            [
                'name' => 'M3',
                'starts' => extract_time('8:40'),
                'ends' => extract_time('9:30'),
                'shift_id' => $matutino
            ],
            [
                'name' => 'M4',
                'starts' => extract_time('9:50'),
                'ends' => extract_time('10:40'),
                'shift_id' => $matutino
            ],
            [
                'name' => 'M5',
                'starts' => extract_time('1:40'),
                'ends' => extract_time('11:30'),
                'shift_id' => $matutino
            ],
            [
                'name' => 'M6',
                'starts' => extract_time('11:30'),
                'ends' => extract_time('12:20'),
                'shift_id' => $matutino
            ],

            // VESPERTINO
            [
                'name' => 'T1',
                'starts' => extract_time('13:00'),
                'ends' => extract_time('13:50'),
                'shift_id' => $vespertino
            ],
            [
                'name' => 'T2',
                'starts' => extract_time('13:50'),
                'ends' => extract_time('14:40'),
                'shift_id' => $vespertino
            ],
            [
                'name' => 'T3',
                'starts' => extract_time('14:40'),
                'ends' => extract_time('15:30'),
                'shift_id' => $vespertino
            ],
            [
                'name' => 'T4',
                'starts' => extract_time('15:50'),
                'ends' => extract_time('16:40'),
                'shift_id' => $vespertino
            ],
            [
                'name' => 'T5',
                'starts' => extract_time('16:40'),
                'ends' => extract_time('17:30'),
                'shift_id' => $vespertino
            ],
            [
                'name' => 'T6',
                'starts' => extract_time('17:30'),
                'ends' => extract_time('18:20'),
                'shift_id' => $vespertino
            ],

            // NOTURNO
            [
                'name' => 'N1',
                'starts' => extract_time('18:20'),
                'ends' => extract_time('19:10'),
                'shift_id' => $noturno
            ],
            [
                'name' => 'N2',
                'starts' => extract_time('19:10'),
                'ends' => extract_time('20:00'),
                'shift_id' => $noturno
            ],
            [
                'name' => 'N3',
                'starts' => extract_time('20:00'),
                'ends' => extract_time('20:50'),
                'shift_id' => $noturno
            ],
            [
                'name' => 'N4',
                'starts' => extract_time('20:50'),
                'ends' => extract_time('21:40'),
                'shift_id' => $noturno
            ],
            [
                'name' => 'N5',
                'starts' => extract_time('21:40'),
                'ends' => extract_time('22:30'),
                'shift_id' => $noturno
            ],
            [
                'name' => 'N6',
                'starts' => extract_time('22:30'),
                'ends' => extract_time('23:20'),
                'shift_id' => $noturno
            ],
        ]);
    }
}
