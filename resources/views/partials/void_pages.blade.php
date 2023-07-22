<section id="void_page" class="py-5 text-center">
    <div class="alert alert-danger" role="alert">
        <h3 class="text-uppercase fw-bold"> !!! {{Route::currentRouteName()}} !!! </h3> 
        <h4>It's currently empty</h4>
        <h4>
            <span>Go to</span>
            <a href="{{route('trains')}}">Trains</a>
        </h4>
    </div>
</section> 
<!-- /#void_page -->
