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
                    {!! Form::open([
                        'route'  => 'dashboard.team.store',
                        'class'  => 'needs-validation',
                        'method' => 'POST',
                    ]) !!}
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), [
                                    'id'          => 'name',
                                    'class'       => 'form-control'.($errors->has('name') ? ' is-invalid' : ''),
                                    'placeholder' => 'Name',
                                ]) !!}
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {!! $errors->first('name') !!}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-8 mb-3">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description', old('description'), [
                                    'id'          => 'description',
                                    'class'       => 'form-control'.($errors->has('description') ? ' is-invalid' : ''),
                                    'placeholder' => 'Description',
                                ]) !!}
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {!! $errors->first('description') !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                        {!! Form::submit('Add Employee', [
                            'class' => 'btn btn-primary btn-lg',
                        ]) !!}
                        {!! Form::hidden('_method', 'POST') !!}
                    {!! Form::close() !!}
                </div>
            </div>

            @if (count($employees) > 0)
                <div class="card rounded-0">
                    <div class="card-body">
                        @if (count($employees) > 1) 
                            {!! Form::button('Save Sort Order', [
                                'class'   => 'btn btn-primary btn-lg mb-2',
                                'onclick' => 'saveSort();',
                            ]) !!}
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
                                        <td>
                                            {!! Form::button('Delete', [
                                                'class'   => 'btn btn-danger btn-sm',
                                                'onclick' => 'event.preventDefault(); $(\'#delete-employee-'.$employee->id.'\').submit();',
                                            ]) !!}
                                        </td>
                                    </tr>
                                    
                                    {!! Form::open([
                                        'route'    => ['dashboard.team.delete', $employee->id],
                                        'id'       => 'delete-employee-'.$employee->id,
                                        'method'   => 'POST',
                                        'onsubmit' => 'return confirmDelete()',
                                        'style'    => 'visibility: none;',
                                    ]) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::close() !!}
                                @endforeach
                            </tbody>
                        </table>                    
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

{!! Form::open([
    'route'  => 'dashboard.team.update.sortorder',
    'id'     => 'update-sort',
    'method' => 'POST',
    'style'  => 'visibility: none;',
]) !!}
    {!! Form::hidden('sort_order', null, ['id' => 'sort_order']) !!}
    {!! Form::hidden('_method', 'PUT') !!}
{!! Form::close() !!}
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