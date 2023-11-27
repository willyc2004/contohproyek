<nav class="navbar navbar-expand-lg" style="background-color: #000;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Home")? "active" : ""  }}" aria-current="page" href="/" style="color: #fff; font-size: 18px; font-weight: bold;">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "About Us")? "active" : ""  }}" href="/tentangkita" style="color: #fff; font-size: 18px; font-weight: bold;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Contact")? "active" : ""  }}" href="/kontakkita" style="color: #fff; font-size: 18px; font-weight: bold;">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "AFL1")? "active" : ""  }}" href="/menu" style="color: #fff; font-size: 18px; font-weight: bold;">AFL1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "My Project")? "active" : ""  }}" href="/project" style="color: #fff; font-size: 18px; font-weight: bold;">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Writer")? "active" : ""  }}" href="/writer" style="color: #fff; font-size: 18px; font-weight: bold;">Writer</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Shop")? "active" : ""  }}" href="/shop" style="color: #fff; font-size: 18px; font-weight: bold;">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($pagetitle == "Sales")? "active" : ""  }}" href="/sales" style="color: #fff; font-size: 18px; font-weight: bold;">Sales</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
