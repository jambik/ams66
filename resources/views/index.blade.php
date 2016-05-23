@extends('layouts.app')

@section('title', 'Академия малоэтажного строительства')

@section('content')
    <section id="our-mission" style="opacity: 0;">
        <div class="container">
            <div class="row">
                {!! $blocks['our-mission']->text !!}
            </div>
        </div>
    </section>

    <section id="about-us" style="opacity: 0;">
        <div class="container">
            <div class="row">
                {!! $blocks['about-us']->text !!}
            </div>
        </div>
    </section>

    <section id="we-know-truth" style="opacity: 0;">
        <div class="container">
            <div class="row">
                {!! $blocks['we-know-truth']->text !!}
            </div>
        </div>
    </section>

    <section id="satisfaction" style="opacity: 0;">
        <div class="container">
            <div class="row">
                {!! $blocks['satisfaction']->text !!}
            </div>
        </div>
    </section>

    <section id="advices" style="opacity: 0;">
        <div class="container-fluid">
            {!! $blocks['advices']->text !!}
        </div>
    </section>

    <section id="money" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                {!! $blocks['money']->text !!}
            </div>
        </div>
    </section>

    <section id="unity" style="opacity: 0;">
        <div class="container">
            <div class="row" style="opacity: 0;">
                {!! $blocks['unity']->text !!}
            </div>
        </div>
    </section>

    @if ($partners->count())
        <section id="partners" style="opacity: 0;">
            <div class="container">
                <div class="row" style="opacity: 0;">
                    <div class="text-xl">Наши партнеры</div>
                    <div class="partners-list">
                        @foreach($partners as $partner)
                            <div class="col-md-3 col-sm-4">
                                <img src="/images/medium/{{ $partner->img_url . $partner->image }}" title="{{ $partner->title }}" class="img-responsive box-shadow">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection