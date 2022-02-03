<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangayMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brgymembers = [
            ['barangay_id'=>'1', 'name'=>'Webster S. Demata', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'1', 'name'=>'Simeon T. Degamo, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'1', 'name'=>'Glicera M. Orique', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'1', 'name'=>'Marlon R. Gonzales', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'1', 'name'=>'Carmelita D. Setosta', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'1', 'name'=>'Romela B. Somooy', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'1', 'name'=>'Sweet Melanie S. Ganas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'1', 'name'=>'Yendi S. Cachapero', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'1', 'name'=>'Angel B. Cagadas', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'1', 'name'=>'Ghilyn L. Valentin', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'2', 'name'=>'Jocelyn A. Legaspi', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'2', 'name'=>'John Marvin C. Namocatcat, Sr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'2', 'name'=>'Roy L. Ganas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'2', 'name'=>'Debohrah Y. Marinay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'2', 'name'=>'Junidini J. Artajo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'2', 'name'=>'Teogenes R. Abarabar, Sr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'2', 'name'=>'Deogracias O. Piosca', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'2', 'name'=>'Keith Emilian C. Melendez', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'2', 'name'=>'Nelfa R. Tero', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'2', 'name'=>'Norielyn P. Apiag', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'3', 'name'=>'Haidee J. Somo-oy', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'3', 'name'=>'Carlito S. Bayoc', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'3', 'name'=>'Danilo A. Bayoc', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'3', 'name'=>'Darniel H. Ubagan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'3', 'name'=>'Evelyn S. Tomampoc', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'3', 'name'=>'Rey S. Lugmay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'3', 'name'=>'Joe Rey Mar S. Lugmay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'3', 'name'=>'Allan John S. Bayoc', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'3', 'name'=>'Christian L. Hilaylay', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'3', 'name'=>'Jun Mark Anthony M. Jurayan', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'4', 'name'=>'Cesar R. Figuracion', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'4', 'name'=>'Lorena B. Umpay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'4', 'name'=>'Nilo O. Escol', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'4', 'name'=>'Eugenio M. Cahuan, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'4', 'name'=>'El Meleza C. Leparto', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'4', 'name'=>'Robert B. Tomonglay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'4', 'name'=>'Williard E. Valdez', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'4', 'name'=>'Vic Ignacio R. Taghoy', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'4', 'name'=>'Cecil P. Umpay', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'4', 'name'=>'Myzel B. Maglangit', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'5', 'name'=>'Allan  E. Cahoy', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'5', 'name'=>'Anthony G. Inihao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'5', 'name'=>'Jonathan S. Demata', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'5', 'name'=>'Lorenza I. Madjus', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'5', 'name'=>'Roberto S. Madula', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'5', 'name'=>'Eduardo Ralph S. Bagayas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'5', 'name'=>'Edmond A. Licuanan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'5', 'name'=>'Alejandro B. Arenal', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'5', 'name'=>'Arlene B. Arenal', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'5', 'name'=>'Rona R. Ensencio', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'6', 'name'=>'Tomasito A. Coquilla', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'6', 'name'=>'Pablo A. Jimenez, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'6', 'name'=>'Ildefonso O. Pablo, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'6', 'name'=>'Shirley L. Tagapulot', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'6', 'name'=>'Brian T. Lozada', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'6', 'name'=>'Fausto S. Bantilan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'6', 'name'=>'Roque A. Balcos', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'6', 'name'=>'Ethel Q. Emata', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'6', 'name'=>'Charito A. Villegas', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'6', 'name'=>'Lourdes A. Dagulo', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'7', 'name'=>'Franco G. Campos', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'7', 'name'=>'Arlyn C. Bulalacao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'7', 'name'=>'Joy Rosana E. Sugalang', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'7', 'name'=>'Marvin A. Abunda', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'7', 'name'=>'Franklin C. Iba', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'7', 'name'=>'Gina P. Gulle', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'7', 'name'=>'Raul T. Jumawan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'7', 'name'=>'Jonathan A. Paculba', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'7', 'name'=>'Peloche T. Vergara', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'7', 'name'=>'Evelyn C. Dagpong', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'8', 'name'=>'Menelio P. Goayan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'8', 'name'=>'Marilyn A. Sitoy', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'8', 'name'=>'Henry L. Pinohon', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'8', 'name'=>'Richard P. Anlagan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'8', 'name'=>'Marites M. Libay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'8', 'name'=>'Jimmy S. Anlagan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'8', 'name'=>'Marcial P. Goayan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'8', 'name'=>'Lester Jay. P. Castro', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'8', 'name'=>'Banyboy G. Pianong', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'8', 'name'=>'Divina C. Sumihay', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'9', 'name'=>'Charlyn D. Abales', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'9', 'name'=>'Rocky Boy P. Domingo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'9', 'name'=>'Elizabeth D. Abales', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'9', 'name'=>'Redge B. Gawahan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'9', 'name'=>'Liezel A. Sayongan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'9', 'name'=>'Mary Jane T. Vergara', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'9', 'name'=>'Jhonel A. Supieza', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'9', 'name'=>'Lorime D. Dayanay', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'9', 'name'=>'Jerick G. Tunhawan', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'9', 'name'=>'Renerio J. Nahial', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'10', 'name'=>'Ruel S. Lompon', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'10', 'name'=>'Peter L. Ompoc', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'10', 'name'=>'Crisinette A. Pastrano', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'10', 'name'=>'Efren O. Hablos', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'10', 'name'=>'Dalphon G. Onahon', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'10', 'name'=>'Merelin Y. Galacio', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'10', 'name'=>'Catherine C. Cabanday', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'10', 'name'=>'Jasher Dave D. Vicariato', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'10', 'name'=>'Lourdes M. Dubria', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'10', 'name'=>'Miraflor O. Siton', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'11', 'name'=>'Araceli R. Bacayana', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'11', 'name'=>'Elvis S. Leyson', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'11', 'name'=>'Cherly T. Micayabas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'11', 'name'=>'Editha L. Englatera', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'11', 'name'=>'Jonas M. Amba', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'11', 'name'=>'Joel N. Nillas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'11', 'name'=>'Alpha Omega P. Niere', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'11', 'name'=>'John Anthony G. Leyson', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'11', 'name'=>'Jennifrey L. Abellon', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'11', 'name'=>'Levy R. Salingay', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'12', 'name'=>'Reynaldo E. Ricaforte', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'12', 'name'=>'Nelson D. Bajao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'12', 'name'=>'Mark T. Ubal-ubal', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'12', 'name'=>'Rosemarie T. Chan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'12', 'name'=>'Alfredo C. Bayo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'12', 'name'=>'Clifton D. Bahaynon', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'12', 'name'=>'Preciosa L. Guillermo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'12', 'name'=>'Ismael A. Payag', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'12', 'name'=>'Irish Mae S. Anlicao', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'12', 'name'=>'Marichu T. Binayao', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'13', 'name'=>'Edward D. Dampal', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'13', 'name'=>'Allan T. Tinay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'13', 'name'=>'Junrey P. Lagat', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'13', 'name'=>'Jerry R. Balaba', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'13', 'name'=>'Hanie P. Abris', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'13', 'name'=>'Evangeline T. Amansec', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'13', 'name'=>'Melan Dave C. Lallican', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'13', 'name'=>'Neil Christian G. Tilap', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'13', 'name'=>'Roberto A. Santiago, Jr.', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'13', 'name'=>'Levi M. Ysalina', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'14', 'name'=>'Andrew B. Sabanpan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'14', 'name'=>'Anthony Paul S. Egar', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'14', 'name'=>'Gilbert S. Manapil', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'14', 'name'=>'Shirley H. Galdo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'14', 'name'=>'Ellen Grace P. Pao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'14', 'name'=>'Rester P. Macapulay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'14', 'name'=>'Edmark P. Opalla, Sr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'14', 'name'=>'Jobert D. Abao', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'14', 'name'=>'Marites O. Fabro', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'14', 'name'=>'Mary Jane S. Melendres', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'15', 'name'=>'Roy B. Suico', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'15', 'name'=>'Reynilo S. Cabonillas', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'15', 'name'=>'Gil C. Bunayog', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'15', 'name'=>'Merylinda K. Toyong', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'15', 'name'=>'Eduardo C. Abuso', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'15', 'name'=>'Liza G. Carangcarang', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'15', 'name'=>'Amelita C. Nieze', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'15', 'name'=>'Kathleen O. Amboy', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'15', 'name'=>'Evangeline P. Frasco', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'15', 'name'=>'Dessie V. Canto', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'16', 'name'=>'Amor S. Tibon', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'16', 'name'=>'Dennis B. Pagaduan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'16', 'name'=>'Roger M. Chavez', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'16', 'name'=>'Edwin O. Allena', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'16', 'name'=>'Roger A. Guilayan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'16', 'name'=>'Ma. Gloria P. Razalo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'16', 'name'=>'Eddie B. Sanghiron', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'16', 'name'=>'Jesrel L. Allena', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'16', 'name'=>'Elvie S. Lapuz', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'16', 'name'=>'Ruth A. Baluran', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'17', 'name'=>'Joaquin L. Fudolin', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'17', 'name'=>'John Windel J. Gallenero', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'17', 'name'=>'Mary Ann D. Edusma', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'17', 'name'=>'Jesus M. Galagar', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'17', 'name'=>'Sabina E. Babion', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'17', 'name'=>'Sanny D. Badelic', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'17', 'name'=>'Arsenio T. Mondilla', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'17', 'name'=>'Pauline Grace B. Gonzaga', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'17', 'name'=>'Orlando S. Sarabia', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'17', 'name'=>'Meldrid R. Lusterio', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'18', 'name'=>'Ariel L. Jenisan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'18', 'name'=>'Genevieve M. Monopollo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'18', 'name'=>'Julieto A. Baliguat', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'18', 'name'=>'Alfonso L. Dahe', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'18', 'name'=>'Bernie D. Guinayao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'18', 'name'=>'Jesus M. Vitor', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'18', 'name'=>'Alberto B. Buynay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'18', 'name'=>'Kyrr Heinritz N. Quiray', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'18', 'name'=>'Charity D. Cajilla', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'18', 'name'=>'Adelia C. Dahe', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'19', 'name'=>'Marcelo M. Gonhay, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'19', 'name'=>'Wilmer H. Sinontao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'19', 'name'=>'Heleborn S. Moncado', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'19', 'name'=>'Florita D. Guinontao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'19', 'name'=>'Pedrito S. Guinontao, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'19', 'name'=>'William C. Guminlao', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'19', 'name'=>'Elizabeth A. Sumohoy', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'19', 'name'=>'Jerick G. Berial', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'19', 'name'=>'Ginaflor C. Yu-ana', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'19', 'name'=>'Jeaneth S. Buclasan', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'20', 'name'=>'Guilbert G. Adlawan', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'20', 'name'=>'Proceso Q. Arienza', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'20', 'name'=>'Arsenio Cris M. Valdehuesa', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'20', 'name'=>'Rosalita B. Quino', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'20', 'name'=>'Gaudioso G. Dagunlay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'20', 'name'=>'Ernesto Q. Cogay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'20', 'name'=>'Erlinda P. Verde', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'20', 'name'=>'Federico L. Agbay III', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'20', 'name'=>'Nora M. Villasis', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'20', 'name'=>'Rosario N. Culanag', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'21', 'name'=>'Lemuel Rey L. Araña', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'21', 'name'=>'Rene G. Abarquez', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'21', 'name'=>'Lee A. Albarece', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'21', 'name'=>'Daniel V. Onahon, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'21', 'name'=>'Dominador L. Domo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'21', 'name'=>'Alan A. Improgo', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'21', 'name'=>'Leopoldo S. Blanay', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'21', 'name'=>'Kristian Niko P. Tapales', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'21', 'name'=>'Leonora S. Ugat', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'21', 'name'=>'Arlyn T. Simblante', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],

            ['barangay_id'=>'22', 'name'=>'Kineth G. Tanto', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'1'],
            ['barangay_id'=>'22', 'name'=>'Telesforo P. Dawat', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'2'],
            ['barangay_id'=>'22', 'name'=>'Dumaquito D. Lentican', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'3'],
            ['barangay_id'=>'22', 'name'=>'Julito S. Tanto', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'4'],
            ['barangay_id'=>'22', 'name'=>'Nancita G. Yompoca', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'5'],
            ['barangay_id'=>'22', 'name'=>'Rufino S. Bulanta, Jr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'6'],
            ['barangay_id'=>'22', 'name'=>'Ronald R. Magdalino, Sr.', 'position'=>'Sangguniang Barangay Member', 'designation'=>'-', 'order_no'=>'7'],
            ['barangay_id'=>'22', 'name'=>'Dievra Jay S. Payanan', 'position'=>'Chairman', 'designation'=>'Sangguniang Kabataan', 'order_no'=>'8'],
            ['barangay_id'=>'22', 'name'=>'Renato S. Coguihan, Jr.', 'position'=>'Barangay Secretary', 'designation'=>'-', 'order_no'=>'9'],
            ['barangay_id'=>'22', 'name'=>'Shiela L. Herocan', 'position'=>'Barangay Treasurer', 'designation'=>'-', 'order_no'=>'10'],
            
            
        ];

        foreach ($brgymembers as $brgymember){
            DB::table('barangaymembers')->insert([
                'barangay_id' => $brgymember['barangay_id'],
                'name' => $brgymember['name'],
                'position' => $brgymember['position'],
                'designation' => $brgymember['designation'],
                'order_no' => $brgymember['order_no']
            ]);
        }
    }
}
