<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brgys = [
            ['name'=>'Agusan Canyon', 'pbname'=>'Eduardo G. Corbit', 'verified_name'=>'Angel B. Cagadas', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Alae', 'pbname'=>'Erasmo Cesar A. Ramirez', 'verified_name'=>'Nelfa R. Tero', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Dahilayan', 'pbname'=>'Venchito S. Lugmay', 'verified_name'=>'Christian B. Hilaylay', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Dalirig', 'pbname'=>'Floramae D. Penaso', 'verified_name'=>'Cecil P. Umpay', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Damilag', 'pbname'=>'Allag G. Torres, Jr.', 'verified_name'=>'Arlene B. Arenal', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Dicklum', 'pbname'=>'Nelson S. Binayao', 'verified_name'=>'Charito A. Villegas', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Guilang-guilang', 'pbname'=>'Glenn S. Gulle', 'verified_name'=>'Peloche T. Vergara', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Kalugmanan', 'pbname'=>'Hernando G. Daluan', 'verified_name'=>'Banyboy G. Pianong', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Lindaban', 'pbname'=>'Leonardo D. Anlagan', 'verified_name'=>'Jerick G. Tunhawan', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Lingion', 'pbname'=>'Elbern J. Onahon', 'verified_name'=>'Lourdes M. Dubria', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Lunocan', 'pbname'=>'Melba A. Batoon', 'verified_name'=>'Jennifrey L. Abellon', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Maluko', 'pbname'=>'Ramir M. Linohon', 'verified_name'=>'Irish Mae S. Anlicao', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Mambatangan', 'pbname'=>'Angelie S. Roa', 'verified_name'=>'Roberto A. Santiago, Jr.', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Mampayag', 'pbname'=>'Eleazar C. Orina', 'verified_name'=>'Marites O. Fabro', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Mantibugao', 'pbname'=>'Benjamin J. Magtajas, Jr.', 'verified_name'=>'Evangeline P. Frasco', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Minsuro', 'pbname'=>'Maryjane P. Guilayan', 'verified_name'=>'Elvie S. Lapuz', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'San Miguel', 'pbname'=>'Benjamin S. Miñoza', 'verified_name'=>'Orlando S. Sarabia', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Sankanan', 'pbname'=>'Dennis G. Salvo', 'verified_name'=>'Charity D. Cajilla', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Santiago', 'pbname'=>'Jerville O. Senagonia', 'verified_name'=>'Ginaflor C. Yu-ana', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Sto. Nino', 'pbname'=>'Yolanda M. Valdehueza', 'verified_name'=>'Nora M. Villasis', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Tankulan', 'pbname'=>'Romeo P. Dagunlay', 'verified_name'=>'Leonora S. Ugat', 'verified_position'=>'Secretary of the Sangguniang Barangay'],
            ['name'=>'Ticala', 'pbname'=>'Kineth G. Tanto', 'verified_name'=>'Renato S. Coguihan, Jr.', 'verified_position'=>'Secretary of the Sangguniang Barangay']
        ];

        foreach ($brgys as $brgy){
            DB::table('barangays')->insert([
                'name' => $brgy['name'],
                'pbname' => $brgy['pbname'],
                'verified_name' => $brgy['verified_name'],
                'verified_position' => $brgy['verified_position']
            ]);
        }
    }
}
