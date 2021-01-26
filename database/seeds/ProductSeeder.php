<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('products')->insert([
			'title' => 'Minimum package',
			'slug' => 'minimum-package',
			'price' => 800,
			'info' => '<ul class="list-group list-group-flush">
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Überprüfung der Verfügbarkeit des gewünschten Firmennamens
		</li>
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Firmensitz in Georgien (Juristische Adresse) 
		</li>
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Eintragung der LLC in das georgische Handelsregister (Firmengründung)
		</li>
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Beantragung der Steuernummer
		</li>
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Digitaler Auszug aus dem Handelsregister (auf Englisch)
		</li>
		<li class="list-group-item">
			<i class="las la-check"></i>	
			Beantragung des IT-Status (wenn gewünscht)
		</li>
			</ul>',
			'color' => 'primary-lighter',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('products')->insert([
			'title' => 'Medium package',
			'slug' => 'medium-package',
			'price' => 1000,
			'info' => '
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<i class="las la-check"></i>
					Überprüfung der Verfügbarkeit des gewünschten Firmennamens
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Aufsetzen des Gesellschaftsvertrages (Charter)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Firmensitz in Georgien (Juristische Adresse) 
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Eintragung der LLC in das georgische Handelsregister (Firmengründung)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Beantragung der Steuernummer
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Eröffnung vom Geschäftskonto
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Digitaler Auszug aus dem Handelsregister (auf Englisch)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Beantragung des IT-Status (wenn gewünscht) 
				</li>
			</ul>
',
			'color' => 'primary-light',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('products')->insert([
			'title' => 'Max package',
			'slug' => 'max-package',
			'price' => 1200,
			'info' => '
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<i class="las la-check"></i>
					Überprüfung der Verfügbarkeit des gewünschten Firmennamens
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Aufsetzen des Gesellschaftsvertrages (Charter)
					</li>
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Aufsetzen des Gesellschaftsvertrages (Charter)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Eintragung der LLC in das georgische Handelsregister (Firmengründung)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Beantragung der Steuernummer
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Erstregistrierung auf www.rs.ge (Finanzonline) 
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Eröffnung des Geschäftskontos
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Eröffnung des Privatkontos
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Kurierkosten (aus Georgien) 
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Digitaler Auszug aus dem Handelsregister (auf Englisch)
				</li>
				<li class="list-group-item">
					<i class="las la-check"></i>
					Beantragung des IT-Status (wenn gewünscht) 
				</li>
			</ul>
',
			'color' => 'primary',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
    }
}
