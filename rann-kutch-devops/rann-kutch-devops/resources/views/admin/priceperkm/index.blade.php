@extends('layouts.admin')
@section('content')
@can('priceperkm_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.priceperkm.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.priceperkm.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.priceperkm.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-priceperkm">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.priceperkm.fields.id') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.priceperkm.fields.mini_price_per_km') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.priceperkm.fields.sedan_price_per_km') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceperkm.fields.suv_price_per_km') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceperkm.fields.innova_price_per_km') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceperkm.fields.driver_allowance_per_day') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($priceperkm as $key => $priceperkm)
                        <tr data-entry-id="{{ $priceperkm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $priceperkm->id ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $priceperkm->mini_price_per_km ?? '' }}
                            </td> --}}
                            <td>
                                {{ $priceperkm->sedan_price_per_km ?? '' }}
                            </td>
                            <td>
                                {{ $priceperkm->suv_price_per_km ?? '' }}
                            </td>
                            <td>
                                {{ $priceperkm->innova_price_per_km ?? '' }}
                            </td>
                            <td>
                                {{ $priceperkm->driver_allowance_per_day ?? '' }}
                            </td>
                            <td>
                                @can('priceperkm_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.priceperkm.show', $priceperkm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('priceperkm_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.priceperkm.edit', $priceperkm->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('priceperkm_delete')
                                    <form action="{{ route('admin.priceperkm.destroy', $priceperkm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('priceperkm_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.priceperkm.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-priceperkm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
