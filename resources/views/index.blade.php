@extends('layout.app')

@section('title','Главная страница')

@section('aside')
    @parent
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
@endsection

@section('content')
    @include('header.header', ['title' => 'Главная страница сайта'])
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>Главная страница сайта</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore eos esse hic magnam mollitia non rem? Consectetur corporis explicabo, id, modi molestias natus, odio quas quibusdam quos temporibus tenetur!</p>

            </div>
        </div>
        @verbatim
            <div id="app">
                {{ message }}
                {{ user.email }}
            </div>
        @endverbatim
    </div>

    @auth()
        Вы авторизованы
    @endauth

    @guest()
        Вы гость
    @endguest

    @session('status')
    {{ $value }}
    @endsession

@endsection

@push('styles')
    <style>
        body{background-color: #e4e4e4;}

    </style>
@endpush

@push('javascript')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>

        const { createApp, ref } = Vue

        createApp({
            setup() {
                const user = {{ \Illuminate\Support\Js::from($user) }};
                const message = ref('Hello vue!')
                return {
                    message,
                    user
                }
            }
        }).mount('#app')

    </script>
@endpush
