<div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Changelog</h4>
        </div>
    </div>

    <ul class="list-group">
        @for ( $i=0; $i < 5; $i++)
            <li class="list-group-item">Cras justo odio <small class="text-muted">2018-06-06</small></li>
        @endfor
    </ul>
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

<div class="mb-4 text-center">
    <a href="{{ route('faq') }}" class="btn btn-link btn-sm font-weight-light">FAQ</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">About</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">Contact Us</a>
    <a href="{{ route('privacy') }}" class="btn btn-link btn-sm font-weight-light">Privacy Policy</a>
    <a href="#" class="btn btn-link btn-sm font-weight-light">Career</a>
    <small class="text-muted font-weight-light">
        <p>The Lost Island : Battle Royale &copy; 2018</p>
    </small>
</div>