<nav class="navbar navbar-expand-lg" style = "background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Home")? "active" : ""  }}" aria-current="page" href="/">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "About Us")? "active" : ""  }}" href="/tentangkita">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Contact")? "active" : ""  }}" href="/kontakkita">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "AFL1")? "active" : ""  }}" href="/menu">AFL1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "My Project")? "active" : ""  }}" href="/project">Project</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Writer")? "active" : ""  }}" href="/writer">Writer</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>