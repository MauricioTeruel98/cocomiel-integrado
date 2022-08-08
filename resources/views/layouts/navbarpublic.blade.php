
<div id="menu-hamb">
    <div class="icono-menu">
        <img src="{{ asset('img/hamb-icono.png') }}" id="icono-menu">
    </div>

    <div class="cont-menu active" id="menu">
        <ul>
            <li><a href="{{ route('home') }}" onclick="cerrarMenu()" class="menu_link">Home</a></li>
            <li><a href="#plaza" onclick="cerrarMenu()" class="menu_link">La Plaza</a></li>
            <li><a href="#quienes_somos" onclick="cerrarMenu()" class="menu_link">Quienes Somos</a></li>
            <li><a href="{{ route('products') }}" class="menu_link">Productos</a></li>
            <li><a href="#contact" onclick="cerrarMenu()" class="menu_link">Contacto</a></li>
        </ul>
    </div>
</div>
