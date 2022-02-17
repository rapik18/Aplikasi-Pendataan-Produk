<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class countries_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Абхазия'],
            ['name' => 'Австралия'],
            ['name' => 'Австрия'],
            ['name' => 'Азербайджан'],
            ['name' => 'Албания'],
            ['name' => 'Алжир'],
            ['name' => 'Американское Самоа	'],
            ['name' => 'Ангилья'],
            ['name' => 'Ангола'],
            ['name' => 'Андорра'],
            ['name' => 'Антарктида'],
            ['name' => 'Антигуа и Барбуда'],
            ['name' => 'Аргентина'],
            ['name' => 'Армения'],
            ['name' => 'Афганистан'],
            ['name' => 'Багамы'],
            ['name' => 'Бангладеш'],
            ['name' => 'Барбадос'],
            ['name' => 'Бахрейн'],
            ['name' => 'Беларусь'],
            ['name' => 'Белиз'],
            ['name' => 'Бельгия'],
            ['name' => 'Бенин'],
            ['name' => 'Бермуды'],
            ['name' => 'Болгария'],
            ['name' => 'Боливия, Многонациональное Государство'],
            ['name' => 'Бонайре, Саба и Синт-Эстатиус'],
            ['name' => 'Босния и Герцеговина'],
            ['name' => 'Ботсвана'],
            ['name' => 'Бразилия'],
            ['name' => 'Британская территория в Индийском океане'],
            ['name' => 'Бруней-Даруссалам'],
            ['name' => 'Буркина-Фасо'],
            ['name' => 'Бурунди'],
            ['name' => 'Бутан'],
            ['name' => 'Вануату'],
            ['name' => 'Венгрия'],
            ['name' => 'Венесуэла Боливарианская Республика'],
            ['name' => 'Виргинские острова, Британские'],
            ['name' => 'Виргинские острова, США'],
            ['name' => 'Габон'],
            ['name' => 'Гаити'],
            ['name' => 'Гайана'],
            ['name' => 'Гамбия'],
            ['name' => 'Гана'],
            ['name' => 'Гваделупа'],
            ['name' => 'Гватемала'],
            ['name' => 'Гвинея'],
            ['name' => 'Гвинея-Бисау'],
            ['name' => 'Германия'],
            ['name' => 'Гернси'],
            ['name' => 'Гибралтар'],
            ['name' => 'Гондурас'],
            ['name' => 'Гонконг'],
            ['name' => 'Гренада'],
            ['name' => 'Греция'],
            ['name' => 'Грузия'],
            ['name' => 'Гуам'],
            ['name' => 'Дания'],
            ['name' => 'Джерси'],
            ['name' => 'Джибути'],
            ['name' => 'Доминика'],
            ['name' => 'Доминиканская Республика'],
            ['name' => 'Египет'],
            ['name' => 'Замбия'],
            ['name' => 'Западная Сахара'],
            ['name' => 'Зимбабве'],
            ['name' => 'Израиль'],
            ['name' => 'Индия'],
            ['name' => 'Индонезия'],
            ['name' => 'Иордания'],
            ['name' => 'Иран, Исламская Республика'],
            ['name' => 'Ирландия'],
            ['name' => 'Исландия'],
            ['name' => 'Испания'],
            ['name' => 'Италия'],
            ['name' => 'Йемен'],
            ['name' => 'Кабо-Верде'],
            ['name' => 'Казахстан'],
            ['name' => 'Камбоджа'],
            ['name' => 'Камерун'],
            ['name' => 'Канада'],
            ['name' => 'Катар'],
            ['name' => 'Кения'],
            ['name' => 'Кипр'],
            ['name' => 'Киргизия'],
            ['name' => 'Кирибати'],
            ['name' => 'Китай'],
            ['name' => 'Кокосовые (Килинг) острова'],
            ['name' => 'Колумбия'],
            ['name' => 'Коморы'],
            ['name' => 'Конго, Демократическая Республика'],
            ['name' => 'Корея, Народно-Демократическая Республика'],
            ['name' => 'Корея, Республика'],
            ['name' => 'Коста-Рика'],
            ['name' => 'Куба'],
            ['name' => 'Кувейт'],
            ['name' => 'Кюрасао'],
            ['name' => 'Лаос'],
            ['name' => 'Латвия'],
            ['name' => 'Лесото'],
            ['name' => 'Ливан'],
            ['name' => 'Ливийская Арабская Джамахирия'],
            ['name' => 'Либерия'],
            ['name' => 'Лихтенштейн'],
            ['name' => 'Литва'],
            ['name' => 'Люксембург'],
            ['name' => 'Люксембург'],
            ['name' => 'Мавритания'],
            ['name' => 'Мадагаскар'],
            ['name' => 'Майотта'],
            ['name' => 'Макао'],
            ['name' => 'Малави'],
            ['name' => 'Малайзия'],
            ['name' => 'Мали'],
            ['name' => 'Малые Тихоокеанские отдаленные острова Соединенных Штатов'],
            ['name' => 'Мальдивы'],
            ['name' => 'Мальта'],
            ['name' => 'Марокко'],
            ['name' => 'Мартиника'],
            ['name' => 'Маршалловы острова'],
            ['name' => 'Мексика'],
            ['name' => 'Микронезия, Федеративные Штаты'],
            ['name' => 'Мозамбик'],
            ['name' => 'Молдова, Республика'],
            ['name' => 'Монако'],
            ['name' => 'Монголия'],
            ['name' => 'Монтсеррат'],
            ['name' => 'Мьянма'],
            ['name' => 'Намибия'],
            ['name' => 'Науру'],
            ['name' => 'Непал'],
            ['name' => 'Нигер'],
            ['name' => 'Нигерия'],
            ['name' => 'Нидерланды'],
            ['name' => 'Никарагуа'],
            ['name' => 'Ниуэ'],
            ['name' => 'Новая Зеландия'],
            ['name' => 'Новая Каледония	'],
            ['name' => 'Норвегия'],
            ['name' => 'Объединенные Арабские Эмираты'],
            ['name' => 'Оман'],
            ['name' => 'Остров Буве'],
            ['name' => 'Остров Мэн'],
            ['name' => 'Остров Норфолк'],
            ['name' => 'Остров Рождества'],
            ['name' => 'Остров Херд и острова Макдональд'],
            ['name' => 'Острова Кайман'],
            ['name' => 'Острова Кука'],
            ['name' => 'Острова Теркс и Кайкос'],
            ['name' => 'Пакистан'],
            ['name' => 'Палау'],
            ['name' => 'Палестинская территория, оккупированная'],
            ['name' => 'Панама'],
            ['name' => 'Папуа-Новая Гвинея'],
            ['name' => 'Парагвай'],
            ['name' => 'Перу'],
            ['name' => 'Питкерн'],
            ['name' => 'Польша'],
            ['name' => 'Португалия'],
            ['name' => 'Пуэрто-Рико'],
            ['name' => 'Республика Македония'],
            ['name' => 'Реюньон'],
            ['name' => 'Россия'],
            ['name' => 'Руанда'],
            ['name' => 'Румыния'],
            ['name' => 'Самоа'],
            ['name' => 'Сан-Марино'],
            ['name' => 'Сан-Томе и Принсипи'],
            ['name' => 'Саудовская Аравия'],
            ['name' => 'Святая Елена, Остров вознесения, Тристан-да-Кунья'],
            ['name' => 'Северные Марианские острова'],
            ['name' => 'Сен-Бартельми'],
            ['name' => 'Сен-Мартен'],
            ['name' => 'Сенегал'],
            ['name' => 'Сент-Винсент и Гренадины'],
            ['name' => 'Сент-Китс и Невис'],
            ['name' => 'Сент-Люсия'],
            ['name' => 'Сент-Пьер и Микелон'],
            ['name' => 'Сербия'],
            ['name' => 'Сейшелы'],
            ['name' => 'Сингапур'],
            ['name' => 'Синт-Мартен'],
            ['name' => 'Сирийская Арабская Республика'],
            ['name' => 'Соединенное Королевство'],
            ['name' => 'Соединенные Штаты'],
            ['name' => 'Соломоновы острова'],
            ['name' => 'Сомали'],
            ['name' => 'Судан'],
            ['name' => 'Сьерра-Леоне'],
            ['name' => 'Таджикистан'],
            ['name' => 'Таиланд'],
            ['name' => 'Тайвань (Китай)'],
            ['name' => 'Танзания'],
            ['name' => 'Тимор-Лесте'],
            ['name' => 'Того'],
            ['name' => 'Токелау'],
            ['name' => 'Тонга'],
            ['name' => 'Тринидад и Тобаго'],
            ['name' => 'Тувалу'],
            ['name' => 'Тунис'],
            ['name' => 'Турция'],
            ['name' => 'Уганда'],
            ['name' => 'Узбекистан'],
            ['name' => 'Украина'],
            ['name' => 'Уоллис и Футуна'],
            ['name' => 'Уругвай'],
            ['name' => 'Фарерские острова'],
            ['name' => 'Фиджи'],
            ['name' => 'Филиппины'],
            ['name' => 'Финляндия'],
            ['name' => 'Фолклендские острова (Мальвинские)'],
            ['name' => 'Франция'],
            ['name' => 'Французская Гвиана'],
            ['name' => 'Французская Полинезия'],
            ['name' => 'Французские Южные территории'],
            ['name' => 'Хорватия'],
            ['name' => 'Центрально-Африканская Республика'],
            ['name' => 'Чад'],
            ['name' => 'Черногория'],
            ['name' => 'Чешская Республика'],
            ['name' => 'Чили'],
            ['name' => 'Швейцария'],
            ['name' => 'Швеция'],
            ['name' => 'Шпицберген и Ян Майен'],
            ['name' => 'Шри-Ланка'],
            ['name' => 'Эквадор'],
            ['name' => 'Экваториальная Гвинея'],
            ['name' => 'Эландские острова'],
            ['name' => 'Эль-Сальвадор'],
            ['name' => 'Эритрея'],
            ['name' => 'Эсватини'],
            ['name' => 'Эстония'],
            ['name' => 'Южная Африка'],
            ['name' => 'Южная Джорджия и Южные Сандвичевы острова'],
            ['name' => 'Южная Осетия'],
            ['name' => 'Южный Судан'],
            ['name' => 'Ямайка'],
            ['name' => 'Япония'],
        ]);
        Artisan::call('storage:link');

    }
}
