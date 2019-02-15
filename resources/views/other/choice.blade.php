@extends('template')
@section('content')
    <style>
        p {
            font-size: 16px;
        }
        .txt-red {
            color: #FF0000;
        }
        .txt-green {
            color: #009900;
        }
        .txt-orange {
            color: #ff9933;
        }
        .txt-center {
            text-align: center;
        }
        .txt-link {
            color: #43BFCB;
        }
    </style>
    <div class="wrapper row3">
        <main class="hoc container clear">
        @include('parts.navigation', [
          'categories' => $options['categories'],
          'rooms' => $options['rooms']
        ])
            <!-- Reservation -->
            <div class="content three_quarter">
                <!-- Description -->
                <div class="content">
                    <div class="btmspace-50 center">
                        <h2>Таблица сравнения</h2>
                    </div>
                    <h6>Номера</h6>
                    <table border="1" cellspacing="0">
                        <tbody class="txt-center">
                        <tr>
                            <td><p><span><strong></strong></span></p></td>
                            <td><p><span><strong>Этаж</strong></span></p></td>
                            <td><p><span><strong>Спальных мест</strong></span></p></td>
                            <td><p><span><strong>Санузел</strong></span></p></td>
                            <td><p><span><strong>Кухня</strong></span></p></td>
                            <td><p><span><strong>ТВ</strong></span></p></td>
                            <td><p><span><strong>Wi-Fi</strong></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Стандарт</span></p></td>
                            <td><p><span>2</span></p></td>
                            <td><p><span>2-4</span></p></td>
                            <td><p><span class="txt-orange">на этаже</span></p></td>
                            <td><p><span class="txt-orange">на этаже</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Люкс</span></p></td>
                            <td><p><span>2</span></p></td>
                            <td><p><span>2-4</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-orange">на этаже</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Люкс с балконом</span></p></td>
                            <td><p><span>2</span></p></td>
                            <td><p><span>2-4</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-orange">на этаже</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Мансарда</span></p></td>
                            <td><p><span>3</span></p></td>
                            <td><p><span>2-4</span></p></td>
                            <td><p><span class="txt-orange">на 2 этаже</span></p></td>
                            <td><p><span class="txt-orange">на 2 этаже</span></p></td>
                            <td><p><span class="txt-orange">на 2 этаже</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        </tbody>
                    </table>
                    <h6>1 комнатные домики</h6>
                    <table border="1" cellspacing="0">
                        <tbody class="txt-center">
                        <tr>
                            <td></td>
                            <td><p><span><strong>Этаж</strong></span></p></td>
                            <td><p><span><strong>Спальных мест</strong></span></p></td>
                            <td><p><span><strong>Санузел</strong></span></p></td>
                            <td><p><span><strong>Кухня</strong></span></p></td>
                            <td><p><span><strong>ТВ</strong></span></p></td>
                            <td><p><span><strong>Wi-Fi</strong></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Розовый</span></p></td>
                            <td><p><span>1</span></p></td>
                            <td><p><span>2-4</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Зеленый</span></p></td>
                            <td><p><span>2</span></p></td>
                            <td><p><span>2-5</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        </tbody>
                    </table>
                    <h6>2 комнатные домики</h6>
                    <table border="1" cellspacing="0">
                        <tbody class="txt-center">
                        <tr>
                            <td></td>
                            <td><p><span><strong>Этаж</strong></span></p></td>
                            <td><p><span><strong>Спальных мест</strong></span></p></td>
                            <td><p><span><strong>Санузел</strong></span></p></td>
                            <td><p><span><strong>Кухня</strong></span></p></td>
                            <td><p><span><strong>ТВ</strong></span></p></td>
                            <td><p><span><strong>Wi-Fi</strong></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Салатовый</span></p></td>
                            <td><p><span>1</span></p></td>
                            <td><p><span>4-8</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Сиреневый</span></p></td>
                            <td><p><span>2</span></p></td>
                            <td><p><span>4-8</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        </tbody>
                    </table>
                    <h6>3 комнатные домики</h6>
                    <table border="1" cellspacing="0">
                        <tbody class="txt-center">
                        <tr>
                            <td></td>
                            <td><p><span><strong>Этаж</strong></span></p></td>
                            <td><p><span><strong>Спальных мест</strong></span></p></td>
                            <td><p><span><strong>Санузел</strong></span></p></td>
                            <td><p><span><strong>Кухня</strong></span></p></td>
                            <td><p><span><strong>ТВ</strong></span></p></td>
                            <td><p><span><strong>Wi-Fi</strong></span></p></td>
                        </tr>
                        <tr>
                            <td><p><span class="txt-link">Набережный</span></p></td>
                            <td><p><span>1</span></p></td>
                            <td><p><span>4-8</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в домике</span></p></td>
                            <td><p><span class="txt-green">в номере</span></p></td>
                            <td><p><span class="txt-green"><i class="fa fa-lg fa-check"></i></span></p></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End reservation -->
            <!-- End room -->
        </main>
        <!-- / main body -->
    </div>
@endsection
