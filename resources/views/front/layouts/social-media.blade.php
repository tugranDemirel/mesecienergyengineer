@if(!is_null($_siteSetting->facebook))
    <a href="{{ $_siteSetting->facebook }}"><i class="fab fa-facebook-f"></i></a>
@endif
@if(!is_null($_siteSetting->instagram))
    <a href="{{ $_siteSetting->instagram }}"><i class="fab fa-instagram"></i></a>
@endif
@if(!is_null($_siteSetting->twitter))
    <a href="{{ $_siteSetting->twitter }}"><i class="fab fa-twitter"></i></a>
@endif
@if(!is_null($_siteSetting->linkedin))
    <a href="{{  $_siteSetting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
@endif
