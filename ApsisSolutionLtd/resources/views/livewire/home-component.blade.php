<div>
    <h4>Home Page</h4>
    @if(Route::has('login'))
        @auth
            @if(Auth::user()->uType == 1)     {{--for Admin--}}
                <div class="alert alert-success" role="alert">Successfully Admin Login</div>
            @elseif(Auth::user()->uType == 2)   {{--Writer--}}
                <div class="alert alert-success" role="alert">Successfully Writer Login</div>
            @else     {{--for viewer--}}
                <div class="alert alert-success" role="alert">Successfully Viewer Login</div>
            @endif
        @endif
    @endif
</div>
