@extends('layouts.admin')
@section('content')
@can('blog_post_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.blog-posts.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.blogPost.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.blogPost.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-BlogPost">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.slug') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.small_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.main_image') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.meta_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.meta_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.blogPost.fields.blog_category') }}
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
@can('_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.blog-posts.massDestroy') }}",
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
    ajax: "{{ route('admin.blog-posts.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'title', name: 'title' },
{ data: 'slug', name: 'slug' },
{ data: 'small_description', name: 'small_description' },
{ data: 'main_image', name: 'main_image', sortable: false, searchable: false },
{ data: 'meta_title', name: 'meta_title' },
{ data: 'meta_description', name: 'meta_description' },
{ data: 'blog_category', name: 'blog_categories.title' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-BlogPost').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection