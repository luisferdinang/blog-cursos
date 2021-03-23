<header>
    <h1>Luis Fer</h1>
    <nav>
        <ul>
            <li class="list-group-item  list-group-item-primary " style="width:200px"  ><a href="{{route("home")}}" class="{{request()->routeIs("home") ? "list-group-item active" : "" }} ">home</a></li> 
           
            <li class="list-group-item  list-group-item-warning"style="width:200px"><a href="{{route("cursos.index")}}" class="{{request()->routeIs("cursos.*") ? "list-group-item active" : "" }} ">cursos</a></li>
           
            <li class="list-group-item list-group-item-info "style="width:200px"><a href="{{route("nosotros")}}" class="{{request()->routeIs("nosotros") ? "list-group-item active" : "" }} ">nosotros</a></li>
            
            <li class="list-group-item list-group-item-dark" style="width:200px">
                <a href="{{route("contactanos.index")}}" class="{{request()->routeIs("contactanos.index") ? "list-group-item active" : "" }} ">Contactanos</a>
            </li>
            <li class="list-group-item list-group-item-light" style="width:200px">
                <a href="{{route("user.index")}}" class="{{request()->routeIs("user.index") ? "list-group-item active" : "" }} ">Usuarios</a>
            </li>

        </ul>
    </nav>
</header>