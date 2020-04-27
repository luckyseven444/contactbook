<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        Country::insert([
            [
                'id' => '1',
                'country_name' => 'N\A',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'n_a',
                'country_code' => null,
            ],
            [
                'id' => '2',
                'country_name' => 'Afghanistan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'afghanistan',
                'country_code' => 'AF',
            ],

            [
                'id' => '3',
                'country_name' => 'Albania',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'albania',
                'country_code' => 'AL',
            ],

            [
                'id' => '4',
                'country_name' => 'Algeria',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'algeria',
                'country_code' => 'DZ',
            ],

            [
                'id' => '5',
                'country_name' => 'Andorra',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'andorra',
                'country_code' => 'AD',
            ],

            [
                'id' => '6',
                'country_name' => 'Angola',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'angola',
                'country_code' => 'AO',
            ],

            [
                'id' => '7',
                'country_name' => 'Antigua and Barbuda',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'antigua-and-barbuda',
                'country_code' => 'AG',
            ],

            [
                'id' => '8',
                'country_name' => 'Argentina',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'argentina',
                'country_code' => 'AR',
            ],

            [
                'id' => '9',
                'country_name' => 'Armenia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'armenia',
                'country_code' => 'AM',
            ],

            [
                'id' => '10',
                'country_name' => 'Aruba',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'aruba',
                'country_code' => 'AW',
            ],

            [
                'id' => '11',
                'country_name' => 'Australia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'australia',
                'country_code' => 'AU',
            ],

            [
                'id' => '12',
                'country_name' => 'Austria',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'austria',
                'country_code' => 'AT',
            ],

            [
                'id' => '13',
                'country_name' => 'Azerbaijan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'azerbaijan',
                'country_code' => 'AZ',
            ],

            [
                'id' => '14',
                'country_name' => 'Bahamas',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bahamas',
                'country_code' => 'BS',
            ],

            [
                'id' => '15',
                'country_name' => 'Bahrain',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bahrain',
                'country_code' => 'BH',
            ],

            [
                'id' => '16',
                'country_name' => 'Bangladesh',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bangladesh',
                'country_code' => 'BD',
            ],

            [
                'id' => '17',
                'country_name' => 'Barbados',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'barbados',
                'country_code' => 'BB',
            ],

            [
                'id' => '18',
                'country_name' => 'Belarus',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'belarus',
                'country_code' => 'BY',
            ],

            [
                'id' => '19',
                'country_name' => 'Belgium',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'belgium',
                'country_code' => 'BE',
            ],

            [
                'id' => '20',
                'country_name' => 'Belize',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'belize',
                'country_code' => 'BZ',
            ],

            [
                'id' => '21',
                'country_name' => 'Benin',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'benin',
                'country_code' => 'BJ',
            ],

            [
                'id' => '22',
                'country_name' => 'Bhutan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bhutan',
                'country_code' => 'BT',
            ],

            [
                'id' => '23',
                'country_name' => 'Bolivia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bolivia',
                'country_code' => 'BO',
            ],

            [
                'id' => '24',
                'country_name' => 'Bosnia and Herzegovina',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bosnia-and-herzegovina',
                'country_code' => 'BA',
            ],

            [
                'id' => '25',
                'country_name' => 'Botswana',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'botswana',
                'country_code' => 'BW',
            ],

            [
                'id' => '26',
                'country_name' => 'Brazil',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'brazil',
                'country_code' => 'BR',
            ],

            [
                'id' => '27',
                'country_name' => 'Brunei',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'brunei',
                'country_code' => 'BN',
            ],

            [
                'id' => '28',
                'country_name' => 'Bulgaria',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'bulgaria',
                'country_code' => 'BG',
            ],

            [
                'id' => '29',
                'country_name' => 'Burkina Faso',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'burkina-faso',
                'country_code' => 'BF',
            ],

            [
                'id' => '30',
                'country_name' => 'Burma',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'burma',
                'country_code' => 'MM',
            ],

            [
                'id' => '31',
                'country_name' => 'Burundi',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'burundi',
                'country_code' => 'BI',
            ],

            [
                'id' => '32',
                'country_name' => 'Cambodia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cambodia',
                'country_code' => 'KH',
            ],

            [
                'id' => '33',
                'country_name' => 'Cameroon',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cameroon',
                'country_code' => 'CM',
            ],

            [
                'id' => '34',
                'country_name' => 'Canada',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'canada',
                'country_code' => 'CA',
            ],

            [
                'id' => '35',
                'country_name' => 'Cape Verde',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cape-verde',
                'country_code' => 'CV',
            ],

            [
                'id' => '36',
                'country_name' => 'Central African Republic',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'central-african-republic',
                'country_code' => 'CF',
            ],

            [
                'id' => '37',
                'country_name' => 'Chad',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'chad',
                'country_code' => 'TD',
            ],

            [
                'id' => '38',
                'country_name' => 'Chile',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'chile',
                'country_code' => 'CL',
            ],

            [
                'id' => '39',
                'country_name' => 'China',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'china',
                'country_code' => 'CN',
            ],

            [
                'id' => '40',
                'country_name' => 'Colombia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'colombia',
                'country_code' => 'CO',
            ],

            [
                'id' => '41',
                'country_name' => 'Comoros',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'comoros',
                'country_code' => 'KM',
            ],

            [
                'id' => '42',
                'country_name' => 'Congo, Democratic Republic of the',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'congo-democratic-republic-of-the',
                'country_code' => 'CD',
            ],

            [
                'id' => '43',
                'country_name' => 'Congo, Republic of the',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'congo-republic-of-the',
                'country_code' => 'CG',
            ],

            [
                'id' => '44',
                'country_name' => 'Costa Rica',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'costa-rica',
                'country_code' => 'CR',
            ],

            [
                'id' => '45',
                'country_name' => 'Cote d Ivoire',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cote-d-ivoire',
                'country_code' => 'CI',
            ],

            [
                'id' => '46',
                'country_name' => 'Croatia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'croatia',
                'country_code' => 'HR',
            ],

            [
                'id' => '47',
                'country_name' => 'Cuba',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cuba',
                'country_code' => 'CU',
            ],

            [
                'id' => '48',
                'country_name' => 'Curacao',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'curacao',
                'country_code' => 'CW',
            ],

            [
                'id' => '49',
                'country_name' => 'Cyprus',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'cyprus',
                'country_code' => 'CY',
            ],

            [
                'id' => '50',
                'country_name' => 'Czech Republic',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'czech-republic',
                'country_code' => 'CZ',
            ],

            [
                'id' => '51',
                'country_name' => 'Denmark',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'denmark',
                'country_code' => 'DK',
            ],

            [
                'id' => '52',
                'country_name' => 'Djibouti',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'djibouti',
                'country_code' => 'DJ',
            ],

            [
                'id' => '53',
                'country_name' => 'Dominica',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'dominica',
                'country_code' => 'DM',
            ],

            [
                'id' => '54',
                'country_name' => 'Dominican Republic',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'dominican-republic',
                'country_code' => 'DO',
            ],

            [
                'id' => '55',
                'country_name' => 'East Timor (see Timor-Leste)',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'east-timor-see-timor-leste',
                'country_code' => 'TL',
            ],

            [
                'id' => '56',
                'country_name' => 'Ecuador',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'ecuador',
                'country_code' => 'EC',
            ],

            [
                'id' => '57',
                'country_name' => 'Egypt',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'egypt',
                'country_code' => 'EG',
            ],

            [
                'id' => '58',
                'country_name' => 'El Salvador',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'el-salvador',
                'country_code' => 'SV',
            ],

            [
                'id' => '59',
                'country_name' => 'Equatorial Guinea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'equatorial-guinea',
                'country_code' => 'GN',
            ],

            [
                'id' => '60',
                'country_name' => 'Eritrea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'eritrea',
                'country_code' => 'ER',
            ],

            [
                'id' => '61',
                'country_name' => 'Estonia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'estonia',
                'country_code' => 'EE',
            ],

            [
                'id' => '62',
                'country_name' => 'Ethiopia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'ethiopia',
                'country_code' => 'ET',
            ],

            [
                'id' => '63',
                'country_name' => 'Fiji',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'fiji',
                'country_code' => 'FJ',
            ],

            [
                'id' => '64',
                'country_name' => 'Finland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'finland',
                'country_code' => 'FI',
            ],

            [
                'id' => '65',
                'country_name' => 'France',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'france',
                'country_code' => 'FR',
            ],

            [
                'id' => '66',
                'country_name' => 'Gabon',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'gabon',
                'country_code' => 'GA',
            ],

            [
                'id' => '67',
                'country_name' => 'Gambia, The',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'gambia-the',
                'country_code' => 'GM',
            ],

            [
                'id' => '68',
                'country_name' => 'Georgia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'georgia',
                'country_code' => 'GE',
            ],

            [
                'id' => '69',
                'country_name' => 'Germany',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'germany',
                'country_code' => 'DE',
            ],

            [
                'id' => '70',
                'country_name' => 'Ghana',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'ghana',
                'country_code' => 'GH',
            ],

            [
                'id' => '71',
                'country_name' => 'Greece',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'greece',
                'country_code' => 'GR',
            ],

            [
                'id' => '72',
                'country_name' => 'Grenada',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'grenada',
                'country_code' => 'GD',
            ],

            [
                'id' => '73',
                'country_name' => 'Guatemala',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'guatemala',
                'country_code' => 'GT',
            ],

            [
                'id' => '74',
                'country_name' => 'Guinea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'guinea',
                'country_code' => 'GN',
            ],

            [
                'id' => '75',
                'country_name' => 'Guinea-Bissau',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'guinea-bissau',
                'country_code' => 'GW',
            ],

            [
                'id' => '76',
                'country_name' => 'Guyana',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'guyana',
                'country_code' => 'GY',
            ],

            [
                'id' => '77',
                'country_name' => 'Haiti',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'haiti',
                'country_code' => 'HT',
            ],

            [
                'id' => '78',
                'country_name' => 'Holy See',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'holy-see',
                'country_code' => 'VA',
            ],

            [
                'id' => '79',
                'country_name' => 'Honduras',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'honduras',
                'country_code' => 'HN',
            ],

            [
                'id' => '80',
                'country_name' => 'Hong Kong',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'hong-kong',
                'country_code' => 'HK',
            ],

            [
                'id' => '81',
                'country_name' => 'Hungary',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'hungary',
                'country_code' => 'HU',
            ],

            [
                'id' => '82',
                'country_name' => 'Iceland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'iceland',
                'country_code' => 'IS',
            ],

            [
                'id' => '83',
                'country_name' => 'India',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'india',
                'country_code' => 'IN',
            ],

            [
                'id' => '84',
                'country_name' => 'Indonesia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'indonesia',
                'country_code' => 'ID',
            ],

            [
                'id' => '85',
                'country_name' => 'Iran',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'iran',
                'country_code' => 'IR',
            ],

            [
                'id' => '86',
                'country_name' => 'Iraq',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'iraq',
                'country_code' => 'IQ',
            ],

            [
                'id' => '87',
                'country_name' => 'Ireland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'ireland',
                'country_code' => 'IE',
            ],

            [
                'id' => '88',
                'country_name' => 'Israel',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'israel',
                'country_code' => 'IL',
            ],

            [
                'id' => '89',
                'country_name' => 'Italy',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'italy',
                'country_code' => 'IT',
            ],

            [
                'id' => '90',
                'country_name' => 'Jamaica',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'jamaica',
                'country_code' => 'JM',
            ],

            [
                'id' => '91',
                'country_name' => 'Japan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'japan',
                'country_code' => 'JP',
            ],

            [
                'id' => '92',
                'country_name' => 'Jordan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'jordan',
                'country_code' => 'JO',
            ],

            [
                'id' => '93',
                'country_name' => 'Kazakhstan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kazakhstan',
                'country_code' => 'KZ',
            ],

            [
                'id' => '94',
                'country_name' => 'Kenya',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kenya',
                'country_code' => 'KE',
            ],

            [
                'id' => '95',
                'country_name' => 'Kiribati',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kiribati',
                'country_code' => 'KI',
            ],

            [
                'id' => '96',
                'country_name' => 'Korea, North',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'korea-north',
                'country_code' => 'KP',
            ],

            [
                'id' => '97',
                'country_name' => 'Korea, South',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'korea-south',
                'country_code' => 'KR',
            ],

            [
                'id' => '98',
                'country_name' => 'Kosovo',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kosovo',
                'country_code' => 'XK',
            ],

            [
                'id' => '99',
                'country_name' => 'Kuwait',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kuwait',
                'country_code' => 'KW',
            ],

            [
                'id' => '100',
                'country_name' => 'Kyrgyzstan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'kyrgyzstan',
                'country_code' => 'KG',
            ],

            [
                'id' => '101',
                'country_name' => 'Laos',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'laos',
                'country_code' => 'LA',
            ],

            [
                'id' => '102',
                'country_name' => 'Latvia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'latvia',
                'country_code' => 'LV',
            ],

            [
                'id' => '103',
                'country_name' => 'Lebanon',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'lebanon',
                'country_code' => 'LB',
            ],

            [
                'id' => '104',
                'country_name' => 'Lesotho',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'lesotho',
                'country_code' => 'LS',
            ],

            [
                'id' => '105',
                'country_name' => 'Liberia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'liberia',
                'country_code' => 'LR',
            ],

            [
                'id' => '106',
                'country_name' => 'Libya',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'libya',
                'country_code' => 'LY',
            ],

            [
                'id' => '107',
                'country_name' => 'Liechtenstein',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'liechtenstein',
                'country_code' => 'LI',
            ],

            [
                'id' => '108',
                'country_name' => 'Lithuania',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'lithuania',
                'country_code' => 'LT',
            ],

            [
                'id' => '109',
                'country_name' => 'Luxembourg',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'luxembourg',
                'country_code' => 'LU',
            ],

            [
                'id' => '110',
                'country_name' => 'Macau',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'macau',
                'country_code' => 'MO',
            ],

            [
                'id' => '111',
                'country_name' => 'Macedonia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'macedonia',
                'country_code' => 'MK',
            ],

            [
                'id' => '112',
                'country_name' => 'Madagascar',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'madagascar',
                'country_code' => 'MG',
            ],

            [
                'id' => '113',
                'country_name' => 'Malawi',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'malawi',
                'country_code' => 'MW',
            ],

            [
                'id' => '114',
                'country_name' => 'Malaysia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'malaysia',
                'country_code' => 'MY',
            ],

            [
                'id' => '115',
                'country_name' => 'Maldives',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'maldives',
                'country_code' => 'MV',
            ],

            [
                'id' => '116',
                'country_name' => 'Mali',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mali',
                'country_code' => 'ML',
            ],

            [
                'id' => '117',
                'country_name' => 'Malta',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'malta',
                'country_code' => 'MT',
            ],

            [
                'id' => '118',
                'country_name' => 'Marshall Islands',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'marshall-islands',
                'country_code' => 'MH',
            ],

            [
                'id' => '119',
                'country_name' => 'Mauritania',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mauritania',
                'country_code' => 'MR',
            ],

            [
                'id' => '120',
                'country_name' => 'Mauritius',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mauritius',
                'country_code' => 'MU',
            ],

            [
                'id' => '121',
                'country_name' => 'Mexico',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mexico',
                'country_code' => 'MX',
            ],

            [
                'id' => '122',
                'country_name' => 'Micronesia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'micronesia',
                'country_code' => 'FM',
            ],

            [
                'id' => '123',
                'country_name' => 'Moldova',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'moldova',
                'country_code' => 'MD',
            ],

            [
                'id' => '124',
                'country_name' => 'Monaco',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'monaco',
                'country_code' => 'MC',
            ],

            [
                'id' => '125',
                'country_name' => 'Mongolia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mongolia',
                'country_code' => 'MN',
            ],

            [
                'id' => '126',
                'country_name' => 'Montenegro',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'montenegro',
                'country_code' => 'ME',
            ],

            [
                'id' => '127',
                'country_name' => 'Morocco',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'morocco',
                'country_code' => 'MA',
            ],

            [
                'id' => '128',
                'country_name' => 'Mozambique',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'mozambique',
                'country_code' => 'MZ',
            ],

            [
                'id' => '129',
                'country_name' => 'Namibia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'namibia',
                'country_code' => 'NA',
            ],

            [
                'id' => '130',
                'country_name' => 'Nauru',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'nauru',
                'country_code' => 'NR',
            ],

            [
                'id' => '131',
                'country_name' => 'Nepal',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'nepal',
                'country_code' => 'NP',
            ],

            [
                'id' => '132',
                'country_name' => 'Netherlands',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'netherlands',
                'country_code' => 'NL',
            ],

            [
                'id' => '133',
                'country_name' => 'Netherlands Antilles',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'netherlands-antilles',
                'country_code' => 'AN',
            ],

            [
                'id' => '134',
                'country_name' => 'New Zealand',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'new-zealand',
                'country_code' => 'NZ',
            ],

            [
                'id' => '135',
                'country_name' => 'Nicaragua',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'nicaragua',
                'country_code' => 'NI',
            ],

            [
                'id' => '136',
                'country_name' => 'Niger',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'niger',
                'country_code' => 'NE',
            ],

            [
                'id' => '137',
                'country_name' => 'Nigeria',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'nigeria',
                'country_code' => 'NG',
            ],

            [
                'id' => '138',
                'country_name' => 'North Korea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'north-korea',
                'country_code' => 'KP',
            ],

            [
                'id' => '139',
                'country_name' => 'Norway',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'norway',
                'country_code' => 'NO',
            ],

            [
                'id' => '140',
                'country_name' => 'Oman',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'oman',
                'country_code' => 'OM',
            ],

            [
                'id' => '141',
                'country_name' => 'Pakistan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'pakistan',
                'country_code' => 'PK',
            ],

            [
                'id' => '142',
                'country_name' => 'Palau',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'palau',
                'country_code' => 'PW',
            ],

            [
                'id' => '143',
                'country_name' => 'Palestinian Territories',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'palestinian-territories',
                'country_code' => 'PS',
            ],

            [
                'id' => '144',
                'country_name' => 'Panama',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'panama',
                'country_code' => 'PA',
            ],

            [
                'id' => '145',
                'country_name' => 'Papua New Guinea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'papua-new-guinea',
                'country_code' => 'PG',
            ],

            [
                'id' => '146',
                'country_name' => 'Paraguay',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'paraguay',
                'country_code' => 'PY',
            ],

            [
                'id' => '147',
                'country_name' => 'Peru',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'peru',
                'country_code' => 'PE',
            ],

            [
                'id' => '148',
                'country_name' => 'Philippines',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'philippines',
                'country_code' => 'PH',
            ],

            [
                'id' => '149',
                'country_name' => 'Poland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'poland',
                'country_code' => 'PL',
            ],

            [
                'id' => '150',
                'country_name' => 'Portugal',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'portugal',
                'country_code' => 'PT',
            ],

            [
                'id' => '151',
                'country_name' => 'Qatar',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'qatar',
                'country_code' => 'QA',
            ],

            [
                'id' => '152',
                'country_name' => 'Romania',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'romania',
                'country_code' => 'RO',
            ],

            [
                'id' => '153',
                'country_name' => 'Russia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'russia',
                'country_code' => 'RU',
            ],

            [
                'id' => '154',
                'country_name' => 'Rwanda',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'rwanda',
                'country_code' => 'RW',
            ],

            [
                'id' => '155',
                'country_name' => 'Saint Kitts and Nevis',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'saint-kitts-and-nevis',
                'country_code' => 'KN',
            ],

            [
                'id' => '156',
                'country_name' => 'Saint Lucia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'saint-lucia',
                'country_code' => 'LC',
            ],

            [
                'id' => '157',
                'country_name' => 'Saint Vincent and the Grenadines',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'saint-vincent-and-the-grenadines',
                'country_code' => 'VC',
            ],

            [
                'id' => '158',
                'country_name' => 'Samoa',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'samoa',
                'country_code' => 'WS',
            ],

            [
                'id' => '159',
                'country_name' => 'San Marino',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'san-marino',
                'country_code' => 'SM',
            ],

            [
                'id' => '160',
                'country_name' => 'Sao Tome and Principe',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sao-tome-and-principe',
                'country_code' => 'ST',
            ],

            [
                'id' => '161',
                'country_name' => 'Saudi Arabia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'saudi-arabia',
                'country_code' => 'SA',
            ],

            [
                'id' => '162',
                'country_name' => 'Senegal',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'senegal',
                'country_code' => 'SN',
            ],

            [
                'id' => '163',
                'country_name' => 'Serbia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'serbia',
                'country_code' => 'RS',
            ],

            [
                'id' => '164',
                'country_name' => 'Seychelles',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'seychelles',
                'country_code' => 'SC',
            ],

            [
                'id' => '165',
                'country_name' => 'Sierra Leone',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sierra-leone',
                'country_code' => 'SL',
            ],

            [
                'id' => '166',
                'country_name' => 'Singapore',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'singapore',
                'country_code' => 'SG',
            ],

            [
                'id' => '167',
                'country_name' => 'Sint Maarten',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sint-maarten',
                'country_code' => 'SX',
            ],

            [
                'id' => '168',
                'country_name' => 'Slovakia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'slovakia',
                'country_code' => 'SK',
            ],

            [
                'id' => '169',
                'country_name' => 'Slovenia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'slovenia',
                'country_code' => 'SI',
            ],

            [
                'id' => '170',
                'country_name' => 'Solomon Islands',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'solomon-islands',
                'country_code' => 'SB',
            ],

            [
                'id' => '171',
                'country_name' => 'Somalia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'somalia',
                'country_code' => 'SO',
            ],

            [
                'id' => '172',
                'country_name' => 'South Africa',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'south-africa',
                'country_code' => 'ZA',
            ],

            [
                'id' => '173',
                'country_name' => 'South Korea',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'south-korea',
                'country_code' => 'KR',
            ],

            [
                'id' => '174',
                'country_name' => 'South Sudan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'south-sudan',
                'country_code' => 'SD',
            ],

            [
                'id' => '175',
                'country_name' => 'Spain',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'spain',
                'country_code' => 'ES',
            ],

            [
                'id' => '176',
                'country_name' => 'Sri Lanka',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sri-lanka',
                'country_code' => 'LK',
            ],

            [
                'id' => '177',
                'country_name' => 'Sudan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sudan',
                'country_code' => 'SD',
            ],

            [
                'id' => '178',
                'country_name' => 'Suriname',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'suriname',
                'country_code' => 'SR',
            ],

            [
                'id' => '179',
                'country_name' => 'Swaziland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'swaziland',
                'country_code' => 'SZ',
            ],

            [
                'id' => '180',
                'country_name' => 'Sweden',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'sweden',
                'country_code' => 'SE',
            ],

            [
                'id' => '181',
                'country_name' => 'Switzerland',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'switzerland',
                'country_code' => 'CH',
            ],

            [
                'id' => '182',
                'country_name' => 'Syria',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'syria',
                'country_code' => 'SY',
            ],

            [
                'id' => '183',
                'country_name' => 'Taiwan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'taiwan',
                'country_code' => 'TW',
            ],

            [
                'id' => '184',
                'country_name' => 'Tajikistan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'tajikistan',
                'country_code' => 'TJ',
            ],

            [
                'id' => '185',
                'country_name' => 'Tanzania',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'tanzania',
                'country_code' => 'TZ',
            ],

            [
                'id' => '186',
                'country_name' => 'Thailand',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'thailand',
                'country_code' => 'TH',
            ],

            [
                'id' => '187',
                'country_name' => 'Timor-Leste',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'timor-leste',
                'country_code' => 'TL',
            ],

            [
                'id' => '189',
                'country_name' => 'Togo',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'togo',
                'country_code' => 'TG',
            ],

            [
                'id' => '190',
                'country_name' => 'Tonga',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'tonga',
                'country_code' => 'TO',
            ],

            [
                'id' => '191',
                'country_name' => 'Trinidad and Tobago',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'trinidad-and-tobago',
                'country_code' => 'TT',
            ],

            [
                'id' => '192',
                'country_name' => 'Tunisia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'tunisia',
                'country_code' => 'TN',
            ],

            [
                'id' => '193',
                'country_name' => 'Turkey',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'turkey',
                'country_code' => 'TR',
            ],

            [
                'id' => '194',
                'country_name' => 'Turkmenistan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'turkmenistan',
                'country_code' => 'TM',
            ],

            [
                'id' => '195',
                'country_name' => 'Tuvalu',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'tuvalu',
                'country_code' => 'TV',
            ],

            [
                'id' => '196',
                'country_name' => 'Uganda',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'uganda',
                'country_code' => 'UG',
            ],

            [
                'id' => '197',
                'country_name' => 'Ukraine',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'ukraine',
                'country_code' => 'UA',
            ],

            [
                'id' => '198',
                'country_name' => 'United States of America',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'united-states-of-america',
                'country_code' => 'US',
            ],

            [
                'id' => '199',
                'country_name' => 'United Arab Emirates',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'united-arab-emirates',
                'country_code' => 'AE',
            ],

            [
                'id' => '200',
                'country_name' => 'United Kingdom',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'united-kingdom',
                'country_code' => 'GB',
            ],

            [
                'id' => '201',
                'country_name' => 'Uruguay',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'uruguay',
                'country_code' => 'UY',
            ],

            [
                'id' => '202',
                'country_name' => 'Uzbekistan',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'uzbekistan',
                'country_code' => 'UZ',
            ],

            [
                'id' => '203',
                'country_name' => 'Vanuatu',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'vanuatu',
                'country_code' => 'VU',
            ],

            [
                'id' => '204',
                'country_name' => 'Venezuela',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'venezuela',
                'country_code' => 'VE',
            ],

            [
                'id' => '205',
                'country_name' => 'Vietnam',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'vietnam',
                'country_code' => 'VN',
            ],

            [
                'id' => '206',
                'country_name' => 'Yemen',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'yemen',
                'country_code' => 'YE',
            ],

            [
                'id' => '207',
                'country_name' => 'Zambia',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'zambia',
                'country_code' => 'ZM',
            ],

            [
                'id' => '208',
                'country_name' => 'Zimbabwe',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'slug' => 'zimbabwe',
                'country_code' => 'ZW',
            ]
        ]);
    }
}
