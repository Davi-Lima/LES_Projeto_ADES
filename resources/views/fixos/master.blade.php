<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>

        <!-- link do CSS -->
        <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/dashboard/dashboard.css">
        <!-- link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" -->

    </head>
    <body>
        <!-- Cabeçalho da página -->
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Projeto A.D.E.S.</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                @if(auth()->check())
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="/login">Sair</a>
                    </li>
                @else
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- Fim do cabeçalho -->

        <div class="container-fluid">
            <div class="row">
                <!-- Menu Lateral -->
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="@yield('principal')" href="/inicio">
                                    <span data-feather="home"></span> Principal 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('apuracao')" href="/apuracao">
                                    <span data-feather="bar-chart-2"></span> Apuração
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('contato')" href="/contato">
                                    <span data-feather="mail"></span> Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Fim do menu lateral -->

                <!-- inicio de Conteudo -->
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('conteudo')
                </main>
                <!-- Fim do Conteudo -->
            </div>
        </div> 

        <!-- Principal JavaScript do Bootstrap
        ================================================== -->
        <!-- Foi colocado no final para a página carregar mais rápido -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com.br/docs/4.1/dist/js/bootstrap.min.js"></script>

        <!-- Ícones -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>
</html>