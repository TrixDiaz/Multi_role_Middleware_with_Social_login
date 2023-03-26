@if(session()->has('success'))
    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)" class="alert alert-success alert-dismissible fade show position-absolute top-1 end-0 mx-2 mt-2 " role="alert">
        <i class="bi bi-info-circle"><span>&nbsp;{{ session('success') }}</span> </i>  
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
    </div>
@endif

@if(session()->has('warning'))
    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)" class="alert alert-warning alert-dismissible fade show position-absolute top-1 end-0 mx-2 mt-2 " role="alert">
        <i class="bi bi-info-circle"><span>&nbsp;{{ session('warning') }}</span> </i>  
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
    </div>
@endif

@if(session()->has('error'))
    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)" class="alert alert-danger alert-dismissible fade show position-absolute top-1 end-0 mx-2 mt-2 " role="alert">
        <i class="bi bi-info-circle"><span>&nbsp;{{ session('error') }}</span> </i>  
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
    </div>
@endif

@if(session()->has('message'))
    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)" class="alert alert-info alert-dismissible fade show position-absolute top-1 end-0 mx-2 mt-2 " role="alert">
        <i class="bi bi-info-circle"><span>&nbsp;{{ session('message') }}</span> </i>  
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
    </div>
@endif