<ul class="nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="icon ion-ios-home-outline"></i>
            <span>Anasayfa</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.markalarimiz.index') }}">
            <i class="icon ion-android-apps"></i>
            <span>Çalışma Markalarımız</span>
        </a>
    </li>
    <li class="nav-item with-sub">
        <a class="nav-link" href="#">
            <i class="icon ion-ios-book-outline"></i>
            <span>Projeler</span>
        </a>
        <div class="sub-item">
            <ul>
                <li><a href="{{ route('admin.projelerimiz.index') }}">Projelerimiz</a></li>
                <li><a href="{{ route('admin.proje-kategorisi.index') }}">Proje Kategorisi</a></li>
            </ul>
        </div><!-- dropdown-menu -->
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.hizmetlerimiz.index') }}">
            <i class="icon ion-android-bookmark"></i>
            <span>Hizmetlerimiz</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.site-ayarlari.index') }}">
            <i class="icon ion-ios-cog-outline"></i>
            <span>Site Ayarları</span>
        </a>
    </li>


</ul>
