<div class="list-group tlibr-shadow mb-4">
    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard') ? ' active' : '' }}">Dashboard</a>
    <a href="{{ route('dashboard.carousel') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard/carousel') ? ' active' : '' }}">Carousel</a>
    <a href="{{ route('dashboard.tag_list') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard/tag-list') ? ' active' : '' }}">Tag List</a>
    <a href="{{ route('dashboard.news') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard/news') ? ' active' : '' }}">News</a>
    <a href="{{ route('dashboard.pages') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard/pages') ? ' active' : '' }}">Pages</a>
    <a href="{{ route('dashboard.team') }}" class="list-group-item list-group-item-action border-0 rounded-0{{ Request::is('dashboard/team') ? ' active' : '' }}">Team</a>
</div>