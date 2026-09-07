<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $services = [
            [
                'title' => 'Conseil pour l’accès au marché financier',
                'slug' => Str::slug('Conseil pour l’accès au marché financier'),
                'short_description' => 'Nous accompagnons les entreprises dans la mobilisation de ressources, l’introduction en bourse et la structuration financière, de l’analyse à la cotation sur le marché.',
                'description' => "L’accès au marché financier pour mobiliser des ressources, organiser la cession de son entreprise ou l’introduire à la cote sur un marché organisé afin de lui donner une valeur et une visibilité internationale sont des objectifs qui se préparent et doivent s’inscrire dans une stratégie et un projet d’entreprise. Impaxis Securities dispose des compétences et de l’expérience pour vous accompagner afin d’en garantir le succès à chacune des étapes ; depuis le diagnostic financier, la rédaction des documents de présentation de l’opération envisagée, l’obtention du visa auprès de l’autorité de supervision du marché financier, la promotion des titres, jusqu’à la cotation des titres et leur suivi sur la cote.",
                'class' => '',
                'cover' => public_path() . '/front/assets/images/services/service-1-conseil.png',
            ],
            [
                'title' => 'Analyse & Recherche de Risques',
                'slug' => Str::slug('Analyse & Recherche de Risques'),
                'short_description' => 'Impaxis Securities propose des analyses financières et recommandations d’investissement pour aider ses clients à mieux saisir les opportunités du marché, notamment sur la BRVM.',
                'description' => "Impaxis Securities met à votre disposition des revues mensuelles et semestrielles qui mettent en exergue les faits marquants du marché. Pour vous orienter dans vos choix d’investissement, nous produisons à votre intention des notes de recherche dans lesquelles nous émettons des recommandations argumentées d’achat ou de vente des sociétés cotées à la BRVM.",
                'class' => 'service-card--blue',
                'cover' => public_path() . '/front/assets/images/services/service-2-recherche.png',
            ],
            [
                'title' => 'Conseil en Placement',
                'slug' => Str::slug('Conseil en Placement'),
                'short_description' => 'Nous accompagnons nos clients dans la définition de stratégies d’investissement adaptées à leurs objectifs et à leur profil de risque.',
                'description' => "En fonction du profil de risque que vous avez défini ou au regard de votre situation personnelle et familiale, nous pouvons vous assister dans l’élaboration de la stratégie d’investissement qui correspond à vos objectifs de placement sur les marchés financier et monétaire.",
                'class' => '',
                'cover' => public_path() . '/front/assets/images/services/service-3-conseil.png',
            ],
            [
                'title' => 'Mise en place d’OPCVM',
                'slug' => Str::slug('Mise en place d’OPCVM'),
                'short_description' => 'Impaxis Securities accompagne ses clients dans la création et la gestion d’OPCVM (FCP et SICAV), ainsi que dans la conservation et l’administration des opérations.',
                'description' => "Nous vous accompagnons dans la mise en place et la promotion d’Organismes de Placement Collectif en Valeurs Mobilières, qu’il s’agisse de Fonds Communs de Placement (FCP) ou de Sociétés d’Investissement à Capital Variable (SICAV). Ces OPCVM peuvent être ouverts à tout souscripteur ou réservés à une catégorie particulière d’investisseur (personnel, membres d’association ou personnel d’organisations professionnelles, ou interprofessionnelles, ...). En notre qualité d’établissement agréé, nous exerçons, les fonctions de teneur de compte / conservateur des actifs, d’administrateur des parts, ainsi que la mission de contrôle de la régularité et de la conformité des opérations.",
                'class' => 'service-card--blue',
                'cover' => public_path() . '/front/assets/images/services/service-4-opcvm.png',
            ],
            [
                'title' => 'Placement de Titres',
                'slug' => Str::slug('Placement de Titres'),
                'short_description' => 'Nous proposons à nos clients l’accès à différents instruments financiers et monétaires permettant de diversifier et optimiser leurs investissements.',
                'description' => "En distribuant tous les titres admis sur les marchés financier et monétaire, nous vous permettons d’acquérir des actifs financiers vous permettant de rentabiliser vos disponibilités et correspondant à votre stratégie d’investissement.",
                'class' => '',
                'cover' => public_path() . '/front/assets/images/services/service-5-placement.png',
            ],
            [
                'title' => 'Levées de Capitaux',
                'slug' => Str::slug('Levées de Capitaux'),
                'short_description' => 'Impaxis Securities accompagne États, institutions et entreprises dans leurs opérations de levée de fonds via appels publics à l’épargne ou placements privés.',
                'description' => "Nous intervenons dans l’arrangement et la structuration des levées de fonds des Etats, des institutions publiques et des entreprises privées à travers des appels publics à l’épargne ou par le biais de placements privés. Chef de file, ou membre d’un consortium, nous structurons la transaction et organisons, le cas échéant, les campagnes de communication des opérations en concertation avec l’émetteur et les parties prenantes et mobilisons tous les moyens humains et techniques nécessaires à la réussite de la levée de fonds.",
                'class' => 'service-card--blue',
                'cover' => public_path() . '/front/assets/images/services/service-6-levees.png',
            ],
            [
                'title' => 'Conservation de Portefeuilles Titres',
                'slug' => Str::slug('Conservation de Portefeuilles Titres'),
                'short_description' => 'Nous assurons la conservation sécurisée des titres et la gestion des comptes de nos clients en relation avec le DC/BR.',
                'description' => "En relation avec le DC/BR (Dépositaire Central / Banque de Règlement), nous assurons la conservation de vos titres, ainsi que la tenue de votre compte et le relevé détaillé des opérations intervenues sur vos comptes titres et espèces.",
                'class' => '',
                'cover' => public_path() . '/front/assets/images/services/service-7-conservation.png',
            ],
            [
                'title' => 'Négociation de Valeurs Mobilières',
                'slug' => Str::slug('Négociation de Valeurs Mobilières'),
                'short_description' => 'En tant qu’intermédiaire agréé, Impaxis Securities exécute les ordres d’achat et de vente de titres avec un accès direct et en temps réel au marché de la BRVM.',
                'description' => "En notre qualité d’intermédiaire financier agréé, autorisé à recevoir, transmettre et effectuer des ordres de bourse, nous exécutons vos offres d’achat et de vente de titres sur le marché financier de la BRVM avec des frais de transactions très compétitifs.",
                'class' => 'service-card--blue',
                'cover' => public_path() . '/front/assets/images/services/service-8-negociation.png',
            ],
        ];

        foreach ($services as $serviceData) {
            $cover = $serviceData['cover'];
            $service = Service::create(collect($serviceData)->except('cover')->toArray());

            if (is_file($cover)) {
                $service->addMedia($cover)
                    ->preservingOriginal()
                    ->toMediaCollection('service_images');
            }
        }
    }
}
