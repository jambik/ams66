@extends('layouts.app')

@section('title', 'Академия малоэтажного строительства')

@section('content')
    <section id="our-mission" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xxl text-shadow text-right">Помогаем правильно жить за городом</div>
                <a href="#" class="btn btn-xl btn-primary btn-default">Узнать больше</a>
            </div>
        </div>
    </section>

    <section id="about-us" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <h1>Академия малоэтажного строительства</h1>
                <p class="col-lg-8 col-lg-offset-2 text-justify">Мы видим свою миссию в том, чтобы постоянно повышать уровень качества загородной жизни человека. В рамках реализации нашей миссии мы разработали и эффективно используем рейтинговую систему загородных поселков, банк технологий строительства, системы управления строительством и освоения территорий, предоставляем высококачественные продукты и услуги, отвечающие самым высоким требованиям жизни современного общества, обеспечивая одну из фундаментальных свобод человека – свободу выбора. Для этого мы фокусируемся на разумном использовании имеющихся ресурсов: природных, эксплуатационных, энергетических, материальных. Используем свой опыт и компетенции, чтобы не допускать ошибок и максимально эффективно использовать лучшие наработанные практики и приносить пользу обществу. Нашей главной целью является создание качества загородной жизни человека, при оптимизации затрат на строительство и эксплуатацию объектов более 100 лет.</p>
            </div>
        </div>
    </section>

    <section id="we-know-truth" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xl">Знаем всю правду обо всех земельных участках</div>
                <div class="text-l">Посетите наш земельный департамент</div>
                <div class="text-center">
                    <a href="{{ route('land-department') }}" class="btn btn-default btn-xl">Перейти</a>
                </div>
            </div>
        </div>
    </section>

    <section id="satisfaction" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="text-xl">Удовлетворенность клиента</div>
                <p class="col-lg-10 col-lg-offset-1">Нашим основным преимуществом является понимание того, что человек – это главный приоритет в деятельности Академии, поэтому смотреть на вещи с Вашей точки зрения и использовать современные технологии и передовой опыт лидеров индустрии малоэтажной застройки является главными задачами нашей деятельности.</p>
            </div>
        </div>
    </section>

    <section id="advices" style="opacity: 0;">
        <div class="container-fluid">
            <div class="row">
                <img src="{{ asset('img/house-sketch-1.png') }}" class="sketch-left" style="opacity: 0;">
                <img src="{{ asset('img/house-sketch-2.png') }}" class="sketch-right" style="opacity: 0;">
            </div>
            <div class="row content-text">
                <div class="text-xl">Расскажем из каких материалов правильно строить дома</div>
                <div class="text-l">Посетите наш департамент строительства</div>
                <div class="text-center">
                    <a href="{{ route('building-department') }}" class="btn btn-black btn-xl">Перейти</a>
                </div>
            </div>
        </div>
    </section>

    <section id="money" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl">Узнайте, куда вкладывать деньги выгоднее всего</div>
                <div class="text-l">Разработаем инвестиционный план индивидуально для Вас</div>
                <div class="text-center">
                    <a href="{{ route('investing-department') }}" class="btn btn-purple btn-xl">Инвестировать</a>
                </div>
            </div>
        </div>
    </section>

    <section id="unity" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl">Единство коллектива в выполнении нашей миссии</div>
                <p class="col-lg-10 col-lg-offset-1 text-justify">Мы – сплоченная команда профессионалов и стремимся к тому, чтобы каждый наш сотрудник и партнер гордился тем, что работает в нашей команде. Мы направляем свои усилия на постоянное развитие наших профессиональных навыков и компетенций.</p>
            </div>
        </div>
    </section>

    <section id="partners" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                <div class="text-xl">Наши партнеры</div>
                <div class="partners-list">
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-1.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-3.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-1.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-3.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-1.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-3.jpg') }}" class="img-responsive box-shadow">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="{{ asset('img/partner-2.jpg') }}" class="img-responsive box-shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection