<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    .logo {
        flex-shrink: 0;
    }

    .nav-wrapper nav {
        display: flex;
        gap: 20px;
    }

    .right-section {
        display: flex;
        align-items: center;
        gap: 15px;
    }

</style>
<div class="header-container">
    <div class="container">
        <header class="header">
            <div class="logo hover-this">
                <h2>Fox Studio</h2>
{{--                <img src="{{asset('images/logo-fox-b.jpeg')}}">--}}
            </div>

            <div class="nav-wrapper">
                <nav>
                    <a href="{{route('home')}}" class="hover-this"><span>Biz Kimik ?</span></a>
                    <a href="{{route('projects')}}" class="hover-this"><span>Layihələr</span></a>
                    <a href="{{route('contact')}}" class="hover-this"><span>Əlaqə</span></a>
                    <div class="cursor"></div>
                </nav>
            </div>

            <div class="right-section">
                <button class="start-project hover-this">
                    <a href="{{route('contact')}}">Müraciət et
                        <img src="{{asset('icons/arrow-top-right (1).svg')}}" alt="">
                    </a>
                </button>
                <div class="menu hover-this">
                    <i class="fa-solid fa-align-right"></i>
                </div>
            </div>
        </header>
    </div>
</div>
