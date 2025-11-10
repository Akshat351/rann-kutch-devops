@extends('layouts.admin')
@section('content')
@can('trip_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.trips.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.trip.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Trip', 'route' => 'admin.trips.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.trip.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Trip">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.slug') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.image') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.trip_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.mini') }}
                    </th>

                    <th>
                        {{ trans('cruds.trip.fields.sedan') }}
                    </th>

                    <th>
                        {{ trans('cruds.trip.fields.ertiga') }}
                    </th>

                    <th>
                        {{ trans('cruds.trip.fields.innova') }}
                    </th>

                    <th>
                        {{ trans('cruds.trip.fields.sort_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.meta_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.meta_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.source') }}
                    </th>
                    <th>
                        {{ trans('cruds.trip.fields.destination') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('trip_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.trips.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.trips.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'slug', name: 'slug' },
{ data: 'image', name: 'image', sortable: false, searchable: false },
{ data: 'trip_type', name: 'trip_type' },
{ data: 'mini', name: 'mini' },
{ data: 'sedan', name: 'sedan' },
{ data: 'ertiga', name: 'ertiga' },
{ data: 'innova', name: 'innova' },
{ data: 'sort_description', name: 'sort_description' },
{ data: 'meta_title', name: 'meta_title' },
{ data: 'meta_description', name: 'meta_description' },
{ data: 'source_name', name: 'source.name' },
{ data: 'destination_name', name: 'destination.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Trip').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

});

</script>
@endsection
