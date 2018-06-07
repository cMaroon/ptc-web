{{-- Signin will be disabled for public --}}
{{-- <div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Sign In To Proceed</h4>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">remember me</label>
                </div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="" class="btn btn-secondary">reset password</a>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Download</h4>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <p class="card-text">
                Let's get you started! <a href="#">Download at Steam</a>
            </p>
        </div>
    </div>
</div>

<div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Activities</h4>
        </div>
    </div>

    @for ( $i=0; $i < 3; $i++)
        <a href="#">
            <img class="d-block w-100 rounded mb-2" src="http://via.placeholder.com/500x180" alt="First Activity">
        </a>
    @endfor
</div>

<div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Partners</h4>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            {{-- partner lists --}}
        </div>
    </div>
</div>

<div class="mb-4 text-center">
    <a href="{{ route('faq') }}" class="btn btn-link btn-sm font-weight-light">faq</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">about us</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">contact us</a>
    <a href="{{ route('privacy') }}" class="btn btn-link btn-sm font-weight-light">privacy policy</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">development</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">career</a>
    <small class="text-muted font-weight-light">
        <p>The Lost Island : Battle Royale &copy; 2018</p>
    </small>
</div>