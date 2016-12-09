<ul>
    <li><a href="{{route('beritauser')}}">Berita</a></li>
    <li><a href="#">Data Pendonor <span class="caret"></span></a>
        <div>
            <ul>
                <li><a href="{{route('datapendonor')}}">Pendonor </a></li>
                <li><a href="{{route('stokdarah')}}">Stok Darah</a></li>
            </ul>
        </div>
    <li><a href='#'>Welcome! <b style='color:black'>{{auth()->user()->fullname}}</b></a>
        <div>
            <ul>
                <li><a href='{{route('auth_logout')}}'>Logout</a></li>
            </ul>
        </div>
    </li>
</ul>
