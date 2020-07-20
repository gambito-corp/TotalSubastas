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
            \App\User::class,
            \App\Rol::class,
            \App\ActiveAuc::class,
            \App\Address::class,
            \App\Auction::class,
            \App\Audit::class,
            \App\Balance::class,
            \App\Bank::class,
            \App\Brand::class,
            \App\Company::class,
            \App\Country::class,
            \App\Garantia::class,
            \App\ImagenesVehiculo::class,
            \App\LegalPerson::class,
            \App\Like::class,
            \App\Lot::class,
            \App\Message::class,
            \App\Person::class,
            \App\Producto::class,
            \App\Ranking::class,
            \App\VehicleDetail::class,
            \App\Warehouse::class
        ]);
        Schema::disableForeignKeyConstraints();
        $this->call(AlmacenSeeder::class);
        $this->call(BalancesSeeder::class);
        $this->call(BancosSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(DireccionSeeder::class);
        $this->call(ImagenVeiclesSeeder::class);
        $this->call(JuridicaSeeder::class);
        $this->call(LoteSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VehiculosSeeder::class);
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
