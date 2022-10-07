
<body>
    <div class="d-flex" id="wrapper">

        <div class="text-white" id="sidebar-wrapper" style="background: rgb(20, 14, 50);">
        <div class="sidebar-heading text-center py-4  fs-4 fw-bold ">
            <label class="fw-light" style="color: rgb(255, 1, 234); font-weight: bold;">e</label>togetherness
        </div>

        <div class="list-group list-group-flush my-3">
            <a href="/user" class="list-group-item list-group-item-action bg-transparent second-text active text-white" >
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="{{ route('matches') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-project-diagram me-2"></i>Matches
            </a>
            <a href="{{ route('advSearch') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-chart-line me-2"></i>Search
            </a>
            <a href="{{ route('messages') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-paperclip me-2"></i>Messages
            </a>
            <a href="{{ route('activities') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-shopping-cart me-2"></i>Activity
            </a>
            <a href="{{ route('packages') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-shopping-cart me-2"></i>Packages
            </a>
            <a href="{{ route('account.settings') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-user me-2"></i>Account Settings
            </a>
            <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fas fa-project-diagram me-2"></i>Log out
            </a>
        </div>
    </div>

    <div id="page-content-wrapper" style="background-color: #eeeeee;" class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light py-4 px-4 mb-4 bg-white">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i> {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/user/profile">View Profile</a></li>
                        <li><a class="dropdown-item">Hobbies & Interest</a></li>
                        <li><a class="dropdown-item">Personality Questions</a></li>
                        <li><a class="dropdown-item">Cupidtags</a></li>
                        <li><a class="dropdown-item">Profile Settings</a></li>
                        <li><a class="dropdown-item">Notifications</a></li>
                        <li><a class="dropdown-item">Languages</a></li>
                        <li><a class="dropdown-item">Help</a></li>
                        <li><a class="dropdown-item">Upgrade Membership</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </nav>