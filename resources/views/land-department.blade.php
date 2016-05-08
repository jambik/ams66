@extends('layouts.app')

@section('title', 'Земельный Департамент - Академия малоэтажного строительства')

@section('content')
    <section id="land-department" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xxl text-shadow">Земельный департамент</div>
                <div class="text-l text-shadow">Бесплатно расскажем, где купить подходящую землю</div>
                <div class="more"><a href="#"><img src="img/icon-more.png"></a></div>
            </div>
        </div>
    </section>

    <section id="appointment" class="appointment-land-department" style="opacity: 0;">
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

    <section id="cottage-or-land" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl text-shadow">Что лучше приобрести</div>
                <div class="col-sm-5 choice-left text-center">
                    <div class="text-right arrow hidden-xs">
                        <img src="img/arrow-left.png">
                    </div>
                    <div class="text-l">Участок в коттеджном поселке</div>
                    <img src="img/choice-cottage.jpg" class="img-responsive">
                </div>
                <div class="col-sm-2">
                    <div class="text-l text-or text-center">ИЛИ</div>
                </div>
                <div class="col-sm-5 choice-left text-center">
                    <div class="text-left arrow hidden-xs">
                        <img src="img/arrow-right.png">
                    </div>
                    <div class="text-l">Участок в коттеджном поселке</div>
                    <img src="img/choice-land.jpg" class="img-responsive">
                </div>
                <div class="clearfix"></div>
                <div class="text-l">Владеем объективной информацией обо всех коттеджных поселках и земельных участках области</div>
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
                        <div class="text-l">посетите наш офис и выберите участок</div>
                    </div>
                    <div class="col-sm-4 text-center step">
                        <div class="img"><img src="img/step-3.png" class="img-responsive"></div>
                        <div class="text-l">купите землю и наслаждайтесь жизнью за городом</div>
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