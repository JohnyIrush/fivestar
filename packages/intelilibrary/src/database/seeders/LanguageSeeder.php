<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Language::truncate();

      $faker = \Faker\Factory::create();

      Language::create([ "code"=> "aa", "language"=> "Afar" ]);
      Language::create([ "code"=> "ab", "language"=> "Abkhazian" ]);
      Language::create([ "code"=> "ae", "language"=> "Avestan" ]);
      Language::create([ "code"=> "af", "language"=> "Afrikaans" ]);
      Language::create([ "code"=> "ak", "language"=> "Akan" ]);
      Language::create([ "code"=> "am", "language"=> "Amharic" ]);
      Language::create([ "code"=> "an", "language"=> "Aragonese" ]);
      Language::create([ "code"=> "ar", "language"=> "Arabic" ]);
      Language::create([ "code"=> "as", "language"=> "Assamese" ]);
      Language::create([ "code"=> "av", "language"=> "Avaric" ]);
      Language::create([ "code"=> "ay", "language"=> "Aymara" ]);
      Language::create([ "code"=> "az", "language"=> "Azerbaijani" ]);
      Language::create([ "code"=> "ba", "language"=> "Bashkir" ]);
      Language::create([ "code"=> "be", "language"=> "Belarusian" ]);
      Language::create([ "code"=> "bg", "language"=> "Bulgarian" ]);
      Language::create([ "code"=> "bh", "language"=> "Bihari languages" ]);
      Language::create([ "code"=> "bi", "language"=> "Bislama" ]);
      Language::create([ "code"=> "bm", "language"=> "Bambara" ]);
      Language::create([ "code"=> "bn", "language"=> "Bengali" ]);
      Language::create([ "code"=> "bo", "language"=> "Tibetan" ]);
      Language::create([ "code"=> "br", "language"=> "Breton" ]);
      Language::create([ "code"=> "bs", "language"=> "Bosnian" ]);
      Language::create([ "code"=> "ca", "language"=> "Catalan; Valencian" ]);
      Language::create([ "code"=> "ce", "language"=> "Chechen" ]);
      Language::create([ "code"=> "ch", "language"=> "Chamorro" ]);
      Language::create([ "code"=> "co", "language"=> "Corsican" ]);
      Language::create([ "code"=> "cr", "language"=> "Cree" ]);
      Language::create([ "code"=> "cs", "language"=> "Czech" ]);
      Language::create([
       "code"=> "cu",
       "language"=> "Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic"
     ]);
     Language::create([ "code"=> "cv", "language"=> "Chuvash" ]);
     Language::create([ "code"=> "cy", "language"=> "Welsh" ]);
     Language::create([ "code"=> "da", "language"=> "Danish" ]);
     Language::create([ "code"=> "de", "language"=> "German" ]);
     Language::create([ "code"=> "dv", "language"=> "Divehi; Dhivehi; Maldivian" ]);
     Language::create([ "code"=> "dz", "language"=> "Dzongkha" ]);
     Language::create([ "code"=> "ee", "language"=> "Ewe" ]);
     Language::create([ "code"=> "el", "language"=> "Greek, Modern (1453-)" ]);
     Language::create([ "code"=> "en", "language"=> "English" ]);
     Language::create([ "code"=> "eo", "language"=> "Esperanto" ]);
     Language::create([ "code"=> "es", "language"=> "Spanish; Castilian" ]);
     Language::create([ "code"=> "et", "language"=> "Estonian" ]);
     Language::create([ "code"=> "eu", "language"=> "Basque" ]);
     Language::create([ "code"=> "fa", "language"=> "Persian" ]);
     Language::create([ "code"=> "ff", "language"=> "Fulah" ]);
     Language::create([ "code"=> "fi", "language"=> "Finnish" ]);
     Language::create([ "code"=> "fj", "language"=> "Fijian" ]);
     Language::create([ "code"=> "fo", "language"=> "Faroese" ]);
     Language::create([ "code"=> "fr", "language"=> "French" ]);
     Language::create([ "code"=> "fy", "language"=> "Western Frisian" ]);
     Language::create([ "code"=> "ga", "language"=> "Irish" ]);
     Language::create([ "code"=> "gd", "language"=> "Gaelic; Scomttish Gaelic" ]);
     Language::create([ "code"=> "gl", "language"=> "Galician" ]);
     Language::create([ "code"=> "gn", "language"=> "Guarani" ]);
     Language::create([ "code"=> "gu", "language"=> "Gujarati" ]);
     Language::create([ "code"=> "gv", "language"=> "Manx" ]);
     Language::create([ "code"=> "ha", "language"=> "Hausa" ]);
     Language::create([ "code"=> "he", "language"=> "Hebrew" ]);
     Language::create([ "code"=> "hi", "language"=> "Hindi" ]);
     Language::create([ "code"=> "ho", "language"=> "Hiri Motu" ]);
     Language::create([ "code"=> "hr", "language"=> "Croatian" ]);
     Language::create([ "code"=> "ht", "language"=> "Haitian; Haitian Creole" ]);
     Language::create([ "code"=> "hu", "language"=> "Hungarian" ]);
     Language::create([ "code"=> "hy", "language"=> "Armenian" ]);
     Language::create([ "code"=> "hz", "language"=> "Herero" ]);
     Language::create([
     "code"=> "ia",
     "language"=> "Interlingua (International Auxiliary Language Association)"
     ]);
     Language::create([ "code"=> "id", "language"=> "Indonesian" ]);
     Language::create([ "code"=> "ie", "language"=> "Interlingue; Occidental" ]);
     Language::create([ "code"=> "ig", "language"=> "Igbo" ]);
     Language::create([ "code"=> "ii", "language"=> "Sichuan Yi; Nuosu" ]);
     Language::create([ "code"=> "ik", "language"=> "Inupiaq" ]);
     Language::create([ "code"=> "io", "language"=> "Ido" ]);
     Language::create([ "code"=> "is", "language"=> "Icelandic" ]);
     Language::create([ "code"=> "it", "language"=> "Italian" ]);
     Language::create([ "code"=> "iu", "language"=> "Inuktitut" ]);
     Language::create([ "code"=> "ja", "language"=> "Japanese" ]);
     Language::create([ "code"=> "jv", "language"=> "Javanese" ]);
     Language::create([ "code"=> "ka", "language"=> "Georgian" ]);
     Language::create([ "code"=> "kg", "language"=> "Kongo" ]);
     Language::create([ "code"=> "ki", "language"=> "Kikuyu; Gikuyu" ]);
     Language::create([ "code"=> "kj", "language"=> "Kuanyama; Kwanyama" ]);
     Language::create([ "code"=> "kk", "language"=> "Kazakh" ]);
     Language::create([ "code"=> "kl", "language"=> "Kalaallisut; Greenlandic" ]);
     Language::create([ "code"=> "km", "language"=> "Central Khmer" ]);
     Language::create([ "code"=> "kn", "language"=> "Kannada" ]);
     Language::create([ "code"=> "ko", "language"=> "Korean" ]);
     Language::create([ "code"=> "kr", "language"=> "Kanuri" ]);
     Language::create([ "code"=> "ks", "language"=> "Kashmiri" ]);
     Language::create([ "code"=> "ku", "language"=> "Kurdish" ]);
     Language::create([ "code"=> "kv", "language"=> "Komi" ]);
     Language::create([ "code"=> "kw", "language"=> "Cornish" ]);
     Language::create([ "code"=> "ky", "language"=> "Kirghiz; Kyrgyz" ]);
     Language::create([ "code"=> "la", "language"=> "Latin" ]);
     Language::create([ "code"=> "lb", "language"=> "Luxembourgish; Letzeburgesch" ]);
     Language::create([ "code"=> "lg", "language"=> "Ganda" ]);
     Language::create([ "code"=> "li", "language"=> "Limburgan; Limburger; Limburgish"    ]);
     Language::create([ "code"=> "ln", "language"=> "Lingala" ]);
     Language::create([ "code"=> "lo", "language"=> "Lao" ]);
     Language::create([ "code"=> "lt", "language"=> "Lithuanian" ]);
     Language::create([ "code"=> "lu", "language"=> "Luba-Katanga" ]);
     Language::create([ "code"=> "lv", "language"=> "Latvian" ]);
     Language::create([ "code"=> "mg", "language"=> "Malagasy" ]);
     Language::create([ "code"=> "mh", "language"=> "Marshallese" ]);
     Language::create([ "code"=> "mi", "language"=> "Maori" ]);
     Language::create([ "code"=> "mk", "language"=> "Macedonian" ]);
     Language::create([ "code"=> "ml", "language"=> "Malayalam" ]);
     Language::create([ "code"=> "mn", "language"=> "Mongolian" ]);
     Language::create([ "code"=> "mr", "language"=> "Marathi" ]);
     Language::create([ "code"=> "ms", "language"=> "Malay" ]);
     Language::create([ "code"=> "mt", "language"=> "Maltese" ]);
     Language::create([ "code"=> "my", "language"=> "Burmese" ]);
     Language::create([ "code"=> "na", "language"=> "Nauru" ]);
     Language::create([
      "code"=> "nb",
      "language"=> "Bokmål, Norwegian; Norwegian Bokmål"
     ]);
     Language::create([ "code"=> "nd", "language"=> "Ndebele, North; North Ndebele" ]);
     Language::create([ "code"=> "ne", "language"=> "Nepali" ]);
     Language::create([ "code"=> "ng", "language"=> "Ndonga" ]);
     Language::create([ "code"=> "nl", "language"=> "Dutch; Flemish" ]);
     Language::create([ "code"=> "nn", "language"=> "Norwegian Nynorsk; Nynorsk, Norwegian" ]);
     Language::create([ "code"=> "no", "language"=> "Norwegian" ]);
     Language::create([ "code"=> "nr", "language"=> "Ndebele, South; South Ndebele" ]);
     Language::create([ "code"=> "nv", "language"=> "Navajo; Navaho" ]);
     Language::create([ "code"=> "ny", "language"=> "Chichewa; Chewa; Nyanja" ]);
     Language::create([ "code"=> "oc", "language"=> "Occitan (post 1500)" ]);
     Language::create([ "code"=> "oj", "language"=> "Ojibwa" ]);
     Language::create([ "code"=> "om", "language"=> "Oromo" ]);
     Language::create([ "code"=> "or", "language"=> "Oriya" ]);
     Language::create([ "code"=> "os", "language"=> "Ossetian; Ossetic" ]);
     Language::create([ "code"=> "pa", "language"=> "Panjabi; Punjabi" ]);
     Language::create([ "code"=> "pi", "language"=> "Pali" ]);
     Language::create([ "code"=> "pl", "language"=> "Polish" ]);
     Language::create([ "code"=> "ps", "language"=> "Pushto; Pashto" ]);
     Language::create([ "code"=> "pt", "language"=> "Portuguese" ]);
     Language::create([ "code"=> "qu", "language"=> "Quechua" ]);
     Language::create([ "code"=> "rm", "language"=> "Romansh" ]);
     Language::create([ "code"=> "rn", "language"=> "Rundi" ]);
     Language::create([ "code"=> "ro", "language"=> "Romanian; Moldavian; Moldovan" ]);
     Language::create([ "code"=> "ru", "language"=> "Russian" ]);
     Language::create([ "code"=> "rw", "language"=> "Kinyarwanda" ]);
     Language::create([ "code"=> "sa", "language"=> "Sanskrit" ]);
     Language::create([ "code"=> "sc", "language"=> "Sardinian" ]);
     Language::create([ "code"=> "sd", "language"=> "Sindhi" ]);
     Language::create([ "code"=> "se", "language"=> "Northern Sami" ]);
     Language::create([ "code"=> "sg", "language"=> "Sango" ]);
     Language::create([ "code"=> "si", "language"=> "Sinhala; Sinhalese" ]);
     Language::create([ "code"=> "sk", "language"=> "Slovak" ]);
     Language::create([ "code"=> "sl", "language"=> "Slovenian" ]);
     Language::create([ "code"=> "sm", "language"=> "Samoan" ]);
     Language::create([ "code"=> "sn", "language"=> "Shona" ]);
     Language::create([ "code"=> "so", "language"=> "Somali" ]);
     Language::create([ "code"=> "sq", "language"=> "Albanian" ]);
     Language::create([ "code"=> "sr", "language"=> "Serbian" ]);
     Language::create([ "code"=> "ss", "language"=> "Swati" ]);
     Language::create([ "code"=> "st", "language"=> "Sotho, Southern" ]);
     Language::create([ "code"=> "su", "language"=> "Sundanese" ]);
     Language::create([ "code"=> "sv", "language"=> "Swedish" ]);
     Language::create([ "code"=> "sw", "language"=> "Swahili" ]);
     Language::create([ "code"=> "ta", "language"=> "Tamil" ]);
     Language::create([ "code"=> "te", "language"=> "Telugu" ]);
     Language::create([ "code"=> "tg", "language"=> "Tajik" ]);
     Language::create([ "code"=> "th", "language"=> "Thai" ]);
     Language::create([ "code"=> "ti", "language"=> "Tigrinya" ]);
     Language::create([ "code"=> "tk", "language"=> "Turkmen" ]);
     Language::create([ "code"=> "tl", "language"=> "Tagalog" ]);
     Language::create([ "code"=> "tn", "language"=> "Tswana" ]);
     Language::create([ "code"=> "to", "language"=> "Tonga (Tonga Islands)" ]);
     Language::create([ "code"=> "tr", "language"=> "Turkish" ]);
     Language::create([ "code"=> "ts", "language"=> "Tsonga" ]);
     Language::create([ "code"=> "tt", "language"=> "Tatar" ]);
     Language::create([ "code"=> "tw", "language"=> "Twi" ]);
     Language::create([ "code"=> "ty", "language"=> "Tahitian" ]);
     Language::create([ "code"=> "ug", "language"=> "Uighur; Uyghur" ]);
     Language::create([ "code"=> "uk", "language"=> "Ukrainian" ]);
     Language::create([ "code"=> "ur", "language"=> "Urdu" ]);
     Language::create([ "code"=> "uz", "language"=> "Uzbek" ]);
     Language::create([ "code"=> "ve", "language"=> "Venda" ]);
     Language::create([ "code"=> "vi", "language"=> "Vietlanguagese" ]);
     Language::create([ "code"=> "vo", "language"=> "Volapük" ]);
     Language::create([ "code"=> "wa", "language"=> "Walloon" ]);
     Language::create([ "code"=> "wo", "language"=> "Wolof" ]);
     Language::create([ "code"=> "xh", "language"=> "Xhosa" ]);
     Language::create([ "code"=> "yi", "language"=> "Yiddish" ]);
     Language::create([ "code"=> "yo", "language"=> "Yoruba" ]);
     Language::create([ "code"=> "za", "language"=> "Zhuang; Chuang" ]);
     Language::create([ "code"=> "zh", "language"=> "Chinese" ]);
     Language::create([ "code"=> "zu", "language"=> "Zulu" ]);
          }
}
