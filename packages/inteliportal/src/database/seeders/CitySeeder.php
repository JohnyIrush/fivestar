<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\app\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      City::truncate();

      City::create([
        "city" => "Nairobi",
        "lat" => "-1.2864",
        "lng" => "36.8172",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nairobi City",
        "capital" => "primary"
      ]);

      City::create([
        "city" => "Meru",
        "lat" => "0.0500",
        "lng" => "37.6500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Meru",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Mombasa",
        "lat" => "-4.0500",
        "lng" => "39.6667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Mombasa",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kisumu",
        "lat" => "-0.1000",
        "lng" => "34.7500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kisumu",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Nakuru",
        "lat" => "-0.2833",
        "lng" => "36.0667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nakuru",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Eldoret",
        "lat" => "0.5167",
        "lng" => "35.2833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Uasin Gishu",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Machakos",
        "lat" => "-1.5167",
        "lng" => "37.2667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Machakos",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kisii",
        "lat" => "-0.6698",
        "lng" => "34.7675",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kisii",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Mumias",
        "lat" => "0.3333",
        "lng" => "34.4833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kakamega",
        "capital" => "",
      ]);
      City::create([
        "city" => "Thika",
        "lat" => "-1.0396",
        "lng" => "37.0900",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kiambu",
        "capital" => "",
      ]);
      City::create([
        "city" => "Nyeri",
        "lat" => "-0.4167",
        "lng" => "36.9500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nyeri",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Malindi",
        "lat" => "-3.2100",
        "lng" => "40.1000",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kilifi",
        "capital" => "",
      ]);
      City::create([
        "city" => "Kakamega",
        "lat" => "0.2833",
        "lng" => "34.7500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kakamega",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kendu Bay",
        "lat" => "-0.3596",
        "lng" => "34.6400",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Homa Bay",
        "capital" => "",
      ]);
      City::create([
        "city" => "Lodwar",
        "lat" => "3.1167",
        "lng" => "35.6000",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Turkana",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Athi River",
        "lat" => "-1.4500",
        "lng" => "36.9833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Machakos",
        "capital" => "",
      ]);
      City::create([
        "city" => "Kilifi",
        "lat" => "-3.6333",
        "lng" => "39.8500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kilifi",
        "capital" => "",
      ]);
      City::create([
        "city" => "Sotik",
        "lat" => "-0.6796",
        "lng" => "35.1200",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Bomet",
        "capital" => "",
      ]);
      City::create([
        "city" => "Garissa",
        "lat" => "-0.4569",
        "lng" => "39.6583",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Garissa",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kitale",
        "lat" => "1.0167",
        "lng" => "35.0000",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Trans Nzoia",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Bungoma",
        "lat" => "0.5666",
        "lng" => "34.5666",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Bungoma",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Isiolo",
        "lat" => "0.3500",
        "lng" => "37.5833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Isiolo",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Wajir",
        "lat" => "1.7500",
        "lng" => "40.0667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Wajir",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Embu",
        "lat" => "-0.5333",
        "lng" => "37.4500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Embu",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Voi",
        "lat" => "-3.3696",
        "lng" => "38.5700",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Taita/Taveta",
        "capital" => "",
      ]);
      City::create([
        "city" => "Homa Bay",
        "lat" => "-0.5167",
        "lng" => "34.4500",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Homa Bay",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Nanyuki",
        "lat" => "0.0167",
        "lng" => "37.0667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Laikipia",
        "capital" => "",
      ]);
      City::create([
        "city" => "Busia",
        "lat" => "0.4608",
        "lng" => "34.1108",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Busia",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Mandera",
        "lat" => "3.9167",
        "lng" => "41.8333",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Mandera",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kericho",
        "lat" => "-0.3692",
        "lng" => "35.2839",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kericho",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kitui",
        "lat" => "-1.3667",
        "lng" => "38.0167",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kitui",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Maralal",
        "lat" => "1.1000",
        "lng" => "36.7000",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Samburu",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Lamu",
        "lat" => "-2.2686",
        "lng" => "40.9003",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Lamu",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kapsabet",
        "lat" => "0.2000",
        "lng" => "35.1000",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nandi",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Marsabit",
        "lat" => "2.3333",
        "lng" => "37.9833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Marsabit",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Hola",
        "lat" => "-1.5000",
        "lng" => "40.0300",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Tana River",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kiambu",
        "lat" => "-1.1714",
        "lng" => "36.8356",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kiambu",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Kabarnet",
        "lat" => "0.4919",
        "lng" => "35.7430",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Baringo",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Migori",
        "lat" => "-1.0634",
        "lng" => "34.4731",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Migori",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Kerugoya",
        "lat" => "-0.4989",
        "lng" => "37.2803",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kirinyaga",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Iten",
        "lat" => "0.6703",
        "lng" => "35.5081",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Elgeyo/Marakwet",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Nyamira",
        "lat" => "-0.5633",
        "lng" => "34.9358",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nyamira",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Murang’a",
        "lat" => "-0.7210",
        "lng" => "37.1526",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Murang’a",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Sotik Post",
        "lat" => "-0.7813",
        "lng" => "35.3416",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Bomet",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Siaya",
        "lat" => "0.0607",
        "lng" => "34.2881",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Siaya",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Kapenguria",
        "lat" => "1.2389",
        "lng" => "35.1119",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "West Pokot",
        "capital" => "admin",

      ]);
      City::create([
        "city" => "Wote",
        "lat" => "-1.7808",
        "lng" => "37.6288",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Makueni",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Mwatate",
        "lat" => "-3.5050",
        "lng" => "38.3772",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Taita/Taveta",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kajiado",
        "lat" => "-1.8500",
        "lng" => "36.7833",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kajiado",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Ol Kalou",
        "lat" => "-0.2643",
        "lng" => "36.3788",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Nyandarua",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Narok",
        "lat" => "-1.0833",
        "lng" => "35.8667",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Narok",
        "capital" => "admin",
      ]);
      City::create([
        "city" => "Kwale",
        "lat" => "-4.1737",
        "lng" => "39.4521",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Kwale",
        "capital" => "admin",
      ]);

      City::create([
        "city" => "Rumuruti",
        "lat" => "0.2725",
        "lng" => "36.5381",
        "country" => "Kenya",
        "iso2" => "KE",
        "admin_name" => "Laikipia",
        "capital" => "admin",
      ]);

    }
}
