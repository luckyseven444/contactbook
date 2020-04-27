<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <div class="">

    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar">
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item has-treeview menu-open">
                                    <a href="{{ route('contacts.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Contacts
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview menu-open">
                                    <a href="{{ route('phones.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Phones
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview menu-open">
                                    <a href="{{ route('addresses.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Address
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item has-treeview menu-open">
                                    <a href="{{ route('names.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Names
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
