<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films')->insert([
            [                         
                'titre' => 'Spider-Man : Across the Spider-Verse',
                'resume' => 'Après avoir retrouvé Gwen Stacy, Spider-Man, le sympathique héros originaire de Brooklyn, est catapulté à travers le Multivers, où il rencontre une équipe de Spider-Héros chargée d\'en protéger l\'existence.',
                'cote' => '96',
                'rating' => 'Général',
                'duree' => '141',
                'annee' => '2023',
                'realisateur' => '2',
                'producteur' => '3',
                'acteurPrinc' => '1',
                'type' => 'Animation',
                'imageFilm' => 'https://www.cinecroisiere.fr/i/films/595g.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=iZSRP2UYtO4',
            ],

            [                         
                'titre' => 'Super Mario Bros, le film',
                'resume' => 'Alors qu\'ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit.',
                'cote' => '59',
                'rating' => 'Général',
                'duree' => '92',
                'annee' => '2023',
                'realisateur' => '5',
                'producteur' => '6',
                'acteurPrinc' => '4',
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/Bx_-Fa622Js/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=Bx_-Fa622Js',
            ],

            [                         
                'titre' => 'Don\'t look up',
                'resume' => 'Deux piètres astronomes s\'embarquent dans une gigantesque tournée médiatique pour prévenir l\'humanité qu\'une comète se dirige vers la Terre et s\'apprête à la détruire.',
                'cote' => '59',
                'rating' => '18+',
                'duree' => '143',
                'annee' => '2021',
                'realisateur' => '8',
                'producteur' => '9',
                'acteurPrinc' => '7',
                'type' => 'Comédie',
                'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Don%27t_Look_Up_2021_film.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=PLuRMtyoj1Q',
            ],

            [                         
                'titre' => 'Wonder woman 1984',
                'resume' => 'Suite des aventures de Diana Prince, alias Wonder Woman, Amazone devenue une super-héroïne dans notre monde. Après la Première guerre mondiale, direction les années 80 ! Cette fois, Wonder Woman doit affronter deux nouveaux ennemis, particulièrement redoutables : Max Lord et Cheetah.',
                'cote' => '58',
                'rating' => 'Général',
                'duree' => '151',
                'annee' => '2020',
                'realisateur' => '11',
                'producteur' => '12',
                'acteurPrinc' => '10',
                'type' => 'Action, Aventure',
                'imageFilm' => 'https://i.ytimg.com/vi/ief7TbjhW80/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=ief7TbjhW80',
            ],

            [                         
                'titre' => 'Inception',
                'resume' => 'Au lieu de subtiliser un rêve, un voleur expérimenté et son équipe doivent faire l\'inverse : implanter une idée dans l\'esprit d\'un individu. S\'ils y parviennent, il pourrait s\'agir du crime parfait ...',
                'cote' => '87',
                'rating' => 'Général',
                'duree' => '148',
                'annee' => '2010',
                'realisateur' => '14',
                'producteur' => '13',
                'acteurPrinc' => '15',                
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/fVhKn6vmheQ/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=fVhKn6vmheQ',
            ],

            [                         
                'titre' => 'Le seigneur des anneaux : La communauté de l\'anneau',
                'resume' => 'Frodon le Hobbit hérite de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu. Commence alors un vaste périple visant à la destruction de l\'objet.',
                'cote' => '91',
                'rating' => 'Général',
                'duree' => '178',
                'annee' => '2001',
                'realisateur' => '17',
                'producteur' => '18',
                'acteurPrinc' => '16',
                'type' => 'Fantasie',
                'imageFilm' => 'https://i.ytimg.com/vi/R5S22HFuuWA/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=R5S22HFuuWA',
            ],

            [                         
                'titre' => 'Nerve',
                'resume' => 'En participant à Nerve, un jeu qui diffuse en direct sur Internet des défis filmés, Vee et Ian décident de s\'associer pour relever des challenges de plus en plus risqués et gagner toujours plus d\'argent.',
                'cote' => '67',
                'rating' => 'Général',
                'duree' => '96',
                'annee' => '2016',
                'realisateur' => '20',
                'producteur' => '21',
                'acteurPrinc' => '19',
                'type' => 'Thriller',
                'imageFilm' => 'https://i.ytimg.com/vi/O57t3qNKOiU/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=O57t3qNKOiU',
            ],

            [                         
                'titre' => 'Joker',
                'resume' => 'Le film, qui relate une histoire originale inédite sur grand écran, se focalise sur la figure emblématique de l\'ennemi juré de Batman. Il brosse le portrait d\'Arthur Fleck, un homme sans concession méprisé par la société.',
                'cote' => '69',
                'rating' => '13+',
                'duree' => '122',
                'annee' => '2019',
                'realisateur' => '23',
                'producteur' => '24',
                'acteurPrinc' => '22',
                'type' => 'Drame',
                'imageFilm' => 'https://i.ytimg.com/vi/t1xHORDrBig/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=t1xHORDrBig',
            ],

            [                         
                'titre' => 'Ready player one',
                'resume' => '2045. Le monde est au bord du chaos. Les êtres humains se réfugient dans l\'OASIS, univers virtuel mis au point par le brillant et excentrique James Halliday. Avant de disparaître, celui-ci a décidé de léguer son immense fortune à quiconque découvrira l\'œuf de Pâques numérique qu\'il a pris soin de dissimuler dans l\'OASIS.',
                'cote' => '72',
                'rating' => 'Général',
                'duree' => '140',
                'annee' => '2018',
                'realisateur' => '26',
                'producteur' => '27',
                'acteurPrinc' => '25',
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/YFpwe_ibBzA/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=YFpwe_ibBzA',
            ],

            [                         
                'titre' => 'Star wars, Episode IV : Un nouvel espoir',
                'resume' => 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle.',
                'cote' => '93',
                'rating' => 'Général',
                'duree' => '121',
                'annee' => '1977',
                'realisateur' => '29',
                'producteur' => '30',
                'acteurPrinc' => '28',
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/_3FKPJ_88Io/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=_3FKPJ_88Io',
            ],                  
        ]);            
    }
}
