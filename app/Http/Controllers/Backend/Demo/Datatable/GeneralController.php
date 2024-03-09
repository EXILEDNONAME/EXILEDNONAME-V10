<?php

namespace App\Http\Controllers\Backend\Demo\Datatable;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;

class GeneralController extends Controller {

  function __construct() {
    $this->middleware(['auth']);
    $this->model = 'App\Models\Backend\Demo\Datatable\General';
    $this->path = 'pages.backend.__demo.datatable.general.';
    $this->url = '/dashboard/demos/datatables';
    $this->RequestStore = [];
    $this->RequestUpdate = [];
    $this->data = $this->model::orderby('id', 'desc')->get();
  }

  /**
  **************************************************
  * @return INDEX
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if (request()->ajax()) {
      return DataTables::of($this->data)
      ->editColumn('description', function ($order) { return nl2br(e($order->description)); })
      ->rawColumns(['description'])
      ->addIndexColumn()->make(true);
    }
    return view($this->path . 'index', compact('model'));
  }

  /**
  **************************************************
  * @return CREATE
  **************************************************
  **/

  public function create() {
    $path = $this->path;
    return view($this->path . 'create', compact('path'));
  }

  /**
  **************************************************
  * @return STORE
  **************************************************
  **/

  public function store(Request $request) {
    $validated = $request->validate($this->RequestStore);
    $store = $request->all();
    $this->model::create($store);
    return redirect($this->url)->with('success', __('default.notification.success.item-created'));
  }

  /**
  **************************************************
  * @return EDIT
  **************************************************
  **/

  public function edit($id) {
    $path = $this->path;
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . 'edit', compact('path', 'data', 'model'));
  }

  /**
  **************************************************
  * @return UPDATE
  **************************************************
  **/

  public function update(Request $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', __('default.notification.success.item-updated'));
  }


}
