<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
        <link rel="stylesheet" href="styles/style.css">
        <title>Dashboard</title>
    </head>

    <body>
        <div class="container">
            <aside>
                <div class="toggle">
                    <div class="logo">
                        <img src="images/Temps.png">
                        <h2>Enser</h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
                <!--This is the beggining of the sidebar-->
                <div>
                    <div class="sidebar">
                        <a href="#">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                        <h3>Dashboard</h3>
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                            <h3>Students</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                school
                            </span>
                            <h3>Courses</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                inventory
                            </span>
                            <h3>Current Courses</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                            <h3>Projects</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                design_services
                            </span>
                            <h3>Instructors</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                volunteer_activism
                            </span>
                            <h3>Stakeholders</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                history
                            </span>
                            <h3>Past Courses</h3> 
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            <h3>Logout</h3> 
                        </a>
                    </div>
                </div>
                    <!--This is the end of the sidebar-->
            </aside>
            <main>
                <div></div>
                <h1>Dashboard</h1>
            </main>
            <div class="right-section">
                <div class="nav">
                    <button id="menu-btn">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </button>
                    <div class="dark-mode">
                        <span class="material-symbols-outlined active">
                            light_mode
                        </span>
                        <span class="material-symbols-outlined">
                            dark_mode
                        </span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, User</p>
                        </div>
                        <div class="profile-pic">
                            <img src="images/Sparkytest2.jpg">
                        </div>
                    </div>

                </div>
                <div class="reminders">
                    <div class="header">
                        <h2>Reminders</h2>
                        <span class="material-symbols-outlined">
                            notifications
                        </span>
                    </div>
                    <div class="notifications">
                        <div class="icon">
                            <h2>Calendar</h2>
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="Java/index.js"></script>
    </body>
</html>
