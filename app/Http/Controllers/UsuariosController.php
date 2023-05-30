<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UsuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use Auth;
use App\Models\Empleados;
use App\Models\Usuarios;

class UsuariosController extends AppBaseController
{
    /** @var UsuariosRepository $usuariosRepository*/
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
            
            $usuarios = DB::select("SELECT * FROM users u join  empleados e on u.epl_id=e.epl_id" );

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     *
     * @return Response
     */
    public function create()
    {   
        $empleados= Empleados::pluck('epl_nombres' , 'epl_id');
        return view('usuarios.create')
            ->with ('empleados', $empleados)
        ;   
    }

    /**
     * Store a newly created Usuarios in storage.
     *
     * @param CreateUsuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosRequest $request)
    {
        $input = $request->all();
        $input['password']=bcrypt('lolxd123');


        $usuarios = $this->usuariosRepository->create($input);

        Flash::success('Usuarios saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        return view('usuarios.show')
        ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->usuariosRepository->find($id);
        $empleados= Empleados::pluck('epl_nombres' , 'epl_id');

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')
        ->with('usuarios', $usuarios)
        ->with ('empleados', $empleados)
        ;
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param int $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($request->all(), $id);

        Flash::success('Usuarios updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuariosRepository->delete($id);

        Flash::success('Usuarios deleted successfully.');

        return redirect(route('usuarios.index'));
    }
    public function change_password(Request $request){
        $datos=$request->all();
        $usu_id=$datos['usu_id'];
        $Usuario=Usuarios::find($usu_id);
        $new_pass=$datos['new_password'];
        $confirm_new_pass=$datos['confirm_new_password'];

        if ($new_pass==$confirm_new_pass){
        $Usuario->update(['password'=>bcrypt($new_pass)]);
        Flash::success('Clave Cambiada Correctamente');
        return redirect(route('usuarios.index'));
        }else{
            Flash::error('Las claves no coinciden');
            return redirect(route('usuarios.index'));
        }

    }
    public function change_password_profile(request $request){
            $dt=$request->all();
            if (isset($dt['btn_change'])) {
                        $usu_id=Auth::user()->id;
                        $Usuario=Usuarios::find($usu_id);
                        $nueva_clave=$dt['nueva_clave'];
                        $confirmar_nueva_clave=$dt['confirmar_nueva_clave'];
                
                        if ($nueva_clave==$confirmar_nueva_clave){
                        $Usuario->update(['password'=>bcrypt($nueva_clave)]);
                        Flash::success('Clave Cambiada Correctamente');
                        return redirect(route('usuarios.index'));
                        }else{
                            Flash::error('Las claves no coinciden');
                        }
          }else{
            return view('usuarios.change_password_profile');
          }  
        
    }
}
