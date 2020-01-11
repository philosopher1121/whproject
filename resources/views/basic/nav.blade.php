<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-primary" >
        <a class="navbar-brand" href="#">Navbar</a>
        <!--.navbar-toggler 漢堡式選單按鈕 -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- .navbar-toggler-icon 漢堡式選單Icon -->
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--.navbar-toggler 漢堡式選單按鈕 結束 -->

        <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
        <!-- 選單項目&漢堡式折疊選單 -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- active表示當前頁面 -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home')}}">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('work.index')}}">黑白工</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('occupationalinjury.index')}}">工傷</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('caraccident.index')}}">車禍</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('renthouse.index')}}">租屋</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('legal')}}">法律資源</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">個人資料</a>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">註冊</a>
                        </li>
                        {{-- @if (Route::has('register')) --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">登入</a>
                            </li>
                        {{-- @endif --}}
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
