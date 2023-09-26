<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="../../Components/NavBar/NavigationBar.css">
        <title>NavBar</title>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <i class='bx bx-menu toggle'></i>
            </header>
            <Link to="#" className="lec-nav-menu-bars" onClick={showSidebar}>
                <i className="bx bx-menu"></i>
            </Link>
            <div class="menu-bar">
                <hr>
                <div class="menu">
                    <ul class="menu-links">