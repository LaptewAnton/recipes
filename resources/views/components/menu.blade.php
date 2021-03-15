<div class="menu shadow">
    <div class="row mt-3">
        <div class="col-3 d-flex align-items-center">
            <h2 class="menu-page">@yield('title')</h2>
        </div>
        <div class="col-9 ml-auto">
            <ul class="d-flex align-items-center float-end">
                <li>
                    <a class="menu-item" href="{{route('home')}}">
                        Главная
                    </a>
                </li><li>
                    <a class="menu-item" href="{{route('recipes')}}">
                        Рецепты
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->admin == 1)
                    <li>
                        <a class="menu-item" href="">
                            Администрирование
                        </a>
                    </li>
                @endif
                @if(Auth::check() == 0)
                    <li>
                        @include('components.login.loginButton')
                    </li>
                    <li>
                        @include('components.registration.regButton')
                    </li>
                @else
                    <li>
                        <a class="menu-item" href="">
                            Создать заявку
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="">
                            Мои заявки
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('logout')}}">
                            Выход
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
