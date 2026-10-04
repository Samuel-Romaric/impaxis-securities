<?php

namespace Database\Seeders;

use App\Models\References;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $references = [
            [
                'amount' => '100',    
                'devise' => 'milliards F CFA',
                'projet_title' => 'Appel public à l’épargne - Sonatel',
                'slug' => Str::slug('Appel public à l’épargne - Sonatel'),
                'projet_chef' => 'Arrangeur chef de file',
                'periode' => '2020',
                'translate_id' => 1,
                'lang' => 'fr',
                'status' => 'published',
                'logo' => public_path() . '/front/assets/images/references/orange-sonatel.png',
            ],
            [
                'amount' => '240',    
                'devise' => 'milliards F CFA',
                'projet_title' => 'Appel public à l’épargne - GS Bond BIDC - EBID',
                'slug' => Str::slug('Appel public à l’épargne - GS Bond BIDC - EBID'),
                'projet_chef' => 'Arrangeur principal - Chef de file',
                'periode' => '2021-2024',
                'translate_id' => 2,
                'lang' => 'fr',
                'status' => 'published',
                'logo' => public_path() . '/front/assets/images/references/bidc-ebid.png',
            ],
            [
                'amount' => '',    
                'devise' => 'Confidentiel',
                'projet_title' => 'Cession d’un complexe hôtelier',
                'slug' => Str::slug('Cession d’un complexe hôtelier'),
                'projet_chef' => 'Conseil – fusions & acquisitions',
                'periode' => '2022',
                'translate_id' => 3,
                'lang' => 'fr',
                'status' => 'published',
                'logo' => public_path() . '/front/assets/images/references/kasada.png',
            ],
            [
                'amount' => '15',    
                'devise' => 'milliards F CFA',
                'projet_title' => 'Appel public à l’épargne - Fidelis Finance Cap25',
                'slug' => Str::slug('Appel public à l’épargne - Fidelis Finance Cap25'),
                'projet_chef' => 'Arrangeur chef de file',
                'periode' => '2023',
                'translate_id' => 4,
                'lang' => 'fr',
                'status' => 'published',
                'logo' => public_path() . '/front/assets/images/references/fidelis-finance.jpg',
            ],
            [
                'amount' => '310',    
                'devise' => 'milliards F CFA',
                'projet_title' => 'Titrisation des créances souveraines par APE - FCTC Doli-Project',
                'slug' => Str::slug('Titrisation des créances souveraines par APE - FCTC Doli-Project'),
                'projet_chef' => 'Chef de file',
                'periode' => '2023-2024',
                'translate_id' => 5,
                'lang' => 'fr',
                'status' => 'published',
                'logo' => public_path() . '/front/assets/images/references/boad.png',
            ],
        ];

        foreach ($references as $refData) {
            $logoRef = $refData['logo'];
            $post = References::create(collect($refData)->except('logo')->toArray());

            if (is_file($logoRef)) {
                $post->addMedia($logoRef)
                    ->preservingOriginal()
                    ->toMediaCollection('logo_ref');
            }
        }
    }
}
