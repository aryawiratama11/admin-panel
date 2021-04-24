<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAdminUserPasswordRequest;
use App\Http\Resources\AdminUserResource;
use App\Repositories\AdminUserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    private $adminUserRepository;
    private $roles;

    /**
     *@param AdminUserRepositoryInterface
     */
    public function __construct(AdminUserRepositoryInterface $adminUserRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
        $this->roles = Role::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminUsers = $this->adminUserRepository->all();
        $roles = Role::all();

        return view('admin.users.index', [
            'users' => AdminUserResource::collection($adminUsers),
            'roles' => $roles,
            'module' => 'users',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $adminUser = $this->adminUserRepository->find($id);
        return view('admin.users.edit', [
            'admin_user' => $adminUser,
            'roles' => $this->roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminUser)
    {
        //
    }

    /**
     * Update the specified user password in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function changePassword(UpdateAdminUserPasswordRequest $request, $id)
    {
        $adminUser = $this->adminUserRepository->find($id);

        if (Crypt::decrypt($adminUser->password) == $request->current_password) {
            $adminUser->password = Crypt::encrypt($request->new_password);
            $adminUser->save();
            return redirect()
                ->route('admin.users.edit', $adminUser)
                ->with('status', true)
                ->with('message', 'Password Changed Successfully');
        }

        return redirect()
            ->route('admin.users.edit', $adminUser)
            ->with('status', false)
            ->with('message', 'Current Password Incorrect')
            ->with('current_tab', 'change_password');
    }
}
