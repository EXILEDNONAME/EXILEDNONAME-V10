@extends('layouts.backend.default')

@push('head')
<link rel="stylesheet" type="text/css" href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" />
@endpush

@push('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-custom card-stretch gutter-b" data-card="true" id="exilednoname_card">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> {{ __('default.label.main') }} </h3>
        </div>
        <div class="card-toolbar">
          <a href="{{ URL::Current() }}/create" class="btn btn-icon btn-xs btn-hover-light-primary"><i class="fas fa-plus"></i></a>
          <a id="table-refresh" class="btn btn-icon btn-xs btn-hover-light-primary"><i class="fas fa-sync-alt"></i></a>
          <div data-toggle="collapse" data-target="#collapse-filter" aria-expanded="true"><a class="btn btn-icon btn-xs btn-hover-light-primary"><i class="fas fa-filter"></i></a></div>
          <div class="dropdown dropdown-inline" bis_skin_checked="1">
            <button type="button" class="btn btn-clean btn-xs btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-download"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" bis_skin_checked="1">
              <ul class="navi navi-hover py-5">
                <li class="navi-item"><a href="javascript:void(0);" class="navi-link" id="export_copy"><i class="navi-icon fa fa-copy"></i> {{ __('default.label.export.copy') }} </a></li>
                <li class="navi-item"><a href="javascript:void(0);" class="navi-link" id="export_excel"><i class="navi-icon fa fa-file-excel"></i> {{ __('default.label.export.excel') }} </a></li>
                <li class="navi-item"><a href="javascript:void(0);" class="navi-link" id="export_pdf"><i class="navi-icon fa fa-file-pdf"></i> {{ __('default.label.export.pdf') }} </a></li>
                <li class="navi-item"><a href="javascript:void(0);" class="navi-link" id="export_print"><i class="navi-icon fa fa-print"></i> {{ __('default.label.export.print') }} </a></li>
              </ul>
            </div>
          </div>
          <a href="javascript:void(0);" class="btn btn-icon btn-xs btn-hover-light-primary" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
          <div id="collapse_bulk" class="collapse">
            <div class="dropdown">
              <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                <a class="btn btn-icon btn-xs btn-hover-light-primary mr-1" data-toggle="tooltip" data-original-title="{{ __('default.label.action') }}"><i class="fas fa-ellipsis-h"></i></a>
              </div>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                <ul class="navi navi-hover py-4">
                  @if (empty($active) || $active == 'true')
                  <li class="navi-item"> <a href="javascript:void(0);" class="navi-link selected-active"> {{ __('default.label.selected-active') }} </a></li>
                  <li class="navi-item"> <a href="javascript:void(0);" class="navi-link selected-inactive"> {{ __('default.label.selected-inactive') }} </a></li>
                  @endif
                  <li class="navi-item"> <a href="javascript:void(0);" class="navi-link selected-delete"> {{ __('default.label.selected-delete') }} </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body" id="exilednoname_body">
        <table class="table table-hover table-separate table-head-custom table-checkable table-sm rounded" id="exilednoname_table">
          <thead>
            <tr>
              <th class="no-export"> </th>
              <th> No. </th>
              @yield('table-header')
              <th class="no-export"> </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>
<script>
"use strict";

var sort = {!! json_encode($sort) !!};
var table = $('#exilednoname_table').DataTable({
  serverSide: true,
  searching: true,
  rowId: 'Collocation',
  select: {
    style: 'multi',
    selector: 'td:first-child .checkable',
  },
  ajax: {
    url: "{{ URL::current() }}",
  },
  headerCallback: function(thead, data, start, end, display) {
    thead.getElementsByTagName('th')[0].innerHTML = `
    <label class="checkbox checkbox-single checkbox-solid checkbox-primary mb-0">
    <input type="checkbox" value="" class="group-checkable"/>
    <span></span>
    </label>`;
  },
  "lengthMenu": [[50, 100, 250, 500, -1], [50, 100, 250, 500, "All"]],
  buttons: [
    { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'excelHtml5', exportOptions: {  columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
  ],
  columns: [
    {
      data: 'checkbox', orderable: false, searchable: false, 'width': '1',
      render: function(data, type, row, meta) { return '<label class="checkbox checkbox-single checkbox-primary mb-0"><input type="checkbox" data-id="' + row.id + '" class="checkable"><span></span></label>'; },
    },
    {
      data: 'autonumber', orderable: true, searchable: false, 'className': 'align-middle text-center', 'width': '1',
      render: function(data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1; }
    },
    @yield('table-body')
    {
      data: 'action',
      orderable: false,
      searchable: false,
      'width': '1',
      render: function(data, type, row) {
        return '' +
        '<div class="dropdown dropdown-inline">' +
        '<button type="button" class="btn btn-hover-light-dark btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ki ki-bold-more-ver"></i></button>' +
        '<div class="dropdown-menu dropdown-menu-xs" style="">' +
        '<ul class="navi navi-hover py-5">' +
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '" class="navi-link"><span class="navi-icon"><i class="flaticon2-expand"></i></span><span class="navi-text">{{ __("default.label.view") }}</span></a></li>' +
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '/edit" class="navi-link"><span class="navi-icon"><i class="flaticon2-contract"></i></span><span class="navi-text">{{ __("default.label.edit") }}</span></a></li>' +
        '<li class="navi-item"><a href="javascript:void(0);" class="navi-link delete" data-id="' + row.id + '"><span class="navi-icon"><i class="flaticon2-trash"></i></span><span class="navi-text"> {{ __("default.label.delete./") }} </span></a></li>' +
        '</ul>' +
        '</div>' +
        '</div>';
      },
    },
  ],
  order: [
    [sort, 'asc']
  ]
});

@include('layouts.backend.__extension.javascript.table-refresh')
</script>
@endpush
