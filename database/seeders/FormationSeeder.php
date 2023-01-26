<?php

namespace Database\Seeders;

use App\Models\Formations;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'libelle' => 'Laravel',
                'image' => 'site/images/formations/laravel.png',
                'description' => "Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. "
            ],
            [
                'libelle' => 'Synfony',
                'image' => 'site/images/formations/symfony.png',
                'description' => "Symfony est un ensemble de composants PHP ainsi qu'un framework MVC libre écrit en PHP. Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d'un site web."
            ],
            [
                'libelle' => 'React Js',
                'image' => 'site/images/formations/react.png',
                'description' => "React est une bibliothèque JavaScript libre développée par Facebook depuis 2013. Le but principal de cette bibliothèque est de faciliter la création d'application web monopage, via la création de composants dépendant d'un état et générant une page HTML à chaque changement d'état."
            ],
            [
                'libelle' => 'React Native',
                'image' => 'site/images/formations/reactnative.png',
                'description' => "React Native est un framework d'applications mobiles open source créé par Facebook. Il est utilisé pour développer des applications pour Android, iOS et UWP en permettant aux développeurs d’utiliser React avec les fonctionnalités natives de ces plateformes"
            ],
            [
                'libelle' => 'Javascript',
                'image' => 'site/images/formations/js.png',
                'description' => "JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les langages HTML et CSS,"

            ],
        ];

        Formations::insert($datas);
    }
}
