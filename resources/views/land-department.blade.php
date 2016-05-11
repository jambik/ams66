@extends('layouts.app')

@section('title', 'Земельный Департамент - Академия малоэтажного строительства')

@section('content')
    <section id="land-department" style="opacity: 0;">
        <div class="container">
            <div class="row">
                {!! $blocks['land-department']->text !!}
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
                {!! $blocks['cottage-or-land']->text !!}
            </div>
        </div>
    </section>

    <section id="steps" style="opacity: 0;">
        <div class="container" style="opacity: 0;">
            <div class="row">
                {!! $blocks['steps-land']->text !!}
            </div>
        </div>
    </section>
@endsection