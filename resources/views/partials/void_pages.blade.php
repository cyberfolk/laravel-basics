<section id="void_page" class="py-5 text-center">
    <div class="alert alert-danger" role="alert">
        <h3 class="text-uppercase fw-bold"> !!! {{Route::currentRouteName()}} !!! </h3> 
        <h4>Al momento è vuota</h4>
        <h3>
            <span>Vai a</span>
            <a href="{{route('movies')}}">Movies</a>
        </h3>
    </div>
</section> 
<!-- /#void_page -->
