@extends('layouts.app')

@section('title', 'Home - Studio Design')

@section('content')
    {{-- HERO SECTION --}}
    <div class="box sd-10">
        <div class="box sd-11">
            <div class="box sd-12">
                <h1 class="text sd-13">Say Hello To Your New Site.</h1>
            </div>
            <div class="box sd-14">
                <div class="box sd-15">
                    <span class="text sd-16">
                        Studio.Design is the easiest and quickest design tool to turn any idea into a website.
                    </span>
                    <a class="box sd-17" href="{{ route('register') }}">
                        <div class="text sd-18">Start For Free</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- DYNAMIC FEATURES SECTION --}}
    <div class="box sd-88" id="features">
        <div class="box sd-89">
            <div class="box sd-90">
                <h2 class="text sd-91">Start your site.</h2>
                <div class="box sd-92">

                    @php
                        $features = [
                            [
                                'title' => 'Design Editor. Intuitively yours.',
                                'desc' => 'Design layouts with a powerful yet intuitive UI.',
                                'badge' => 'Learn more',
                                'link' => '#',
                                'class' => 'sd-93'
                            ],
                            [
                                'title' => 'CMS without mess.',
                                'desc' => 'Collaborate on content creation in one central location.',
                                'badge' => 'Learn more',
                                'link' => '#',
                                'class' => 'sd-105'
                            ],
                        ];
                    @endphp

                    @foreach($features as $feature)
                        <div class="box {{ $feature['class'] }}">
                            <div class="box sd-94">
                                <p class="text sd-95 theme-8f8fd562">{!! nl2br(e($feature['title'])) !!}</p>
                                <p class="text sd-96 theme-c59e2d22">{{ $feature['desc'] }}</p>
                            </div>
                            <div class="box sd-100">
                                <a class="box sd-101" href="{{ $feature['link'] }}">
                                    <p class="text sd-102">{{ $feature['badge'] }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
