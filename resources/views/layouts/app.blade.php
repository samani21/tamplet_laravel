<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600$display=swap'); */
:root {
    --main-color: #5041BC;
    --color-dark: #1D2231;
    --text-grey: #8390a2;
}

body{
    background-color: #5041BC;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
}

.sidebar{
    width: 230px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
    border-radius: 0px 50px 50px 0px;
    transition: width 300ms;
}

.sidebar-brand{
    height: 98px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff;
}

.sidebar-brand h1{
    font-size: 1rem;
    padding: 20px
}

.sidebar-brand span{
    display: inline-block;
    padding-right: 0rem;
}

.sidebar-menu li{
    widows: 100%;
    margin-bottom: 1.3rem;
    padding-left: 0rem;
}

.sidebar-menu a{
    padding-left: 1rem;
    display: block;
    color: #fff;
    font-size: 1.1rem;
    text-decoration:none
}

.sidebar-menu a.active{
    background: #fff;
    padding-right: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a span:first-child{
    font-size: 1.5;
    padding-right: 1rem;
}

#nav-toggle:checked + .sidebar{
    width: 70px;
}

#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
    padding-left: 1rem;
    text-align: center;
}

#nav-toggle:checked + .sidebar li a {
    padding-left: 0rem;
}

#nav-toggle:checked + .sidebar .sidebar-brand h1 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
    display: none;
}

#nav-toggle:checked ~ .main-content{
    margin-left: 70px;
}

#nav-toggle:checked ~ .main-content header{
    width: calc(100% - 70px);
    left: 70px;
}

.main-content{
    transition: margin-left 300ms;
    margin-left: 230px;
}


header{
    display: flex;
    justify-content: space-between;
    padding: 0rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 230px;
    width: calc(100% - 230px);
    top: 0;
    z-index: 100;
    transition: left 300ms;
    background-color: #ffffff;
    border-radius: 30px 0px 0px 0px;
}

main{
    padding: 1rem 1.5rem;
}

#nav-toggle{
    display: none;
}

header h2{
    color: #222;
}

header label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}

main{
    margin-top: 50px;
    padding: rem 1.5rem;
    background: #f1f5f9e3;
    min-height: calc(103vh - 70px);
    border-radius: 0px 0px 0px 30px;
}

/* @media only screen and (max-width: 1200px){
    body{
        background-color: #ffffff;
    }
    .sidebar{
        width: 70px;
    }
    
    .sidebar .sidebar-brand,
    .sidebar li {
        padding-left: 1rem;
        text-align: center;
    }
    
    .sidebar li a {
        padding-left: 0rem;
    }

    .sidebar .sidebar-brand h1 span:last-child,
    .sidebar li a span:last-child{
        display: none;
    }
    
    .main-content{
        margin-left: 70px;
    }
    
   .main-content header{
        width: calc(100% - 70px);
        left: 70px;
    }
    .sidebar:hover{
        width: 345px;
        z-index: 200;
    }
    
    .sidebar:hover .sidebar-brand,
    .sidebar:hover li {
        padding-left: 2rem;
        text-align: left;
    }

    .sidebar:hover li a{
        padding-left: 1rem;
    }
    
    .sidebar:hover .sidebar-brand h1 span:last-child,
    .sidebar:hover li a span:last-child{
        display: inline;
    }
} */

@media only screen and (max-width: 768px){
    body{
        background: #ffffff;
    }
    .sidebar{
        left: -100% !important;
    }

    header h1{
        display: flex;
        align-items: center;
    }

    header h1 label{
        display:  inline-block;
        background: var(--main-color);
        padding-right: 0rem;
        margin-right: 1rem;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center !important;
     }
     
     header h1 span{
        text-align: center;
        padding-right: 0rem;
     }
     
     header h1{
        font-size: 1.1rem;
     }

     .main-content{
        width: 100%;
        margin-left: 0rem;
        
     }

     header{
        width: 100% !important;
        left: 0 !important; 
     }

     #nav-toggle:checked + .sidebar{
        left: 0 !important;
        z-index: 100;
        width: 230px;
     }
    
    #nav-toggle:checked + .sidebar .sidebar-brand,
    #nav-toggle:checked + .sidebar li {
        padding-left: 2rem;
        text-align: left;
    }

    #nav-toggle:checked + .sidebar li a{
        padding-left: 1rem;
    }
    
    #nav-toggle:checked + .sidebar:hover .sidebar-brand h1 span:last-child,
    #nav-toggle:checked + .sidebar li a span:last-child{
        display: inline;
    }

    #nav-toggle:checked ~ .main-content{
        margin-left: 0rem;
    }
}
</style>
</head>
<body>
    <div id="app">
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1>
                <span class="lab la-accusoft"></span>
                <span>BERUNTUNG RAYA</span>
            </h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="las la-tachometer-alt"></span>
                        <span>dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-user-friends"></span>
                        <span>Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-users"></span>
                        <span>Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-book-medical"></span>
                        <span>Rekam Medis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-capsules"></span>
                        <span>Obat</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-notes-medical"></span>
                        <span>Resep</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="user-wrapper">
                <div>
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </header>
        <main>
        @yield('content')
        </main>
    </div>
    </div>
</body>
</html>
