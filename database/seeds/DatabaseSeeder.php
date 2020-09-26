<?php

use App\Lot;
use App\Rol;
use App\Like;
use App\User;
use App\Bank;
use App\Slide;
use App\Audit;
use App\Brand;
use App\Person;
use App\Address;
use App\Auction;
use App\Balance;
use App\Company;
use App\Country;
use App\Message;
use App\Ranking;
use App\Garantia;
use App\Producto;
use App\Warehouse;
use App\ActiveAuc;
use App\LegalPerson;
use App\Participacion;
use App\VehicleDetail;
use App\ImagenesVehiculo;
use App\DocumentosVehiculo;
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
            Rol::class,
            Bank::class,
            Brand::class,
            Country::class,
            User::class,
            Address::class,
            Audit::class,
            Balance::class,
            Person::class,
            LegalPerson::class,
            Company::class,
            Lot::class,
            Warehouse::class,
            Producto::class,
            Auction::class,
            ImagenesVehiculo::class,
            Message::class,
            VehicleDetail::class,
            Garantia::class,
            Ranking::class,
            ActiveAuc::class,
            Like::class,
            DocumentosVehiculo::class,
            Participacion::class,
            Slide::class
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
        $this->call(SlideSeeder::class);
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
