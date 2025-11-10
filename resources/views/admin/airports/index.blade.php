@extends('layouts.admin')
@section('content')
@can('airport_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.airports.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.airport.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Airport', 'route' => 'admin.airports.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.airport.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Airport">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.slug') }}
                    </th>
                    <th>{{ trans('cruds.airport.fields.source') }}</th>
                       <th>{{ trans('cruds.airport.fields.distance') }}</th> 
                    <th>{{ trans('cruds.airport.fields.mini') }}</th>
<th>{{ trans('cruds.airport.fields.sedan') }}</th>
<th>{{ trans('cruds.airport.fields.suv') }}</th>
<th>{{ trans('cruds.airport.fields.innova') }}</th>
                    <th>
                        {{ trans('cruds.airport.fields.image') }}
                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.sort_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.meta_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.airport.fields.meta_description') }}
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
@can('airport_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.airports.massDestroy') }}",
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
    ajax: "{{ route('admin.airports.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'slug', name: 'slug' },
{ data: 'source_name', name: 'source.name' },
{ data: 'distance', name: 'distance' },
{ data: 'mini', name: 'mini' },
{ data: 'sedan', name: 'sedan' },
{ data: 'suv', name: 'suv' },
{ data: 'innova', name: 'innova' },
{ data: 'image', name: 'image', sortable: false, searchable: false },
{ data: 'sort_description', name: 'sort_description' },
{ data: 'meta_title', name: 'meta_title' },
{ data: 'meta_description', name: 'meta_description' },

{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Airport').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection