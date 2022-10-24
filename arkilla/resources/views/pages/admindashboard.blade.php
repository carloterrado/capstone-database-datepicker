<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admindashboard.css')}}">

</head>
<body>
<!-- Sidebar -->
<section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
        <ul class="side-menu">
            <li><a href="#" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Elements <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Badges</a></li>
                    <li><a href="#">Breadcrump</a></li>
                    <li><a href="#">Buttons</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='bx bxs-chart icon'></i> Chart</a></li>
            <li><a href=""><i class='bx bxs-widget icon'></i> Widget</a></li>
            <li class="divider" data-text="table and forms">Table and Forms</li>
            <li><a href="#"><i class='bx bx-table icon'></i> Tables</a></li>
            <li>
                <a href="#"><i class='bx bxs-notepad icon'></i> Forms<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Basic</a></li>
                    <li><a href="#">Select</a></li>
                    <li><a href="#">Checkbox</a></li>
                    <li><a href="#">Radio</a></li>
                </ul>
            </li>
        </ul>
        <div class="ads">
            <div class="wrapper">
                <a href="#" class="btn-upgrade">Upgrade</a>
                <p>Become a <span>PRO</span> member and enjoy <span> All Features</span></p>
            </div>
        </div>
    </section>
    <!-- Sidebar end -->

    <!-- Navbar -->
    <section id="content">
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <a href="#" class="nav-link">
                <i class='bx bx-bell icon'></i>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bx-message' ></i>
                <span class="badge">5</span>
            </a>
            <span class="divider"></span>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                <ul class="profile-link">
                    <a href="#"><i class='bx bxs-user-circle icon'></i>Profile</a>
                    <a href="#"><i class='bx bx-cog'></i>Setting</a>
                    <a href="#"><i class='bx bx-log-out'></i>Logout</a>
                </ul>
            </div>
        </nav>
         <!-- Navbar end -->

         <!-- Main -->
         <main>
            <h1 class="title"> Dashboard</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>
            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>1500</h2>
                            <p>Traffic</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                    <span class="progress" data-value="50%"></span>
                    <span class="label">50%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>100</h2>
                            <p>Sales</p>
                        </div>
                        <i class='bx bx-trending-down icon down'></i>
                    </div>
                    <span class="progress" data-value="90%"></span>
                    <span class="label">90%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>49</h2>
                            <p>Pageviews</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                    <span class="progress" data-value="40%"></span>
                    <span class="label">40%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>150</h2>
                            <p>Visitors</p>
                        </div>
                        <i class='bx bx-trending-down icon down'></i>
                    </div>
                    <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span>
                </div>
            </div>
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Sales Report</h3>
                        <div class="menu">
                            <i class='bx bx-dots-horizontal-rounded icon'></i>
                            <ul class="menu-link">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Remove</a></li>
                                <li><a href="#">Save</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart">
                        <div id="chart">
                            
                        </div>
                    </div>
                </div>
                <div class="content-data">
                    <div class="head">
                        <h3>Chatbox</h3>
                        <div class="menu">
                            <i class='bx bx-dots-horizontal-rounded icon'></i>
                            <ul class="menu-link">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Remove</a></li>
                                <li><a href="#">Save</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-box">
                        <p class="day"><span>Today</span></p>
                        <div class="msg">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                            <div class="chat">
                                <div class="profile">
                                    <span class="username">Alan</span>
                                    <span class="time">18:30</span>
                                </div>
                                <p>Hello</p>
                            </div>
                        </div>
                        <div class="msg me">
                            <div class="chat">
                                <div class="profile">
                                    <span class="time">18:30</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor assumenda illum quos accusantium odit saepe pariatur adipisci porro? Beatae, debitis.</p>
                            </div>
                        </div>
                        <div class="msg me">
                            <div class="chat">
                                <div class="profile">
                                    <span class="time">18:30</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="msg me">
                            <div class="chat">
                                <div class="profile">
                                    <span class="time">18:30</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor assumenda illum.</p>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Type...">
                            <button type="submit" class="btn-send"><i class='bx bxs-send' ></i></button>
                        </div>
                    </form>
                </div>
            </div>
         </main>
         <!-- Main end -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('js/admindashboard.js')}}"></script>
</body>
</html>