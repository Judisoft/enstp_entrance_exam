{{-- <style>
    nav{
        border-bottom: 2px solid var(--dark);
    }
</style> --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
      <h3 class="form_title text-uppercase">Competitive Entrance Examination Registration</h3>
      @foreach ($programs as $program)
        <small class="p-3">{{ $program->title }}</small>
      @endforeach
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-3" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item ml-5">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div> --}}
    </div>
  </nav>