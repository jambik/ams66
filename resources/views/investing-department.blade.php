@extends('layouts.app')

@section('title', 'Инвестирование - Академия малоэтажного строительства')

@section('content')
    <section id="investing-department" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xxl text-shadow">Инвестиционный департамент</div>
                <div class="text-l text-shadow">Бесплатно расскажем, где купить подходящую землю</div>
                <div class="more"><a href="#"><img src="img/icon-more.png"></a></div>
            </div>
        </div>
    </section>

    <section id="appointment" class="appointment-investing-department" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl text-shadow">Запишитесь на бесплатную консультацию</div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="{{ route('consultation.send') }}" id="form_consultation" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-status"></div>
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
                            <button type="submit" class="btn btn-lg btn-block btn-default form-button">Отправить письмо</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="investing" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl">Как надежно инвестировать в загородное строительство?</div>
                <div class="text-l">Обладаем всей объективной информацией обо всех поселках нашей области.</div>
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
                        <div class="text-l">посетите наш офис и мы разработаем инвестиционный план</div>
                    </div>
                    <div class="col-sm-4 text-center step">
                        <div class="img"><img src="img/step-3_1.png" class="img-responsive"></div>
                        <div class="text-l">выгодно инвестируйте свои средства и получайте доходы</div>
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