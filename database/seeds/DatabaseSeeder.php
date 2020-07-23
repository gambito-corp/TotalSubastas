<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTable([
            \App\Rol::class,
            \App\Bank::class,
            \App\Brand::class,
            \App\Country::class,
            \App\User::class,
            \App\Address::class,
            \App\Audit::class,
            \App\Balance::class,
            \App\Person::class,
            \App\LegalPerson::class,
            \App\Company::class,
            \App\Lot::class,
            \App\Warehouse::class,
            \App\Producto::class,
            \App\Auction::class,
            \App\ImagenesVehiculo::class,
            \App\Message::class,
            \App\VehicleDetail::class,
            \App\Garantia::class,
            \App\Ranking::class,
            \App\ActiveAuc::class,
            \App\Like::class,
            \App\DocumentosVehiculo::class,
            \App\Participacion::class
        ]);
        Schema::disableForeignKeyConstraints();
        $this->call(RolesSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(BancosSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DireccionSeeder::class);
        $this->call(AuditSeeder::class);
        $this->call(BalancesSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(JuridicaSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(LoteSeeder::class);
        $this->call(AlmacenSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(AuctionSeeder::class);
        $this->call(ImagenVeiclesSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(VehiculosSeeder::class);
        $this->call(GarantiaSeeder::class);
        $this->call(RankingSeeder::class);
        $this->call(ActivoSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(DocumentosSeeder::class);
        $this->call(ParticipacionSeeder::class);
        Schema::enableForeignKeyConstraints();
    }

    protected function truncateTable($models): void
    {
        Schema::disableForeignKeyConstraints();
        foreach ($models as $model)
        {
            $model::truncate();
        }
        Schema::enableForeignKeyConstraints();
    }
}
