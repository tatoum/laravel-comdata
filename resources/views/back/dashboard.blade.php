@extends('layouts.default')
@section('content')
<div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li> <a href="#">Home</a> </li>
                    <li> <a href="#">Questionnaires</a> </li>
                    <li> <a href="#">Utilisateurs</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Data</a>
                </li>
            </ul>
            </nav>
            </div> <!-- /#page-content-wrapper -->
        </div>
@stop