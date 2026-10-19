<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            [
                'post_category_id' => 1,
                'author_id' => 1,
                'title' => 'Projet Swami - Green Bond_Webinar du 13.07.26',
                'slug' => Str::slug('Projet Swami - Green Bond_Webinar du 13.07.26'),
                'lang' => 'fr',
                'trans_post_id' => null,
                'excerpt' => '',
                'short_description' => "Des obligations vertes ancrées dans la réalité des sols",
                'content' => '<p>Aucun contenu disponible</p>',
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path() . '/front/assets/images/news/obligation-actu.png',
                'document' => '',
            ],
            [
                'post_category_id' => 1,
                'author_id' => 1,
                'title' => 'SONATEL - 26.10.01 - Fractionnement',
                'slug' => Str::slug('SONATEL - 26.10.01 - Fractionnement'),
                'lang' => 'fr',
                'trans_post_id' => null,
                'excerpt' => '',
                'short_description' => "Le fractionnement n'a pas d'incidence sur la valeur intrinsèque de SONATEL. Il réduit toutefois le prix unitaire de l'action, ce qui pourrait favoriser une participation plus large des investisseurs particuliers et soutenir la liquidité du titre. À ce titre, l'opération constitue un signal globalement positif pour le marché.",
                'content' => "
                        <ul>
                            <li>Les enseignements du 1er fractionnement</li>
                            <li>Le signal envoyé par le 2nd fractionnement</li>
                            <li>Notre estimation de la juste valeur du titre</li>
                            <li>Les implications concrètes de l'opération pour les actionnaires</li>
                        </ul>
                        <p>Le fractionnement n'a pas d'incidence sur la valeur intrinsèque de SONATEL. Il réduit toutefois le prix unitaire de l'action, ce qui pourrait favoriser une participation plus large des investisseurs particuliers et soutenir la liquidité du titre. À ce titre, l'opération constitue un signal globalement positif pour le marché.</p>
                    ",
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path() . '/front/assets/images/news/post-1.png',
                'document' => public_path() . '/front/assets/documents/news/SONATEL_Fractionnement_What does_it_tell_you.pdf',
            ],
            [
                'post_category_id' => 1,
                'author_id' => 1,
                'title' => 'SGB CI – Focus Mars 2026 : Trio gagnant',
                'slug' => Str::slug('SGB CI – Focus Mars 2026 : Trio gagnant'),
                'lang' => 'fr',
                'trans_post_id' => null,
                'excerpt' => '',
                'short_description' => "Nous avons le plaisir de vous transmettre notre deuxième note de recherche, dédiée à la Société Générale de Banques Cote d'Ivoire (SGBC). Leader sur le marché bancaire ivoirien et sous régional, présente depuis plus de 50 ans en Côte d’Ivoire ; filiale ivoirienne du groupe financier européen Société Générale.",
                'content' => "
                        <ul>
                            <li>Leadership</li>
                            <li>Résultats en hausse</li>
                            <li>Dividende attractif et croissant</li>
                        </ul>
                        <p>Nous avons le plaisir de vous transmettre notre deuxième note de recherche, dédiée à la Société Générale de Banques Cote d'Ivoire (SGBC). Leader sur le marché bancaire ivoirien et sous régional, présente depuis plus de 50 ans en Côte d’Ivoire ; filiale ivoirienne du groupe financier européen Société Générale. Dans ce document, nous revenons sur :</p>
                        <ul>
                            <li>Une croissance soutenue :</li>
                            <p>Le total bilan affiche une progression de +51 % entre 2020 et 2024, traduisant une dynamique commerciale solide et durable ;</p>
                        </ul>
                        <ul>
                            <li>Une rentabilité élevée :</li>
                            <p>Avec un ROE supérieur à 20 % depuis 2021 et un ROA d’environ 2,8 % en 2023, la banque démontre l’efficacité et la maîtrise de son modèle opérationnel ;</p>
                        </ul>
                        <ul>
                            <li>Une attractivité renforcée pour les investisseurs :</li>
                            <p>La politique de distribution est soutenue (payout supérieur à 45 %) et les fonds propres continuent d’être renforcés ;</p>
                        </ul>
                        <ul>
                            <li>Une valorisation attractive :</li>
                            <p>L’approche croisée PER / PBR / DDM fait ressortir une juste valeur estimée à 43 000 XOF, soit un potentiel de hausse d’environ +23 % par rapport au cours du 13 mars 2026 (35 000 XOF).</p>
                        </ul>
                    ",
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path() . '/front/assets/images/news/post-1.png',
                'document' => public_path() . '/front/assets/documents/news/SGB_CI_Snapshot.pdf',
            ],
            [
                'post_category_id' => 1,
                'author_id' => 1,
                'title' => '2026 – Revue Trimestrielle T3',
                'slug' => Str::slug('2026 – Revue Trimestrielle T3'),
                'lang' => 'fr',
                'trans_post_id' => null,
                'excerpt' => '',
                'short_description' => "Nous avons le plaisir de vous transmettre en pièce jointe notre revue du 3eme trimestre 2026, présentant les principales évolutions du marché ainsi qu’une synthèse des performances et faits marquants de la période.",
                'content' => "
                        <p>📌 Points clés de notre analyse :</p>
                        <ul>
                            <li>Actualité macroéconomique</li>
                            <li>Marché des Titres Publics (MTP) – UEMOA</li>
                            <li>BRVM – Actions & Obligations</li>
                            <li>Deals & Publications</li>
                            <li>Perspectives – T3 2026</li>
                        </ul>
                    ",
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path() . '/front/assets/images/news/post-1.png',
                'document' => public_path() . '/front/assets/documents/news/2026 - Revue Trimestrielle T3.pdf',
            ],
        ];

        foreach ($posts as $postData) {
            $coverImage = $postData['cover_image'];
            $document = $postData['document'];
            $post = Post::create(collect($postData)->except(['cover_image', 'document'])->toArray());
            
            if (is_null($post->trans_post_id)) {
                $post->update(['trans_post_id' => $post->id]);
            }

            if (is_file($coverImage)) {
                $post->addMedia($coverImage)
                    ->preservingOriginal()
                    ->toMediaCollection('post_images');
            }

            if (is_file($document)) {
                $post->addMedia($document)
                    ->preservingOriginal()
                    ->toMediaCollection('post_documents');
            }
        }
    }
}
