<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BackendController;
use App\Role;
use App\User;
use DB;
use Illuminate\Http\Request;

class AdministratorsController extends BackendController
{
    protected $resourceName = null;

    protected $model = null;

    public function __construct()
    {
        $this->resourceName = 'administrators';
        $this->model = new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = User::whereHas('roles', function ($query) {
            $query->where('role_id', 1);
        })->where('id', '<>', 1)->get();

        return view('admin.'.$this->resourceName.'.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.'.$this->resourceName.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $emailRule = $request->input('email') ? 'required|email|max:255|unique:users' : '';
        $passwordRule = $request->input('password') ? 'required|min:6' : '';

        $this->validate($request, [
            'name' => 'required',
            'email' => $emailRule,
            'password' => $passwordRule
        ]);

        $item = $this->model->create($request->all());
        $item->password = $passwordRule ? bcrypt($request->input('password')) : '';
        $item->save();

        $adminRole = Role::where('name', 'admin')->first();
        $item->attachRole($adminRole);

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return $this->model->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->model->findOrFail($id);
        $item->password = '';

        return view('admin.'.$this->resourceName.'.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $emailRule = $request->input('email') ? 'required|email|max:255|unique:users,email,' . $id : '';
        $passwordRule = $request->input('password') ? 'required|min:6' : '';

        $this->validate($request, [
            'name' => 'required',
            'email' => $emailRule,
            'password' => $passwordRule
        ]);

        $item = $this->model->findOrFail($id);

        $item->update($request->except('password') +
            ($passwordRule ? ['password' => bcrypt($request->input('password'))] : []));

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

}
