<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 15,
                'image_name' => 'rooms/H4dIud2Ciarz183KyX3ZQTRxvUwJazDeCYPgAceQ.jpeg',
                'description' => 'Люкс 4',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:36:36',
            ),
            1 => 
            array (
                'id' => 16,
                'image_name' => 'rooms/qPbl8QKudoVt5kQTuWCeItuykcIvCRP61ev5bJaG.jpeg',
                'description' => 'Санузел в номере',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            2 => 
            array (
                'id' => 17,
                'image_name' => 'rooms/Wy2JtcC649IuLbWta6ua8ugQqK8K4rDznFegXGGS.jpeg',
                'description' => 'Санузел в номере',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            3 => 
            array (
                'id' => 18,
                'image_name' => 'rooms/Hg1HzZwXeZeV1C5I0xllCl0xuTmYYTJkMu5yuBm4.jpeg',
                'description' => 'Подьем на 2 этаж',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            4 => 
            array (
                'id' => 19,
                'image_name' => 'rooms/CieThcK4hiB9SDx6yR1xEGwkEVhWpqqdQH52qwqU.jpeg',
                'description' => 'Кухня общего пользования на этаже',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            5 => 
            array (
                'id' => 20,
                'image_name' => 'rooms/zq2ut1lR4Ev7YMHUZm1qD12q1TEmikS5peRCuSRY.jpeg',
                'description' => 'Кухня общего пользования на этаже',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            6 => 
            array (
                'id' => 21,
                'image_name' => 'rooms/rUJgpDv5YzEOZHiztsywktdxDGGKCYbOk3g5Q1Rj.jpeg',
                'description' => 'Люкс 3',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            7 => 
            array (
                'id' => 22,
                'image_name' => 'rooms/ExBgarCSQlwVJkmEUqn4Ta9sqOUH1sAsMxJmKnxr.jpeg',
                'description' => NULL,
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-01-18 22:19:09',
            ),
            8 => 
            array (
                'id' => 23,
                'image_name' => 'rooms/OInPxyiKrDTqbPMPJlPKqTF2eZrS94UFlCqRwMZ6.jpeg',
                'description' => 'Кухня общего пользования на этаже',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            9 => 
            array (
                'id' => 24,
                'image_name' => 'rooms/BuHlIwh5VbBKnjw2q5gy1JaKeCVzUdygrMRKpbgT.jpeg',
                'description' => 'Люкс 4',
                'room_id' => 2,
                'created_at' => '2019-01-18 22:19:09',
                'updated_at' => '2019-03-02 22:39:22',
            ),
            10 => 
            array (
                'id' => 25,
                'image_name' => 'rooms/FnU4Q8FfrDlKTXWsMByiw7nFjS8ByqKL5RDIMFn6.jpeg',
                'description' => 'Стандарт №1 трехместный',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            11 => 
            array (
                'id' => 26,
                'image_name' => 'rooms/ObqyCtrvaepMGMtegieYxJJxgOTFXNceTEKjPEjx.jpeg',
                'description' => 'Стандарт №1 трехместный',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            12 => 
            array (
                'id' => 27,
                'image_name' => 'rooms/0ZusGhwXvgZmuB3KWGrlx44WqPhVY2MgLyC36Axv.jpeg',
                'description' => 'Стандарт №5 четырехместный',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            13 => 
            array (
                'id' => 28,
                'image_name' => 'rooms/nAhYhNiI81Yr7dGEHp8vFxUquQnjHi9PMaHSzW5P.jpeg',
                'description' => 'Подьем на 4 этаж',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            14 => 
            array (
                'id' => 29,
                'image_name' => 'rooms/ISx14PGLqnpGa1u8RN2vnnhK8RUzVi5v1rQf3jeR.jpeg',
                'description' => 'Стандарт №5 четырехместный',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            15 => 
            array (
                'id' => 30,
                'image_name' => 'rooms/0NQDgrw7KullokIPh6S1HaQUbxbCt7QFgSMywOJU.jpeg',
                'description' => 'Стандарт №5 четырехместный',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            16 => 
            array (
                'id' => 31,
                'image_name' => 'rooms/b78gg7ib1GR8f7QHkLgScwdWgOlDTFwjwHFV6Clf.jpeg',
                'description' => 'Санузел общий на 3 номера на этаже',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            17 => 
            array (
                'id' => 32,
                'image_name' => 'rooms/rZ24mRIZeTnJkbIa5bEYVkz1h2QiUCxnfp8G4Nxm.jpeg',
                'description' => NULL,
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-01-18 22:14:54',
            ),
            18 => 
            array (
                'id' => 33,
                'image_name' => 'rooms/jchcheSoOZaFZpVndyYUWl96QouHUwSNx8TiWxRo.jpeg',
                'description' => 'Общая кухня на этаже',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            19 => 
            array (
                'id' => 34,
                'image_name' => 'rooms/CY0iK2K8PuG5v2ofjpjTXrno4Qpr2JvuYBqZf9Im.jpeg',
                'description' => 'Общая кухня на этаже',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            20 => 
            array (
                'id' => 35,
                'image_name' => 'rooms/QoxVVQuNo20qcwfmQmhupV84fE5Day4iJsczWJK5.jpeg',
                'description' => 'Общая кухня на этаже',
                'room_id' => 1,
                'created_at' => '2019-01-18 22:14:54',
                'updated_at' => '2019-03-02 22:44:20',
            ),
            21 => 
            array (
                'id' => 36,
                'image_name' => 'rooms/epHwPMQY7C21ezPlTHGTM9z5fRrhb369aFVDFbqx.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:07',
            ),
            22 => 
            array (
                'id' => 37,
                'image_name' => 'rooms/tGco4shkL26LeVIhS3OmZnpnOjsgpvmtrnMoX48C.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:07',
            ),
            23 => 
            array (
                'id' => 38,
                'image_name' => 'rooms/9TdLSmHGhxT7eHUE9XE9LtbtNOhbH4TMLTM4YB9R.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:07',
            ),
            24 => 
            array (
                'id' => 39,
                'image_name' => 'rooms/1jLiOMIZOxsUQ5Igd1yJzTfTGzNGBrRZmzoeXx2D.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:07',
            ),
            25 => 
            array (
                'id' => 40,
                'image_name' => 'rooms/k8jsAeVoVz82r1Dp7gND7fOeZGNDRLIklGXF8a9g.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:07',
            ),
            26 => 
            array (
                'id' => 41,
                'image_name' => 'rooms/TQwGLQOgFFQ32IqHhLzVqZAIjP2YlzyLv9PVDfeS.jpeg',
                'description' => 'Номер Люкс с балконом №2 четырехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:56',
            ),
            27 => 
            array (
                'id' => 42,
                'image_name' => 'rooms/QvCh9TSxlVkvrGaDFwaOv2xtr58PQRWajqoC9GVL.jpeg',
                'description' => 'Номер Люкс с балконом №2 четырехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:56',
            ),
            28 => 
            array (
                'id' => 43,
                'image_name' => 'rooms/RRuxZbzYbbH7AqnV5miIQXmqNI8mDzVd28DTk5Ca.jpeg',
                'description' => 'Номер Люкс с балконом №2 четырехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:56',
            ),
            29 => 
            array (
                'id' => 44,
                'image_name' => 'rooms/QmsZRPbdFhw7QGTvPjLxCob34zbBE9UadUWNu8ow.jpeg',
                'description' => 'Номер Люкс с балконом №2 четырехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:56',
            ),
            30 => 
            array (
                'id' => 45,
                'image_name' => 'rooms/Bhg1IwxssF3fgiBqRXmjJpm1g7i9R9SRJqdIVZex.jpeg',
                'description' => 'Номер Люкс с балконом №2 четырехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:49:56',
            ),
            31 => 
            array (
                'id' => 46,
                'image_name' => 'rooms/SFwv7dBaKKC3i7OdX9btJNvbWEbCxYDVjDaGqFDr.jpeg',
                'description' => 'Кухня на этаже на 2 номера',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-02 22:50:46',
            ),
            32 => 
            array (
                'id' => 47,
                'image_name' => 'rooms/MMbporb8zLtilUvxChRMMsY12c8BqFW6UlN19dEW.jpeg',
                'description' => NULL,
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-01-18 22:21:37',
            ),
            33 => 
            array (
                'id' => 48,
                'image_name' => 'rooms/r34IIDaRB3hd2FWFs3AQIK8hPgOLeI4BpQdXorfY.jpeg',
                'description' => NULL,
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-01-18 22:21:37',
            ),
            34 => 
            array (
                'id' => 52,
                'image_name' => 'rooms/lUv3wG57BTWwnsAMojJie7O1BZggTfUAYzCjoClv.jpeg',
                'description' => 'Вид из номера на море',
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-03-02 22:59:44',
            ),
            35 => 
            array (
                'id' => 54,
                'image_name' => 'rooms/sCtEAyIhvcr5wq3TVRDd0Fq1qzLtkKlJguZitn2A.jpeg',
                'description' => 'Вид из номера на море',
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-03-02 22:59:44',
            ),
            36 => 
            array (
                'id' => 55,
                'image_name' => 'rooms/Hbg2rcRiyr24Vwy6PvqDf5kmkqYazR40wkgWza3K.jpeg',
                'description' => NULL,
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-01-18 22:25:43',
            ),
            37 => 
            array (
                'id' => 56,
                'image_name' => 'rooms/3MKTUoKt91CaO0zYUtEZ6Q5Q3auvFDqinM1PYGhG.jpeg',
                'description' => 'Кухня на 2 этаже',
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-03-02 23:00:35',
            ),
            38 => 
            array (
                'id' => 57,
                'image_name' => 'rooms/HxMLBjQLDlUgjtPPesCJo2jG2xT1stN9zVcemQCl.jpeg',
                'description' => 'Кухня на 2 этаже',
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-03-02 23:00:35',
            ),
            39 => 
            array (
                'id' => 58,
                'image_name' => 'rooms/ka5WFMRvO1JC2O9Obloib7tVie8ChC5f2JjZg50Z.jpeg',
                'description' => 'Кухня на 2 этаже',
                'room_id' => 4,
                'created_at' => '2019-01-18 22:25:43',
                'updated_at' => '2019-03-02 23:00:35',
            ),
            40 => 
            array (
                'id' => 63,
                'image_name' => 'rooms/NHXiK0dMjNiIa0lBY8KboqpUo9GifTfru1NYAChY.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            41 => 
            array (
                'id' => 67,
                'image_name' => 'rooms/K30T3ZSjVpXCOsZ0iNFPO5Si2qENiVFZm7kQh8Sf.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            42 => 
            array (
                'id' => 68,
                'image_name' => 'rooms/2G0nSaqt6mHqMqC4yMSd0vaDIucx9OS90W2X2kp3.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            43 => 
            array (
                'id' => 69,
                'image_name' => 'rooms/xY0wkSUHe8cJ1fzwZrXl2uShTSomBwcqXqmXMgI8.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            44 => 
            array (
                'id' => 70,
                'image_name' => 'rooms/X01fur3GpHThAb55YvF7J63ugQeNdYUecmCCTLLP.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            45 => 
            array (
                'id' => 71,
                'image_name' => 'rooms/eoVW3uZsTOKRXfNd1iOR4ccaSc0s1oygaRAWVC84.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            46 => 
            array (
                'id' => 72,
                'image_name' => 'rooms/4t1oz7LLdQiUAOs2w4IekaEQqnwBFD3JHOZuUeuX.jpeg',
                'description' => NULL,
                'room_id' => 5,
                'created_at' => '2019-01-18 22:29:11',
                'updated_at' => '2019-01-18 22:29:11',
            ),
            47 => 
            array (
                'id' => 73,
                'image_name' => 'rooms/Xybbb6m4XlZuRAbqnkgfOQ4B6ULtN84b41Ho7mbI.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            48 => 
            array (
                'id' => 74,
                'image_name' => 'rooms/Fg8O3iFe5YOppBO8ukEGtVttKYSzhFEx24tdwqgH.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            49 => 
            array (
                'id' => 75,
                'image_name' => 'rooms/gwh4GDUjIwtlhLSb6iUc6iQp4T2Q1qBBO0IyMZZM.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            50 => 
            array (
                'id' => 76,
                'image_name' => 'rooms/aTnsWCguXb8KijO5VmxVvqbB7vMJG0uDw2XqmCYW.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            51 => 
            array (
                'id' => 77,
                'image_name' => 'rooms/bmi1b7tEZgNOK3kmKlUz40CuHkTrRjLORlGitZek.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            52 => 
            array (
                'id' => 78,
                'image_name' => 'rooms/UPZn845YJoRZ9SBbXXfVWT1eIVF0Zd0wvdbSugXO.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            53 => 
            array (
                'id' => 79,
                'image_name' => 'rooms/TnR2cLxloTUeSaJfhZyk1aQHmnnIcOle2gPaIKVT.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            54 => 
            array (
                'id' => 80,
                'image_name' => 'rooms/p3cQuLwP5KdolAbWKhBSPKTJcXfvXnjSP0iR07aa.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            55 => 
            array (
                'id' => 82,
                'image_name' => 'rooms/0w4MIuZFypRAUhMoIaZwrnsWpewVoLAe3Rv2ks5A.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            56 => 
            array (
                'id' => 83,
                'image_name' => 'rooms/SKuMvOLCG08xN48NtxXBkB6rtO0ZqwGDMMUBsW2c.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            57 => 
            array (
                'id' => 84,
                'image_name' => 'rooms/Etrk6RNCZxCvn0iJHVKN67GluIy7uGIDPKSEdkmp.jpeg',
                'description' => NULL,
                'room_id' => 6,
                'created_at' => '2019-01-18 22:51:04',
                'updated_at' => '2019-01-18 22:51:04',
            ),
            58 => 
            array (
                'id' => 85,
                'image_name' => 'rooms/QwnkngSTT5C99cbL4MRyqqlhSF4y6PLbNjRSkYOd.jpeg',
                'description' => 'Спальня №1',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            59 => 
            array (
                'id' => 86,
                'image_name' => 'rooms/ECY2AcBWERGke3imlg2M4Wfdc3o3cAbWmNWZ3CGU.jpeg',
                'description' => 'Спальня №1',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            60 => 
            array (
                'id' => 87,
                'image_name' => 'rooms/gvJderJHfJZa3v2McAN2M5nh2agYtyXt0Tkokvpj.jpeg',
                'description' => 'Кухня',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            61 => 
            array (
                'id' => 88,
                'image_name' => 'rooms/txLRKuma2p1QXGuBwPRegNJkiNXZqzyGqP3KeMkV.jpeg',
                'description' => 'Кухня',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            62 => 
            array (
                'id' => 89,
                'image_name' => 'rooms/K076qU11llrFxii1bn3tMT8Hv94e5PfP6qGekMwq.jpeg',
                'description' => 'Вход',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            63 => 
            array (
                'id' => 90,
                'image_name' => 'rooms/VqkbRkQH1oOPcjCmlbmJaClFozPEG5o4C62EO6QB.jpeg',
                'description' => 'Спальня №2',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            64 => 
            array (
                'id' => 91,
                'image_name' => 'rooms/SayANBMInklKT3mYvCg6x0UDBRT2AW094vBymbYw.jpeg',
                'description' => 'Спальня №1',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            65 => 
            array (
                'id' => 92,
                'image_name' => 'rooms/HzEDcorMs4xMVsc5WXD7npkyO3VKrTxgKG9gHC15.jpeg',
                'description' => 'Кухня',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            66 => 
            array (
                'id' => 93,
                'image_name' => 'rooms/SFqIl1W4KfBGzZkTXNQulDK1VlNJGZCFGVMEb9oX.jpeg',
                'description' => 'Спальня №2',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            67 => 
            array (
                'id' => 94,
                'image_name' => 'rooms/chHEWtmLKV6ajOAfCYWlJK03t9vgNm5MGeEGxD0l.jpeg',
                'description' => 'Спальня №2',
                'room_id' => 7,
                'created_at' => '2019-01-18 22:55:50',
                'updated_at' => '2019-03-02 23:20:43',
            ),
            68 => 
            array (
                'id' => 95,
                'image_name' => 'rooms/IKLwVziMAzwmakhn9JvLlgedP47oK7cBzOMZk3g8.jpeg',
                'description' => 'Спальня №1',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:23:50',
            ),
            69 => 
            array (
                'id' => 96,
                'image_name' => 'rooms/IjgJR1zazcd3sevF78445k13GxFU5Sh1IPiB7B10.jpeg',
                'description' => 'Спальня №1',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:23:50',
            ),
            70 => 
            array (
                'id' => 97,
                'image_name' => 'rooms/yDXpcJm76VuEoCNHEYMs2JUfkqGbk28vV3cKFvdk.jpeg',
                'description' => 'Кухня',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:23:50',
            ),
            71 => 
            array (
                'id' => 98,
                'image_name' => 'rooms/Whs7wUMc6fgPhdhOiTOsTrYl9neFuGQOeyGqU9NE.jpeg',
                'description' => 'Кухня',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:23:50',
            ),
            72 => 
            array (
                'id' => 99,
                'image_name' => 'rooms/uMXJ7JOOoPDOeZ8uvfgDUEvwGRyGdcZtdug3Iexz.jpeg',
                'description' => NULL,
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-01-18 22:57:58',
            ),
            73 => 
            array (
                'id' => 100,
                'image_name' => 'rooms/YOXqfwtrjr7w63SiZ3fATf3pnh3wAaG8KPwrhMll.jpeg',
                'description' => 'Вход',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:30:56',
            ),
            74 => 
            array (
                'id' => 101,
                'image_name' => 'rooms/cfXLnkmjghJ9MEHAZDyrym9uStXbnPck3pYD7ILf.jpeg',
                'description' => NULL,
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-01-18 22:57:58',
            ),
            75 => 
            array (
                'id' => 102,
                'image_name' => 'rooms/lvl2TBuFBUsk9injcXh7hELVxaFigbpin2DfrbUZ.jpeg',
                'description' => 'Спальня №2',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:31:25',
            ),
            76 => 
            array (
                'id' => 103,
                'image_name' => 'rooms/x7RVeCcCgbOaTiEaMV59m8jjsmOgkorajRx5Rj0Q.jpeg',
                'description' => 'Спальня №2',
                'room_id' => 8,
                'created_at' => '2019-01-18 22:57:58',
                'updated_at' => '2019-03-02 23:31:25',
            ),
            77 => 
            array (
                'id' => 105,
                'image_name' => 'rooms/EcR7V9ppWIVKshvFYi4hBbSTia8mPtxNNsxzPBfo.jpeg',
                'description' => 'Номер Люкс с балконом №1 трехместный',
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-03-03 21:26:39',
            ),
            78 => 
            array (
                'id' => 106,
                'image_name' => 'rooms/zPootMdVlRU1LIV0vbcboBEZeWkaZFgDIrM0LN6i.jpeg',
                'description' => NULL,
                'room_id' => 3,
                'created_at' => '2019-01-18 22:21:37',
                'updated_at' => '2019-01-18 22:21:37',
            ),
            79 => 
            array (
                'id' => 107,
                'image_name' => 'rooms/iH1FU1Dh83yKjOG5yzdS6h85lgsP0sWHK2UIrLaY.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            80 => 
            array (
                'id' => 108,
                'image_name' => 'rooms/fNYDkqXvtBcL9SHEpo3AieWr2rDsFPoIor2E8J5S.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            81 => 
            array (
                'id' => 109,
                'image_name' => 'rooms/HDYWpP8lDstv5jk1k9uH4bKsgEKbWkXq4u6ThzH1.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            82 => 
            array (
                'id' => 110,
                'image_name' => 'rooms/WuNGulEWpFDxKJNaa1c8RVNiBwcxcB3wBusY6r9r.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            83 => 
            array (
                'id' => 111,
                'image_name' => 'rooms/wvfINzgz4eiMBThKgVkjbSq12WeR0d1QK3XSEdHz.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            84 => 
            array (
                'id' => 112,
                'image_name' => 'rooms/TaCNQlQ0rcnDaaY3ia2EW8fkh2xsQRDiQ2Zz6T5x.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            85 => 
            array (
                'id' => 113,
                'image_name' => 'rooms/nlL1CElFsJ1DNsYQA7Q5TvPHcWJJabb9Ndr87uRG.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            86 => 
            array (
                'id' => 114,
                'image_name' => 'rooms/rpWtWqjW4TJNrxt48IwICtWzUQCjn7EmszfVnO85.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            87 => 
            array (
                'id' => 115,
                'image_name' => 'rooms/Mugzea5aB1BZvKkziZSL11i1Ll7PeYtJ1hl3zrSw.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            88 => 
            array (
                'id' => 116,
                'image_name' => 'rooms/mNEqCM2u4iWIcFF2vB7xZXnEsxvFt5aWeMNOTGUT.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            89 => 
            array (
                'id' => 117,
                'image_name' => 'rooms/eVgbRrGpNw0RI3AOWtx64tzcZR1swNhkErYA8kV1.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
            90 => 
            array (
                'id' => 118,
                'image_name' => 'rooms/DQRiLdZAnWCM8UzdpSVIbUZfrjMQR7DLVazn0nOq.jpeg',
                'description' => NULL,
                'room_id' => 9,
                'created_at' => '2019-01-18 23:03:05',
                'updated_at' => '2019-01-18 23:03:05',
            ),
        ));
        
        
    }
}