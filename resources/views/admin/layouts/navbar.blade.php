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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projelerimiz.index') }}">
            <i class="icon ion-android-list"></i>
            <span>Projelerimiz</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.proje-kategorisi.index') }}">
            <i class="icon ion-android-bookmark"></i>
            <span>Proje Kategorisi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.site-ayarlari.index') }}">
            <i class="icon ion-ios-cog-outline"></i>
            <span>Site Ayarları</span>
        </a>
    </li>

</ul>
