@if(!is_null($_siteSetting->facebook))
    <a href="{{ $_siteSetting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
@endif
@if(!is_null($_siteSetting->instagram))
    <a href="{{ $_siteSetting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
@endif
@if(!is_null($_siteSetting->twitter))
    <a href="{{ $_siteSetting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
@endif
@if(!is_null($_siteSetting->linkedin))
    <a href="{{  $_siteSetting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
@endif
