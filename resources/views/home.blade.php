@extends("layouts.main")

@section("content")
    {{ $title }}

    <table id="datatable_table" class="table table-striped table-bordered" cellspacing="0">
        <thead>
        <tr>
            @foreach($table_fields as $field)
                <th> {{ $field }} </th>
            @endforeach
            <th>actions</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    @include('components._datatables_init')
    @include('components._edit_form')
@endsection
