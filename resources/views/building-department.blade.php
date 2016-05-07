@extends('layouts.app')

@section('title', 'Строительный Департамент - Академия малоэтажного строительства')

@section('content')
    <section id="building-department" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xxl text-shadow">Строительный департамент</div>
                <div class="text-l text-shadow">Бесплатно расскажем, как построить дом Вашей мечты</div>
                <div class="more"><a href="#"><img src="img/icon-more.png"></a></div>
            </div>
        </div>
    </section>

    <section id="appointment" class="appointment-building-department" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl text-shadow">Запишитесь на бесплатную консультацию</div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="#" method="POST" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-lg" placeholder="Представьтесь">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" class="form-control input-lg" placeholder="Ваш Email или телефон">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control input-lg" placeholder="Ваше сообщение" style="height: 250px;"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-block btn-default">Отправить письмо</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="materials" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl">Из каких материалов и как строить свой дом?</div>
                <div class="text-l">Крупнейший банк строительных технологий</div>
                <div class="text-center button">
                    <a href="#" class="btn btn-lg btn-default">Узнать больше</a>
                </div>
                <p class="text-justify">
                    Третий блок: заголовок - Из каких материалов и как строить свой дом?. Ниже заголовка надпись: Крупнейший банк строительных технологий. Ниже надписи кнопка Узнать больше, вызывающая форму заполнения контактных данных.
                </p>
                <p class="text-justify">
                    Четвертый блок по типу блока схема работы: заголовок - три простых шага к строительству Вашей мечты. Ниже непосредственно сами шаги. Первый - запишитесь на консультацию. Второй - посетите наш офис, и мы продумаем лучший дом для Вас. Третий - строите дом и наслаждайтесь жизнью за городом. К каждому шагу релевантная инфографика. Все шаги анимированы.
                </p>
            </div>
        </div>
    </section>

    <section id="steps" style="opacity: 0;">
        <div class="container" style="opacity: 0;">
            <div class="row">
                <div class="text-xl">Три простых шага к осуществлению Вашей мечты</div>
                <div class="row">
                    <div class="col-sm-4 text-center step">
                        <div class="img"><img src="img/step-1.png" class="img-responsive"></div>
                        <div class="text-l">запишитесь на консультацию</div>
                    </div>
                    <div class="col-sm-4 text-center step">
                        <div class="img"><img src="img/step-2.png" class="img-responsive"></div>
                        <div class="text-l">посетите наш офис и мы продумаем лучший дом для вас</div>
                    </div>
                    <div class="col-sm-4 text-center step">
                        <div class="img"><img src="img/step-3.png" class="img-responsive"></div>
                        <div class="text-l">стройте дом и наслаждайтесь жизнью за городом</div>
                    </div>
                </div>
                <div class="row arrows hidden-xs">
                    <div class="col-sm-2 col-sm-offset-3 text-center">
                        <div class="arrow"><img src="img/arrow-step.png" class="img-responsive"></div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-2 text-center">
                        <div class="arrow"><img src="img/arrow-step.png" class="img-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection