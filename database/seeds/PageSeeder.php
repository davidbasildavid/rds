<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('pages')->insert([
			'title' => 'Home',
			'slug' => Str::slug('home'),
			'body' => '<h4>Wir alle wollen legale Wege finden, um unsere jährliche Steuerbelastung zu reduzieren.</h4> 
<p>Sowohl Unternehmer als auch Privatpersonen versuchen so viel wie nötig, aber so wenig wie möglich von ihren Einkünften abzugeben. Dabei helfen den Steuerpflichtigen die sogenannten „Niedrigsteuerländer“.</p>
<p>Der Fokus von Unternehmen und Privatpersonen liegt oft nur auf Steuerersparnis. Heutzutage gibt es viele Länder auf der Welt, in denen man die Steuerlast reduzieren kann.</p>
<p>Steuern zu sparen ist sicherlich ein wichtiger Aspekt, aber nicht der einzige.  Es gibt noch einige andere Faktoren, die vor der Gründung eines Unternehmens im Ausland zu bedenken sind. (ist den Absatz Grammatikalisch richtig?)</p>
<p>Gibt es Länder mit steuerlichen Vorteilen und gleichzeitig mit einem stabilen wirtschaftlichen und politischen Umfeld?</p>
<p>Doch manche Länder bieten weit mehr:</p>
<p>Georgien ist eine demokratische Republik mit sehr großem wirtschaftlichen Potenzial und bestens geeignet für ausländische Investitionen. Da gibt es spezielle Lizenzen, um Firmen LEGAL von der Steuer Komplet befreien zu lassen.</p>
<p>Georgien ist gleichzeitig einer von wenigen Staaten, der Sicherheit und politische Stabilität, moderne Bankensysteme, einen geringen bürokratischen Aufwand und umfangreiche steuerliche Vorteile bietet.</p>
<p>Die Einwanderungspolitik ist sehr liberal und macht es unkompliziert dort einen Wohnsitz zu erwerben. Als Ausländer können Sie auch ein Unternehmen besitzen, ohne ein Visum oder eine andere Genehmigung zu benötigen. Die Firmenregistrierung ist relativ einfach und unaufwändig.</p>
<p>Es hat eines der einfachsten Steuersysteme der Welt – wodurch Geschäfte billiger und einfacher werden!</p>',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		/* DB::table('pages')->insert([ */
		/* 	'country_id' => 1, */
		/* 	'title' => 'Über Georgia', */
		/* 	'slug' => Str::slug('Über Georgia'), */
		/* 	'body' => '<h4>Ein Land mit großer Vergangenheit und neuen Ideen</h4> */
/* Georgien ist ein Land mit langer Geschichte: schon in der Altsteinzeit war die Region besiedelt und Tradition sowie Kultur reichen weit zurück in längst vergangene Zeiten. Amtssprache ist Georgisch und die Sprache ist eine der ältesten der Welt. Die Kultur ist europäisch-christlich geprägt. */
/* Georgien liegt im Südkaukasus und grenzt ans Schwarze Meer. Das Land bietet eine faszinierende Landschaft: tropische Regionen, Seen, Berge zum Skifahren und Wandern. Die Klimazonen reichen von mediterran bis zu Steppengebieten. Heilquellen, Kraftorte und Regionen mit außerordentlicher Luftqualität bringen Entspannung und Erholung. */
/* Georgien ist immer eine Reise wert und ein sehr sicheres Reiseland mit beeindruckender Architektur. Zum Kulturerbe der UNESCO zählt das georgische Alphabet sowie die Kirchen von Mzcheta, das Kloster Gelati, die Bergdörfer von Swanetien - und der georgische Weinbau. Dieser blickt auf eine Tradition von über 7.000 Jahren zurück. */ 
/* Kulinarisch kommen Fleischgenießer und Vegetarier gleichermaßen auf ihre Kosten und werden in der Vielfalt der georgischen Küche Neues entdecken können. */
/* Begeisternd ist aber die georgische Gastfreundschaft: hier können Sie die Freundlichkeit und Hilfsbereitschaft der Georgier erleben. Ein Land, wo sie mit offenem Herzen empfangen werden!', */
		/* 	'created_at' => date('Y-m-d H:i:s'), */
		/* 	'updated_at' => date('Y-m-d H:i:s') */
		/* ]); */

		DB::table('pages')->insert([ 'title' => 'Das georgische Steuersystem',
			'country_id' => 1,
			'slug' => Str::slug('Das georgische Steuersystem'),
			'body' => '<h4>Wer die Pflicht hat Steuern zu zahlen, hat auch das Recht Steuerlast zu optimieren</h4>
<p>Georgien bietet dafür ein ideales, liberales Steuersystem und unternehmerfreundlichen Gesetzen. Durch das territoriale Steuersystem ist nur Inlandseinkommen steuerpflichtig, Auslandseinkommen hingegen ist legal steuerfrei. Das heißt: Geld, das Sie außerhalb Georgiens verdienen, können Sie für sich behalten. (Den Satz muss noch geprüft werden)
Georgiens territoriales Steuersystem bietet eine hohe Rechtssicherheit und Stabilität, die aufgrund des „Economic Liberty Acts“ nicht einfach durch ein Eingreifen der Regierung verändert werden kann.</p> <p> Wichtige Steuerarten in Georgien: </p> <ul><li>Einkommensteuer: 20%</li><li>Umsatzsteuer: 18%</li><li>Körperschaftssteuer: 15%</li><li>Auf Dividenden: 5%</li><li>Immobiliensteuer: 1%</li></ul>
Die strategisch günstige geographische Lage bringt dem Land viele Vorteile für Import und Export, internationale Geschäftsbeziehungen und ausländische Geschäftsinvestitionen. Georgien fungiert als wichtiges Verteilerzentrum zwischen den beiden Kontinenten und bietet exzellente Handelsverbindungen zu praktisch allen Ländern, einschließlich der EU, USA, China, Türkei und Iran.  Georgien ist Mitglied der World Trade Organization, hat Freihandelsabkommen mit der EU und den EFTA Ländern, Russland sowie anderen ost- und zentraleuropäischen Ländern. So ist der Zugang zu einem großen Markt ohne jegliche Zolltarifbeschränkungen garantiert.',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('pages')->insert([
			'title' => 'Über Uns',
			'slug' => Str::slug('Über Uns'),
			'body' => 'Salome
Ich bin Georgierin und lebe seit 7 Jahren in Österreich. Aus Georgien bringe ich einen Bachelor in „Business Administration in Finance“ mit, den ich in Wien mit dem Studienzweig „Internationale Geschäftstätigkeit und Marketing“ erweitert habe. 
In meiner Zeit in Wien habe ich Berufserfahrung im Bereich Buchhaltung und Administration gesammelt und konnte dadurch sowohl meine Kenntnisse der deutschen Sprache und Kultur, sowie wichtige berufliche Kontakte erwerben. 
Im Unternehmen sehe ich mich, nach positiven beruflichen und persönlichen Erfahrungen, als Verbindung zwischen Georgien und dem gesamten deutschen Sprachraum: ich kenne und liebe beide Sprachen, Kulturen und Mentalitäten –  das Verständnis dieser Aspekte ist in internationalen Geschäftsbeziehungen besonders wichtig. Darin liegt auch meine große Stärke.
Wie wir alle wissen kann eine Firma in Georgien vor Ort oder aus der Ferne gegründet werden. Ich würde mich aber sehr freuen, wenn Sie meine wunderschöne Heimat besuchen und ich Sie als ortskundige Beraterin persönlich durch den Prozess der Firmengründung in Georgien begleiten kann.
So können wir Ihre Firma innerhalb eines Tages gründen – und es bleibt Ihnen abends noch Zeit einen Spaziergang durch die Altstadt mitten im Zentrum von Tbilisi zu machen, köstliche georgische Speisen und die vor Ort berühmten Rotweine zu genießen. 
Während Ihres Aufenthalts in Georgien, unterstütze ich Sie als Gastgeberin gerne mit Reisetipps oder bei Fragen. So sind Sie dort in guten Händen.',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('pages')->insert([
			'title' => 'OGF',
			'slug' => Str::slug('OGF'),
			'body' => '
				<div id="accordion" role="tablist">
					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h1">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q1">Ist Stammkapital erforderlich?</a>
						</div>
						<div id="accordion_q1" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Wenn ja, Wieviel? Nein, es ist kein Stammkapital erforderlich.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h2">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q2">Brauche ich eine Firmenadresse in Georgien?</a>
						</div>
						<div id="accordion_q2" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja, Sie brauchen eine juristische Adresse für Ihren Unternehmenssitz in Georgien.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h3">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q3">Ist eine Teilmietung vorhandener Büroflächen oder einer virtuellen Office möglich?</a>
						</div>
						<div id="accordion_q3" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja, das ist beides möglich. Es wäre auch Co-Working Platz möglich.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h4">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q4">Welche monatlichen Kosten sind zu erwarten?</a>
						</div>
						<div id="accordion_q4" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>???</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h5">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q5">Ist bei der Kontoeröffnung eine physische Anwesenheit notwendig?</a>
						</div>
						<div id="accordion_q5" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Nein, die Kontoeröffnung ist mit einer notariell beglaubigten Vollmacht möglich.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h6">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q6">Welche Bank(en) eignen sich dafür am besten?</a>
						</div>
						<div id="accordion_q6" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Diese Frage ist so nicht zu beantworten. Das Bankensystem Georgiens ist sehr modern und deshalb eine Auswahl nach Wunsch möglich. Wir empfehlen TBC oder Bank of Georgia.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h7">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q7">Ist jeder Unternehmer buchhaltungspflichtig?</a>
						</div>
						<div id="accordion_q7" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h8">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q8">Brauche ich einen Jahresabschluss?</a>
						</div>
						<div id="accordion_q8" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h9">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q9">Gibt es nachgelagerte Körperschaftsteuer?</a>
						</div>
						<div id="accordion_q9" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h10">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q10">Wie hoch sind die Körperschaftsteuersätze?</a>
						</div>
						<div id="accordion_q10" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>0 % für IT, wenn beantragt, ansonsten 15 %</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h11">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q11">Gibt es Umsatzsteuer?</a>
						</div>
						<div id="accordion_q11" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja. 18 %</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h12">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q12">Welche Gesellschaftsform ist möglich?</a>
						</div>
						<div id="accordion_q12" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Offene Handelsgesellschaft, Kommanditgesellschaft, GmbH (LLC), AG und Kooperative, als natürliche Person gilt der Einzelunternehmer.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h13">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q13">Werden diese international anerkannt?</a>
						</div>
						<div id="accordion_q13" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja. Auch innerhalb EU. Die Rechnungen werden in der Regel problemlos anerkannt.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h14">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q14">Geschäftskonto auch im Ausland möglich?</a>
						</div>
						<div id="accordion_q14" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Problemlos im Inland möglich, Ausland auch sehr einfach.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h15">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q15">Wie hoch sind die jährlichen Verwaltungskosten?</a>
						</div>
						<div id="accordion_q15" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Sehr gering</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h16">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q16">Welche Handelsabkommen gibt es?</a>
						</div>
						<div id="accordion_q16" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Assoziierungsabkommen EU-Georgien, DCFTA</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h17">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q17">Gibt es eine Sozialversicherungspflicht?</a>
						</div>
						<div id="accordion_q17" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>?????</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h18">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q18">Wie hoch sind die Quellensteuern?</a>
						</div>
						<div id="accordion_q18" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja, 5 % z.B. auf Dividenden.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h19">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q19">Gibt es ein Öffentliches Register?</a>
						</div>
						<div id="accordion_q19" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja, dadurch keine Anonymität.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h20">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q20">Sind Rechnungen in Euro möglich?</a>
						</div>
						<div id="accordion_q20" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja, Rechnungen können in jeder Währung gestellt werden.</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h21">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q21">Durchschnittliche Gründungsdauer: </a>
						</div>
						<div id="accordion_q21" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Vom Ort ca. 2 Werktage, IT-Lizenz weitere 7 Werktage, Remote dauert generell länger, da die Vollmacht bei einem Notar beglaubigt und mit einer Apostille versehen werden muss</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h22">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q22">Wieviel muss man für ein Büro monatlich rechnen?</a>
						</div>
						<div id="accordion_q22" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ab €300</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_h23">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q23">Wieviel kostet einer Vollzeit Sekretärin?</a>
						</div>
						<div id="accordion_q23" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ca. 1.000 Lari brutto im Monat</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

					<div class="block block-bordered block-rounded mb-2">
						<div class="block-header" role="table" id="accordion_24">
							<a class="font-w600 collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion_q24">Gibt es die Möglichkeit einen Treuhänder als Geschäftsführer / Shareholder einzusetzen? </a>
						</div>
						<div id="accordion_q24" class="collapse" role="tabpanel" data-parent="#accordion">
							<div class="block-content">
								<p>Ja</p>
							</div><!-- /block content -->
						</div><!-- /collapse -->
					</div><!-- /block -->

				</div><!-- #accordion -->
',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
    }
}
