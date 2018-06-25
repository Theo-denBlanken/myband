<nav class="navbar">
    <input type="checkbox" id='menuToggle'">
    <label for="menuToggle" class="menuToggle">
        <i style="color:white" class="show-menu fa fa-arrow-down"></i>
        <i style="color:white" class="hide-menu fa fa-arrow-up"></i>
    </label>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=news">News</a></li>
        <li><a href="index.php?page=agenda">Agenda</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
        <li><a href="index.php?page=search">Search</a></li>
        {*<li><input type="text"><button>Search</button></input></li>*}
        <li><a id='user' href="#">{$username}</a></li>
    </ul>
</nav>
</header>
<main>