<div>
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Anasayfa</a></li>
            <li class="breadcrumb-item"><a href="#">{{ isset($name) ? $name : '' }}</a></li>
        </ol>
        <h6 class="slim-pagetitle">{{ isset($name) ? $name : '' }}</h6>
    </div>
</div>
