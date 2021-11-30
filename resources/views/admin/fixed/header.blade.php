<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('form')}}">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                
                            </a>
                        </li>
                  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <span>
                                    Staffs <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('staff.Addstaff')}}">Add_Staff</a>
                                <a class="dropdown-item" href="{{route('staff.staffList')}}">Staff_list</a>
                            </div>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('accountform')}}">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('event')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Events <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('event')}}">Wedding</a>
                                <a class="dropdown-item" href="{{route('weekly')}}">Holud</a>
                                <a class="dropdown-item" href="#">Reciption</a>
                                <a class="dropdown-item" href="#">Birthday Party</a>
                                <a class="dropdown-item" href="{{route('event.eventlist')}}">Event list</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-user"></i>
                                Users
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-user"></i>
                                Bookings
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('event')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Booking details <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('event')}}">Wedding</a>
                                <a class="dropdown-item" href="{{route('weekly')}}">Holud</a>
                                <a class="dropdown-item" href="#">Reciption</a>
                                <a class="dropdown-item" href="#">Birthday Party</a>
                                <a class="dropdown-item" href="{{route('event.eventlist')}}">Event list</a>
                            </div>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/service')}}">
                                <i class="far fa-user"></i>
                                Services
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </nav>