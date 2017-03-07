<div class="sidebar" data-background-color="white" data-active-color="primary">

<!--
    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                <img src="{{ asset('images/logo.jpg') }}" style="width: 200px">
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('team.index') }}">
                    <i class="ti-user"></i>
                    <p>Team</p>
                </a>
            </li>
            <li>
                <a href="table.html">
                    <i class="ti-view-list-alt"></i>
                    <p>Projects</p>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="ti-file"></i>
                    <p>Reports</p>
                </a>
            </li>
            <li>
                <a href="icons.html">
                    <i class="ti-calendar"></i>
                    <p>Agenda</p>
                </a>
            </li>
            <li>
                <a href="maps.html">
                    <i class="ti-map"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="notifications.html">
                    <i class="ti-bell"></i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
    </div>
</div>