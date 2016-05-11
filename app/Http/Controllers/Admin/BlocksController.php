<?php

namespace App\Http\Controllers\Admin;

use App\Block;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class BlocksController extends BackendController
{
    protected $resourceName = null;

    protected $model = null;

    public function __construct()
    {
        $this->resourceName = 'blocks';
        $this->model = new Block();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->get('page') : null;

        $items = $page ? $this->model->wherePage($page)->get() : collect();

        return view('admin.'.$this->resourceName.'.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $pageAlias = $this->hasParamInPreviousUrl('page', $request);

        return view('admin.'.$this->resourceName.'.create', compact('pageAlias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'alias' => 'required|unique:blocks,alias',
        ]);

        $item = $this->model->create($request->all());

        return redirect(route('admin.'.$this->resourceName.'.index') . '?page='.$item->page);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->model->findOrFail($id);

        return view('admin.'.$this->resourceName.'.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'alias' => 'required|unique:' . $this->model->getTable() . ',alias,'.$id
        ]);

        $item = $this->model->findOrFail($id);

        $item->update($request->all());

        return redirect(route('admin.'.$this->resourceName.'.index') . '?page='.$item->page);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Получаем параметр category из previous url, для того чтобы при создании выбиралась нужная каегория
     *
     * @param $param
     * @param Request $request
     * @return string|bool
     */
    public function hasParamInPreviousUrl($param, Request $request)
    {
        $previousUrl = $request->session()->previousUrl();
        parse_str(parse_url($previousUrl, PHP_URL_QUERY), $queryParams);

        return isset($queryParams[$param]) ? $queryParams[$param] : false;
    }
}
