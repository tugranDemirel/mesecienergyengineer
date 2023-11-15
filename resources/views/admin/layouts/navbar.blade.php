<ul class="nav">
    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'admin.home') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="icon ion-ios-home-outline"></i>
            <span>Anasayfa</span>
        </a>
    </li>
    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'admin.markalarimiz.index') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.markalarimiz.index') }}">
            <i class="icon ion-android-apps"></i>
            <span>Çalışma Markalarımız</span>
        </a>
    </li>
    <li class="nav-item {{ ((strpos(Route::currentRouteName(), 'admin.projelerimiz.index') === 0 ) || (strpos(Route::currentRouteName(), 'admin.proje-kategorisi.index') === 0 )) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.projelerimiz.index') }}">
            <i class="icon ion-ios-book-outline"></i>
            <span>Projeler</span>
        </a>
    </li>
    <li class="nav-item with-sub {{ (strpos(Route::currentRouteName(), 'admin.hizmetlerimiz.index') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="#">
            <i class="icon ion-android-bookmark"></i>
            <span>Hizmetlerimiz</span>
        </a>
        <div class="sub-item">
            <ul>
                <li><a href="{{ route('admin.hizmetlerimiz.index') }}">Hizmetlerimiz</a></li>
                <li><a href="{{ route('admin.proje-kategorisi.index') }}">Hizmet Kategorisi</a></li>
            </ul>
        </div><!-- dropdown-menu -->
    </li>
    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'admin.iletisim.index') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.iletisim.index') }}">
            <i class="icon ion-android-contacts"></i>
            <span>İletişim</span>
        </a>
    </li>
    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'admin.site-ayarlari.index') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.site-ayarlari.index') }}">
            <i class="icon ion-ios-cog-outline"></i>
            <span>Site Ayarları</span>
        </a>
    </li>


</ul>
