<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questions;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $questions = [
            [
                'pertanyaan' => 'Tingkat kemampuan dosen dalam memberikan pelayanan kepada mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kemampuan staff administrasi dalam memberikan pelayanan kepada mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kemampuan Jurusan dalam memberikan pelayanan kepada mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kemauan dari dosen dalam membantu dan melayani mahasiswa dengan cepat'
            ],
            [
                'pertanyaan' => 'Tingkat kemauan dari tenaga kependidikan/ staf administrasi dalam membantu mahasiswa dan memberikan layanan dengan cepat'
            ],    
            [
                'pertanyaan' => 'Tingkat kemauan dari Jurusan dalam membantu mahasiswa dan memberikan layanan dengan cepat'
            ],
            [
                'pertanyaan' => 'Tingkat kemampuan dosen memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan'
            ],
            [
                'pertanyaan' => 'Tingkat kemampuan tenaga kependidikan/ staf administrasi untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan'
            ],
            [
                'pertanyaan' => 'Tingkat kemampuan Jurusan untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan'
            ],
            [
                'pertanyaan' => 'Tingkat kesediaan/ kepedulian dosen untuk memberi perhatian kepada mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kesediaan/ kepedulian tenaga kependidikan untuk memberi perhatian kepada mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kesediaan/ kepedulian Jurusan untuk memberi perhatian kepada mahasiswa.'
            ],
            [
                'pertanyaan' => 'Tingkat ketersediaan sarana dan prasarana terhadap kebutuhan layanan mahasiswa'
            ],
            [
                'pertanyaan' => 'Tingkat kemudahan akses terhadap sarana dan prasarana Jurusan'
            ],
            [
                'pertanyaan' => 'Kualitas sarana dan prasarana yang tersedia di Jurusan.'
            ],
        ];

        \DB::table('questions')->insert($questions);
    }
}
