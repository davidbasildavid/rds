<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('countries')->insert([
			'title' => 'Georgia',
			'slug' => 'georgia',
			'description' => '<h4 style="font-size: 1.57143rem;">Ein Land mit großer Vergangenheit und neuen Ideen</h4><p>Georgien ist ein Land mit langer Geschichte: schon in der Altsteinzeit war die Region besiedelt und Tradition sowie Kultur reichen weit zurück in längst vergangene Zeiten. Amtssprache ist Georgisch und die Sprache ist eine der ältesten der Welt. Die Kultur ist&nbsp;europäisch-christlich&nbsp;geprägt. Georgien liegt im Südkaukasus und grenzt ans Schwarze Meer. Das Land bietet eine faszinierende Landschaft: tropische Regionen, Seen, Berge zum Skifahren und Wandern. Die Klimazonen reichen von mediterran bis zu Steppengebieten. Heilquellen, Kraftorte und Regionen mit außerordentlicher Luftqualität bringen Entspannung und Erholung. Georgien ist immer eine Reise wert und ein sehr sicheres Reiseland mit beeindruckender Architektur. Zum Kulturerbe der UNESCO zählt das georgische Alphabet sowie die Kirchen von Mzcheta, das Kloster Gelati, die Bergdörfer von Swanetien - und der georgische Weinbau. Dieser blickt auf eine Tradition von über 7.000 Jahren zurück. Kulinarisch kommen Fleischgenießer und Vegetarier gleichermaßen auf ihre Kosten und werden in der Vielfalt der georgischen Küche Neues entdecken können. Begeisternd ist aber die georgische Gastfreundschaft: hier können Sie die Freundlichkeit und Hilfsbereitschaft der Georgier erleben. Ein Land, wo sie mit offenem Herzen empfangen werden!<br></p>',
			'flag' => 'countries/flags/georgia.png',
			'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6050046.332547826!2d38.868505364857015!3d42.23315981222585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sge!4v1603106997125!5m2!1sen!2sge" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('countries')->insert([
			'title' => 'Bulgaria',
			'slug' => 'bulgaria',
			'flag' => 'countries/flags/bulgaria.jpg',
			'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1500792.4687571828!2d24.422289168959285!3d42.71991040051473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a8fec1c85bf089%3A0xa01269bf4c10!2sBulgaria!5e0!3m2!1sen!2sge!4v1603107664287!5m2!1sen!2sge" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('countries')->insert([
			'title' => 'Romania',
			'slug' => 'romania',
			'flag' => 'countries/flags/romania.jpg',
			'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2842180.691950435!2d22.777648442174016!3d45.919964674791906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff26958976c3%3A0x84ef4f92a804b194!2sRomania!5e0!3m2!1sen!2sge!4v1603108121295!5m2!1sen!2sge" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
    }
}
