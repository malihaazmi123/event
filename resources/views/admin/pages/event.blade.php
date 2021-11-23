@extends('welcome')
@section('content')
<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Event <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Wedding</a>
                                <a class="dropdown-item" href="#">Holud</a>
                                <a class="dropdown-item" href="#">Reciption</a>
                                <a class="dropdown-item" href="#">Birthday Party</a>
                                <a class="dropdown-item" href="#">Event list</a>
                            </div>
                        </li>
@endsection