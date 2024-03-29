<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">

        <a href="{{route('home')}}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Главная с пивоманами</a><br>
        
        <a href="{{route('posts.index')}}">Все новости</a>
        <a href="{{route('posts.index')}}">Устав</a>
        <a href="{{route('posts.index')}}">Состав</a>
        <a href="{{route('posts.index')}}">Вступление</a>

    </div>

    <div class="sm:mb-0 self-center">
        @auth('web')
        <a href="{{ route('logout')}}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
        @endauth
        @guest('web')
        <a href="{{ route('login')}}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
        <a href="{{ route('register')}}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Регистрация</a>
        @endguest
    </div>
</nav>