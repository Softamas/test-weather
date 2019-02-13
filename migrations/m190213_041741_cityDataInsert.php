<?php

use yii\db\Schema;
use yii\db\Migration;

class m190213_041741_cityDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('city',
                           ["name", "latitude", "longitude"],
                            [
    [
        'name' => 'Абакан',
        'latitude' => '53.720976',
        'longitude' => '91.442423',
    ],
    [
        'name' => 'Архангельск',
        'latitude' => '64.539304',
        'longitude' => '40.518735',
    ],
    [
        'name' => 'Астана',
        'latitude' => '71.430564',
        'longitude' => '51.128422',
    ],
    [
        'name' => 'Астрахань',
        'latitude' => '46.347869',
        'longitude' => '48.033574',
    ],
    [
        'name' => 'Барнаул',
        'latitude' => '53.356132',
        'longitude' => '83.749619',
    ],
    [
        'name' => 'Белгород',
        'latitude' => '50.597467',
        'longitude' => '36.588849',
    ],
    [
        'name' => 'Бийск',
        'latitude' => '52.541444',
        'longitude' => '85.219686',
    ],
    [
        'name' => 'Бишкек',
        'latitude' => '42.871027',
        'longitude' => '74.594520',
    ],
    [
        'name' => 'Благовещенск',
        'latitude' => '50.290658',
        'longitude' => '127.527173',
    ],
    [
        'name' => 'Братск',
        'latitude' => '56.151382',
        'longitude' => '101.634152',
    ],
    [
        'name' => 'Брянск',
        'latitude' => '53.243400',
        'longitude' => '34.364198',
    ],
    [
        'name' => 'Великий Новгород',
        'latitude' => '58.521475',
        'longitude' => '31.275475',
    ],
    [
        'name' => 'Владивосток',
        'latitude' => '43.134019',
        'longitude' => '131.928379',
    ],
    [
        'name' => 'Владикавказ',
        'latitude' => '43.024122',
        'longitude' => '44.690476',
    ],
    [
        'name' => 'Владимир',
        'latitude' => '56.129042',
        'longitude' => '40.407030',
    ],
    [
        'name' => 'Волгоград',
        'latitude' => '48.707103',
        'longitude' => '44.516939',
    ],
    [
        'name' => 'Вологда',
        'latitude' => '59.220492',
        'longitude' => '39.891568',
    ],
    [
        'name' => 'Воронеж',
        'latitude' => '51.661535',
        'longitude' => '39.200287',
    ],
    [
        'name' => 'Грозный',
        'latitude' => '43.317992',
        'longitude' => '45.698197',
    ],
    [
        'name' => 'Донецк',
        'latitude' => '48.015877',
        'longitude' => '37.802850',
    ],
    [
        'name' => 'Екатеринбург',
        'latitude' => '56.838002',
        'longitude' => '60.597295',
    ],
    [
        'name' => 'Иваново',
        'latitude' => '57.000348',
        'longitude' => '40.973921',
    ],
    [
        'name' => 'Ижевск',
        'latitude' => '56.852775',
        'longitude' => '53.211463',
    ],
    [
        'name' => 'Иркутск',
        'latitude' => '52.286387',
        'longitude' => '104.280660',
    ],
    [
        'name' => 'Казань',
        'latitude' => '55.795793',
        'longitude' => '49.106585',
    ],
    [
        'name' => 'Калининград',
        'latitude' => '55.916229',
        'longitude' => '37.854467',
    ],
    [
        'name' => 'Калуга',
        'latitude' => '54.507014',
        'longitude' => '36.252277',
    ],
    [
        'name' => 'Каменск-Уральский',
        'latitude' => '56.414897',
        'longitude' => '61.918905',
    ],
    [
        'name' => 'Кемерово',
        'latitude' => '55.359594',
        'longitude' => '86.087781',
    ],
    [
        'name' => 'Киев',
        'latitude' => '50.402395',
        'longitude' => '30.532690',
    ],
    [
        'name' => 'Киров',
        'latitude' => '54.079033',
        'longitude' => '34.323163',
    ],
    [
        'name' => 'Комсомольск-на-Амуре',
        'latitude' => '50.549860',
        'longitude' => '137.007867',
    ],
    [
        'name' => 'Королев',
        'latitude' => '55.916229',
        'longitude' => '37.854467',
    ],
    [
        'name' => 'Кострома',
        'latitude' => '57.767683',
        'longitude' => '40.926418',
    ],
    [
        'name' => 'Краснодар',
        'latitude' => '45.023877',
        'longitude' => '38.970157',
    ],
    [
        'name' => 'Красноярск',
        'latitude' => '56.008691',
        'longitude' => '92.870529',
    ],
    [
        'name' => 'Курск',
        'latitude' => '51.730361',
        'longitude' => '36.192647',
    ],
    [
        'name' => 'Липецк',
        'latitude' => '52.610220',
        'longitude' => '39.594719',
    ],
    [
        'name' => 'Магнитогорск',
        'latitude' => '53.411677',
        'longitude' => '58.984415',
    ],
    [
        'name' => 'Махачкала',
        'latitude' => '42.984913',
        'longitude' => '47.504646',
    ],
    [
        'name' => 'Минск',
        'latitude' => '53.906077',
        'longitude' => '27.554914',
    ],
    [
        'name' => 'Москва',
        'latitude' => '55.755773',
        'longitude' => '37.617761',
    ],
    [
        'name' => 'Мурманск',
        'latitude' => '68.969562',
        'longitude' => '33.074540',
    ],
    [
        'name' => 'Набережные Челны',
        'latitude' => '55.743553',
        'longitude' => '52.395820',
    ],
    [
        'name' => 'Нижний Новгород',
        'latitude' => '56.323902',
        'longitude' => '44.002267',
    ],
    [
        'name' => 'Нижний Тагил',
        'latitude' => '57.910144',
        'longitude' => '59.981320',
    ],
    [
        'name' => 'Новокузнецк',
        'latitude' => '53.786502',
        'longitude' => '87.155205',
    ],
    [
        'name' => 'Новороссийск',
        'latitude' => '44.723489',
        'longitude' => '37.768660',
    ],
    [
        'name' => 'Новосибирск',
        'latitude' => '55.028739',
        'longitude' => '82.906927',
    ],
    [
        'name' => 'Норильск',
        'latitude' => '69.349039',
        'longitude' => '88.201014',
    ],
    [
        'name' => 'Омск',
        'latitude' => '54.989342',
        'longitude' => '73.368212',
    ],
    [
        'name' => 'Орел',
        'latitude' => '52.970306',
        'longitude' => '36.063514',
    ],
    [
        'name' => 'Оренбург',
        'latitude' => '51.768060',
        'longitude' => '55.097449',
    ],
    [
        'name' => 'Пенза',
        'latitude' => '53.194546',
        'longitude' => '45.019529',
    ],
    [
        'name' => 'Первоуральск',
        'latitude' => '56.908099',
        'longitude' => '59.942935',
    ],
    [
        'name' => 'Пермь',
        'latitude' => '58.004785',
        'longitude' => '56.237654',
    ],
    [
        'name' => 'Прокопьевск',
        'latitude' => '53.895355',
        'longitude' => '86.744657',
    ],
    [
        'name' => 'Псков',
        'latitude' => '57.819365',
        'longitude' => '28.331786',
    ],
    [
        'name' => 'Ростов-на-Дону',
        'latitude' => '47.227151',
        'longitude' => '39.744972',
    ],
    [
        'name' => 'Рыбинск',
        'latitude' => '58.138530',
        'longitude' => '38.573586',
    ],
    [
        'name' => 'Рязань',
        'latitude' => '54.619886',
        'longitude' => '39.744954',
    ],
    [
        'name' => 'Самара',
        'latitude' => '53.195533',
        'longitude' => '50.101801',
    ],
    [
        'name' => 'Санкт-Петербург',
        'latitude' => '59.938806',
        'longitude' => '30.314278',
    ],
    [
        'name' => 'Саратов',
        'latitude' => '51.531528',
        'longitude' => '46.035820',
    ],
    [
        'name' => 'Севастополь',
        'latitude' => '44.616649',
        'longitude' => '33.525360',
    ],
    [
        'name' => 'Северодвинск',
        'latitude' => '64.558186',
        'longitude' => '39.829620',
    ],
    [
        'name' => 'Симферополь',
        'latitude' => '44.952116',
        'longitude' => '34.102411',
    ],
    [
        'name' => 'Сочи',
        'latitude' => '43.581509',
        'longitude' => '39.722882',
    ],
    [
        'name' => 'Ставрополь',
        'latitude' => '45.044502',
        'longitude' => '41.969065',
    ],
    [
        'name' => 'Сухум',
        'latitude' => '43.015679',
        'longitude' => '41.025071',
    ],
    [
        'name' => 'Тамбов',
        'latitude' => '52.721246',
        'longitude' => '41.452238',
    ],
    [
        'name' => 'Ташкент',
        'latitude' => '41.314321',
        'longitude' => '69.267295',
    ],
    [
        'name' => 'Тверь',
        'latitude' => '56.859611',
        'longitude' => '35.911896',
    ],
    [
        'name' => 'Тольятти',
        'latitude' => '53.511311',
        'longitude' => '49.418084',
    ],
    [
        'name' => 'Томск',
        'latitude' => '56.495116',
        'longitude' => '84.972128',
    ],
    [
        'name' => 'Тула',
        'latitude' => '54.193033',
        'longitude' => '37.617752',
    ],
    [
        'name' => 'Тюмень',
        'latitude' => '57.153033',
        'longitude' => '65.534328',
    ],
    [
        'name' => 'Улан-Удэ',
        'latitude' => '51.833507',
        'longitude' => '107.584125',
    ],
    [
        'name' => 'Ульяновск',
        'latitude' => '54.317002',
        'longitude' => '48.402243',
    ],
    [
        'name' => 'Уфа',
        'latitude' => '54.734768',
        'longitude' => '55.957838',
    ],
    [
        'name' => 'Хабаровск',
        'latitude' => '48.472584',
        'longitude' => '135.057732',
    ],
    [
        'name' => 'Харьков',
        'latitude' => '49.993499',
        'longitude' => '36.230376',
    ],
    [
        'name' => 'Чебоксары',
        'latitude' => '56.143900',
        'longitude' => '47.248887',
    ],
    [
        'name' => 'Челябинск',
        'latitude' => '55.159774',
        'longitude' => '61.402455',
    ],
    [
        'name' => 'Шахты',
        'latitude' => '47.708485',
        'longitude' => '40.215958',
    ],
    [
        'name' => 'Энгельс',
        'latitude' => '51.498891',
        'longitude' => '46.125121',
    ],
    [
        'name' => 'Южно-Сахалинск',
        'latitude' => '46.959118',
        'longitude' => '142.738068',
    ],
    [
        'name' => 'Якутск',
        'latitude' => '62.027833',
        'longitude' => '129.704151',
    ],
    [
        'name' => 'Ярославль',
        'latitude' => '57.626569',
        'longitude' => '39.893822',
    ],
]
        );
    }

    public function safeDown()
    {
        $this->truncateTable('city');
    }
}
