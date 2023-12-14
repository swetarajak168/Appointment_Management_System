<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $municipalities = [
            [
                'name' =>  'Kathmandu',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Pokhara',
                'district_name' =>  'Kaski',
            ],
            [
                'name' =>  'Lalitpur',
                'district_name' =>  'Lalitpur',
            ],
            [
                'name' =>  'Bharatpur',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Biratnagar',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Birganj',
                'district_name' =>  'Parsa',
            ],
            [
                'name' =>  'Ghorahi',
                'district_name' =>  'Dang',
            ],
            [
                'name' =>  'Hetauda',
                'district_name' =>  'Makawanpur',
            ],
            [
                'name' =>  'Dhangadhi',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Tulsipur',
                'district_name' =>  'Dang',
            ],
            [
                'name' =>  'Itahari',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Nepalgunj',
                'district_name' =>  'Banke',
            ],
            [
                'name' =>  'Butwal',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Dharan',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Kalaiya',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Jitpur Simara',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Birtamod',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Damak',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Budhanilkantha',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Gokarneshwar',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Bhimdatta',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Birendranagar',
                'district_name' =>  'Surkhet',
            ],
            [
                'name' =>  'Tilottama',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Tokha',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Tikapur',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Lahan',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Triyuga',
                'district_name' =>  'Udayapur',
            ],
            [
                'name' =>  'Chandragiri',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Madhyapur Thimi',
                'district_name' =>  'Bhaktapur',
            ],
            [
                'name' =>  'Siraha',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Bhaktapur',
                'district_name' =>  'Bhaktapur',
            ],
            [
                'name' =>  'Tarakeshwar',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Sundar Haraincha',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Suryabinayak',
                'district_name' =>  'Bhaktapur',
            ],
            [
                'name' =>  'Godawari',
                'district_name' =>  'Lalitpur',
            ],
            [
                'name' =>  'Barahachhetra',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Kapilvastu',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Lamki Chuha',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Ghodaghodi',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Banganga',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Lumbini Sanskritik',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Chandrapur',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Kohalpur',
                'district_name' =>  'Banke',
            ],
            [
                'name' =>  'Vyas',
                'district_name' =>  'tanahu',
            ],
            [
                'name' =>  'Ratnanagar',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Barahathwa',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Rajbiraj',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Barbardiya',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Shivaraj',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Gulariya',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Gaushala',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Bardibas',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Belbari',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Kirtipur',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Bhadrapur',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Nagarjun',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Dudhauli',
                'district_name' =>  'Sindhuli',
            ],
            [
                'name' =>  'Kamalamai',
                'district_name' =>  'Sindhuli',
            ],
            [
                'name' =>  'Buddhabhumi',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Shivasatakshi',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Inaruwa',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Siddharthanagar',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Pathari-Shanischare',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Kawasoti',
                'district_name' =>  'Nawalpur',
            ],
            [
                'name' =>  'Krishnanagar',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Mahalaxmi',
                'district_name' =>  'Lalitpur',
            ],
            [
                'name' =>  'Kageshwari-Manohara',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Arjundhara',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Ishwarpur',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Rajapur',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Ramgram',
                'district_name' =>  'Parasi',
            ],
            [
                'name' =>  'Lalbandi',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Gaindakot',
                'district_name' =>  'Nawalpur',
            ],
            [
                'name' =>  'Jaleshwar',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Nilkantha',
                'district_name' =>  'Dhading',
            ],
            [
                'name' =>  'Baglung',
                'district_name' =>  'Baglung',
            ],
            [
                'name' =>  'Rapti',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Suryodaya',
                'district_name' =>  'Ilam',
            ],
            [
                'name' =>  'Krishnapur',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Duhabi',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Katari',
                'district_name' =>  'Udayapur',
            ],
            [
                'name' =>  'Khairhani',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Bansgadhi',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Sainamaina',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Banepa',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Changunarayan',
                'district_name' =>  'Bhaktapur',
            ],
            [
                'name' =>  'Sunwal',
                'district_name' =>  'Parasi',
            ],
            [
                'name' =>  'Bardghat',
                'district_name' =>  'Parasi',
            ],
            [
                'name' =>  'Ratuwamai',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Gauriganga',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Maharajganj',
                'district_name' =>  'Kapilvastu',
            ],
            [
                'name' =>  'Urlabari',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Mahagadhimai',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Bidur',
                'district_name' =>  'Nuwakot',
            ],
            [
                'name' =>  'Madhyabindu',
                'district_name' =>  'Nawalpur',
            ],
            [
                'name' =>  'Punarbas',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Belauri',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Devdaha',
                'district_name' =>  'Rupandehi',
            ],
            [
                'name' =>  'Gauradaha',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Rangeli',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Bhajani',
                'district_name' =>  'Kailali',
            ],
            [
                'name' =>  'Ramdhuni',
                'district_name' =>  'Sunsari',
            ],
            [
                'name' =>  'Waling',
                'district_name' =>  'Syangja',
            ],
            [
                'name' =>  'Golbazar',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Sunawarshi',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Garuda',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Tansen',
                'district_name' =>  'Palpa',
            ],
            [
                'name' =>  'Mirchaiya',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Simraungadh',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Manara Shiswa',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Bedkot',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Kalyanpur',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Gorkha',
                'district_name' =>  'Gorkha',
            ],
            [
                'name' =>  'Phidim',
                'district_name' =>  'Panchthar',
            ],
            [
                'name' =>  'Chaudandigadhi',
                'district_name' =>  'Udayapur',
            ],
            [
                'name' =>  'Ilam',
                'district_name' =>  'Ilam',
            ],
            [
                'name' =>  'Shuklagandaki',
                'district_name' =>  'tanahu',
            ],
            [
                'name' =>  'Godaita',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Lamahi',
                'district_name' =>  'Dang',
            ],
            [
                'name' =>  'Dhangadimai',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Rupakot Majhuwagadhi',
                'district_name' =>  'Khotang',
            ],
            [
                'name' =>  'Shuklaphanta',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Bhangaha',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Paunauti',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Gujara',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Malangwa',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Chautara Sangachokgadhi',
                'district_name' =>  'Sindhupalchok',
            ],
            [
                'name' =>  'Madhuwan',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Sabaila',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Bhanu',
                'district_name' =>  'tanahu',
            ],
            [
                'name' =>  'Hanumannagar Kankalini',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Dhanushadham',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Manthali',
                'district_name' =>  'Ramechhap',
            ],
            [
                'name' =>  'Khadak',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Melamchi',
                'district_name' =>  'Sindhupalchok',
            ],
            [
                'name' =>  'Balara',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Mithila Bihari',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Putalibazar',
                'district_name' =>  'Syangja',
            ],
            [
                'name' =>  'Dakneshwari',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Thakurbaba',
                'district_name' =>  'Bardiya',
            ],
            [
                'name' =>  'Surunga',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Hariwan',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Gurbhakot',
                'district_name' =>  'Surkhet',
            ],
            [
                'name' =>  'Sitganga',
                'district_name' =>  'Arghakhanchi',
            ],
            [
                'name' =>  'Bodebarsain',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Kolhabi',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Shahidnagar',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Brindaban',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Devchuli',
                'district_name' =>  'Nawalpur',
            ],
            [
                'name' =>  'Chhireshwarnath',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Belaka',
                'district_name' =>  'Udayapur',
            ],
            [
                'name' =>  'Balawa',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Kabilasi',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Kalika',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Thaha',
                'district_name' =>  'Makawanpur',
            ],
            [
                'name' =>  'Dullu',
                'district_name' =>  'Dailekh',
            ],
            [
                'name' =>  'Ishnath',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Bheriganga',
                'district_name' =>  'Surkhet',
            ],
            [
                'name' =>  'Sandhikharka',
                'district_name' =>  'Arghakhanchi',
            ],
            [
                'name' =>  'Rajpur',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Gadhimai',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Bagmati',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Kankai',
                'district_name' =>  'Jhapa',
            ],
            [
                'name' =>  'Belkotgadhi',
                'district_name' =>  'Nuwakot',
            ],
            [
                'name' =>  'Bahudarmai',
                'district_name' =>  'Parsa',
            ],
            [
                'name' =>  'Kushma',
                'district_name' =>  'Parbat',
            ],
            [
                'name' =>  'Loharpatti',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Besisahar',
                'district_name' =>  'Lamjung',
            ],
            [
                'name' =>  'Mahakali Kanchanpur',
                'district_name' =>  'Kanchanpur',
            ],
            [
                'name' =>  'Purchaudi',
                'district_name' =>  'Baitadi',
            ],
            [
                'name' =>  'Hansapur',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Kamala',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Pyuthan',
                'district_name' =>  'Pyuthan',
            ],
            [
                'name' =>  'Katahariya',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Palungtar',
                'district_name' =>  'Gorkha',
            ],
            [
                'name' =>  'Parsagadhi',
                'district_name' =>  'Parsa',
            ],
            [
                'name' =>  'Shambhunath',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Panchkhal',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Madi',
                'district_name' =>  'Chitwan',
            ],
            [
                'name' =>  'Sukhipur',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Paroha',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Haripur',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Ganeshman Charanath',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Galyang',
                'district_name' =>  'Syangja',
            ],
            [
                'name' =>  'Dhankuta',
                'district_name' =>  'Dhankuta',
            ],
            [
                'name' =>  'Phatuwa Bijayapur',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Baudhimai',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Bangad Kupinde',
                'district_name' =>  'Salyan',
            ],
            [
                'name' =>  'Haripurwa',
                'district_name' =>  'Sarlahi',
            ],
            [
                'name' =>  'Rampur',
                'district_name' =>  'Palpa',
            ],
            [
                'name' =>  'Chhedagad',
                'district_name' =>  'Jajarkot',
            ],
            [
                'name' =>  'Kanchanrup',
                'district_name' =>  'Saptari',
            ],
            [
                'name' =>  'Parshuram',
                'district_name' =>  'Dadeldhura',
            ],
            [
                'name' =>  'Nagarain',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Dasharathchand',
                'district_name' =>  'Baitadi',
            ],
            [
                'name' =>  'Nijgadh',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Madhav Narayan',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Gaur',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Pacharauta',
                'district_name' =>  'Bara',
            ],
            [
                'name' =>  'Bagchaur',
                'district_name' =>  'Salyan',
            ],
            [
                'name' =>  'Sanphebagar',
                'district_name' =>  'Achham',
            ],
            [
                'name' =>  'Shaarda',
                'district_name' =>  'Salyan',
            ],
            [
                'name' =>  'Aathabiskot',
                'district_name' =>  'Western Rukum',
            ],
            [
                'name' =>  'Bheri',
                'district_name' =>  'Jajarkot',
            ],
            [
                'name' =>  'Beni',
                'district_name' =>  'Myagdi',
            ],
            [
                'name' =>  'Bungal',
                'district_name' =>  'Bajhang',
            ],
            [
                'name' =>  'Galkot',
                'district_name' =>  'Baglung',
            ],
            [
                'name' =>  'Dipayal Silgadhi',
                'district_name' =>  'Doti',
            ],
            [
                'name' =>  'Deumai',
                'district_name' =>  'Ilam',
            ],
            [
                'name' =>  'Pokhariya',
                'district_name' =>  'Parsa',
            ],
            [
                'name' =>  'Musikot',
                'district_name' =>  'Gulmi',
            ],
            [
                'name' =>  'Rolpa',
                'district_name' =>  'Rolpa',
            ],
            [
                'name' =>  'Mandandeupur',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Bhumikasthan',
                'district_name' =>  'Arghakhanchi',
            ],
            [
                'name' =>  'Mai',
                'district_name' =>  'Ilam',
            ],
            [
                'name' =>  'Resunga',
                'district_name' =>  'Gulmi',
            ],
            [
                'name' =>  'Mangalsen',
                'district_name' =>  'Achham',
            ],
            [
                'name' =>  'Bideha',
                'district_name' =>  'Dhanusha',
            ],
            [
                'name' =>  'Panchapuri',
                'district_name' =>  'Surkhet',
            ],
            [
                'name' =>  'Dhulikhel',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Dewahi Gonahi',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Letang Bhogateni',
                'district_name' =>  'Morang',
            ],
            [
                'name' =>  'Shikhar',
                'district_name' =>  'Doti',
            ],
            [
                'name' =>  'Aurahi',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Shadanand',
                'district_name' =>  'Bhojpur',
            ],
            [
                'name' =>  'Bhimeshwar',
                'district_name' =>  'Dolakha',
            ],
            [
                'name' =>  'Jaimini',
                'district_name' =>  'Baglung',
            ],
            [
                'name' =>  'Bhimad',
                'district_name' =>  'tanahu',
            ],
            [
                'name' =>  'Rajdevi',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Khandbari',
                'district_name' =>  'Sankhuwasabha',
            ],
            [
                'name' =>  'Dhunibeshi',
                'district_name' =>  'Dhading',
            ],
            [
                'name' =>  'Matihani',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Karjanha',
                'district_name' =>  'Siraha',
            ],
            [
                'name' =>  'Swargadwari',
                'district_name' =>  'Pyuthan',
            ],
            [
                'name' =>  'Patan',
                'district_name' =>  'Baitadi',
            ],
            [
                'name' =>  'Lekbeshi',
                'district_name' =>  'Surkhet',
            ],
            [
                'name' =>  'Ramgopalpur',
                'district_name' =>  'Mahottari',
            ],
            [
                'name' =>  'Halesi Tuwachung',
                'district_name' =>  'Khotang',
            ],
            [
                'name' =>  'Namobuddha',
                'district_name' =>  'Kavrepalanchok',
            ],
            [
                'name' =>  'Aathabis',
                'district_name' =>  'Dailekh',
            ],
            [
                'name' =>  'Ramechhap',
                'district_name' =>  'Ramechhap',
            ],
            [
                'name' =>  'Siddhicharan',
                'district_name' =>  'Okhaldhunga',
            ],
            [
                'name' =>  'Panchadewal Binayak',
                'district_name' =>  'Achham',
            ],
            [
                'name' =>  'Chaurjahari',
                'district_name' =>  'Western Rukum',
            ],
            [
                'name' =>  'Chainpur',
                'district_name' =>  'Sankhuwasabha',
            ],
            [
                'name' =>  'Bhojpur',
                'district_name' =>  'Bhojpur',
            ],
            [
                'name' =>  'Narayan',
                'district_name' =>  'Dailekh',
            ],
            [
                'name' =>  'Sundarbazar',
                'district_name' =>  'Lamjung',
            ],
            [
                'name' =>  'Barhabise',
                'district_name' =>  'Sindhupalchok',
            ],
            [
                'name' =>  'Maulapur',
                'district_name' =>  'Rautahat',
            ],
            [
                'name' =>  'Taplejung(Phungling)',
                'district_name' =>  'Taplejung',
            ],
            [
                'name' =>  'Dhorpatan',
                'district_name' =>  'Baglung',
            ],
            [
                'name' =>  'Chamunda Bindrasaini',
                'district_name' =>  'Dailekh',
            ],
            [
                'name' =>  'Chapakot',
                'district_name' =>  'Syangja',
            ],
            [
                'name' =>  'Nalgad',
                'district_name' =>  'Jajarkot',
            ],
            [
                'name' =>  'Bhirkot',
                'district_name' =>  'Syangja',
            ],
            [
                'name' =>  'Shankharapur',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Phalewas',
                'district_name' =>  'Parbat',
            ],
            [
                'name' =>  'Dakshinkali',
                'district_name' =>  'Kathmandu',
            ],
            [
                'name' =>  'Kamalbazar',
                'district_name' =>  'Achham',
            ],
            [
                'name' =>  'Madhya Nepal',
                'district_name' =>  'Lamjung',
            ],
            [
                'name' =>  'Melauli',
                'district_name' =>  'Baitadi',
            ],
            [
                'name' =>  'Jaya Prithvi',
                'district_name' =>  'Bajhang',
            ],
            [
                'name' =>  'Pakhribas',
                'district_name' =>  'Dhankuta',
            ],
            [
                'name' =>  'Budhiganga',
                'district_name' =>  'Bajura',
            ],
            [
                'name' =>  'Amargadhi',
                'district_name' =>  'Dadeldhura',
            ],
            [
                'name' =>  'Mahakali',
                'district_name' =>  'Darchula',
            ],
            [
                'name' =>  'Solu Dudhkunda',
                'district_name' =>  'Solukhumbu',
            ],
            [
                'name' =>  'Khandachakra',
                'district_name' =>  'Kalikot',
            ],
            [
                'name' =>  'Chhayanath Rara',
                'district_name' =>  'Mugu',
            ],
            [
                'name' =>  'Myanglung',
                'district_name' =>  'Terhathum',
            ],
            [
                'name' =>  'Chandannath',
                'district_name' =>  'Jumla',
            ],
            [
                'name' =>  'Rainas',
                'district_name' =>  'Lamjung',
            ],
            [
                'name' =>  'Dharmadevi',
                'district_name' =>  'Sankhuwasabha',
            ],
            [
                'name' =>  'Panchkhapan',
                'district_name' =>  'Sankhuwasabha',
            ],
            [
                'name' =>  'Laligurans',
                'district_name' =>  'Terhathum',
            ],
            [
                'name' =>  'Raskot',
                'district_name' =>  'Kalikot',
            ],
            [
                'name' =>  'Tilagupha',
                'district_name' =>  'Kalikot',
            ],
            [
                'name' =>  'Jiri',
                'district_name' =>  'Dolakha',
            ],
            [
                'name' =>  'Madi Sankhuwasabha',
                'district_name' =>  'Sankhuwasabha',
            ],
            [
                'name' =>  'Tripura Sundari',
                'district_name' =>  'Dolpa',
            ],
            [
                'name' =>  'Thuli Bheri',
                'district_name' =>  'Dolpa',
            ],
        ];
        Municipality::insert($municipalities);
    }
}
