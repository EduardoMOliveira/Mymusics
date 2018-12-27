<?php

use Illuminate\Database\Seeder;

class StyleMusicsTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        mymusics\StyleMusic::truncate();

        $dados = [
                    'Alternativo',
                    'Blues', 'Bolero', 'Bossa Nova', 'Brega',
                    'Clássico', 'Country', 'Cuarteto', 'Cumbia',
                    'Dance', 'Disco',
                    'Eletrônica', 'Emocore', 
                    'Fado', 'Folk', 'Forró', 'Funk', 'Funk Internacional',
                    'Gospel Religioso', 'Grunge', 'Guarânia', 'Gótico',
                    'Hard Rock', 'Hard Core', 'Heavy Metal', 'Hip-Hop/Rap', 'House',
                    'Indie', 'Industrial','Infantil', 'Instrumental',
                    'J-Pop/J-Rock', 'Jazz', 'Jovem Guarda',
                    'K-Pop/K-Rock',
                    'MPB', 'Mambo','Marchas/Hino', 'Mariachi', 'Merengue', 'Música andina',
                    'New Age', 'New Wage',
                    'Pagode', 'Pop', 'Pop Rock', 'Post-Rock', 'Power-Pop', 'Psicodelia', 'Punk Rock',
                    'R&B', 'Ranchera', 'Reggae', 'Reggaeton', 'Regional', 'Rock', 'Rock Progressivo', 'Rock and Roll', 'Rockabilly', 'Romântico',
                    'Salsa', 'Samba', 'Samba Enredo', 'Sertanejo', 'Ska', 'Soft Rock', 'Soul', 'Surf Music', 
                    'Tango', 'Tecnopop', 'Trova', 
                    'Velha Guarda', 'World Music',
                    'Zamba', 'Zouk'];

        foreach ($dados as $v) {

            mymusics\StyleMusic::create([
                'type' => $v
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
