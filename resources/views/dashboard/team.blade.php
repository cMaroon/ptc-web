{{--
    Copyright 2018 The Lost Island : Battle Royale

    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.

    TLIBR Web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.
    
    You should have received a copy of the GNU Affero General Public License
    along with TLIBR Web. If not, see <http://www.gnu.org/licenses/>.
--}}

@extends('master', ['titlePrepend' => 'Dashboard', 'currentSection' => 'Team'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.dashboard_sidepanel')
        </div>

        <div class="col-lg-9">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <form action="{{ route('dashboard.team.store') }}" class="needs-validation" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="POST">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" placeholder="Name">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {!! $errors->first('name') !!}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="description">Description</label>
                                <input name="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" value="{{ old('description') }}" placeholder="Description">
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {!! $errors->first('description') !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </form>
                </div>
            </div>

            @if (count($employees) > 0)
                <div class="card rounded-0">
                    <div class="card-body">
                        @if (count($employees) > 1) 
                            <button type="submit" onclick="saveSort();" class="btn btn-primary mb-2">Save Sort Order</button>
                        @endif
                        <table class="table-sm table-team">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width: 280px !important;">Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="ui-sortable">
                                @foreach ($employees as $employee)
                                    <tr id="{{ $employee->id }}">
                                        <td>{{ $employee->name }}</td>
                                        <td style="width: 280px !important;">{{ $employee->description }}</td>
                                        <td><a href="#">Update</a> <a href="{{ route('dashboard.team.delete', $employee->id) }}" class="text-danger" onclick="event.preventDefault(); $('#delete-employee-' + {{ $employee->id }}).submit();">Delete</a></td>
                                    </tr>

                                    <form id="delete-employee-{{ $employee->id }}" action="{{ route('dashboard.team.delete', $employee->id) }}" method="POST" style="visibility: none;" onsubmit="return confirmDelete()">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                @endforeach
                            </tbody>
                        </table>                    
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<form id="update-sort" action="{{ route('dashboard.team.update.sortorder') }}" method="POST" style="visibility: none;">
    @csrf
    <input type="hidden" name="sort_order" id="sort_order"> 
    <input type="hidden" name="_method" value="PUT">
</form>
@endsection

@section('script')
<script>
/**
 * For Sort Order
 */
 function saveSort() {
    var selectedLanguage = new Array();
    $('#ui-sortable tr').each(function() {
        selectedLanguage.push($(this).attr("id"));
    });
    $("#sort_order").val(selectedLanguage);
    $('#update-sort').submit();
}

/**
 * Confirm Delete
 * Just call it
 */
 function confirmDelete() {
    if (!confirm('Do you want to delete this employee?')) {
        event.preventDefault();
    }
}
</script>
@endsection