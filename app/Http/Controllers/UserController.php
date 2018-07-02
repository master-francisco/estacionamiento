<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use Auth;
use App\User;
use \Toastr;
use Intervention\Image\ImageManagerStatic as Image;
class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function createUser(Request $request){
        $user = new User();
        $personal = new PersonalInformation();
        $data = $request->all();
        $user ->name=$data['name'];
        $user->surname=$data['surname'];
        $user->role=$data['role'];
        $user->email=$data['email2'];
        $user->password=bcrypt($data['password']);

        if(!$user->save()){
            Toastr::warning("El usuario no se creado");
        }else{
            Toastr::success("El usuario se creado  correctamente");
            $user->save();
    
        }
        return redirect()->back();
        
    }
    public function getUsers()
    {
        $users = User::orderBy('created_at', 'asc')->get();
        return view('admin.settings-user', ['users' => $users]);
    }
    public function getViewUser()
    {
        return view('admin.user');
    }
    public function imageUpdate(Request $request){
        if ($request->hasFile('image')) {
			$avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $path = public_path('imagenes/users/' . $filename);
			Image::make($avatar)->resize(300, 300)->save($path);
			$user = Auth::user();
			$user->image = $filename;
            $user->save();
            return redirect()->back();
		}
	}
    

    public function index()
    {
        return view('user.profile');
    }
    public function inicio(){
        return view('admin.dashboard');
    }
    public function updateUser(Request $request){
        $informacion = User::where('id','=',Auth::user()->id)->first();
        $name=$request->get('name');
        $surname=$request->get('surname');
        $email=$request->get('email');
        if($name != null){
        $informacion->name=$name;
        }
        if($surname != null){
            $informacion->surname=$surname;
        }
        if($email != null){
            $informacion->email=$email;
        }
        if(!$informacion->save()){
            Toastr::success("El usuario no se actualizado  correctamente");
        }else{
            $informacion->save();
        }
       
        return redirect()->back();
    }

    public function UpdateInformation(Request $request){
        $datos = PersonalInformation::where('email','=', Auth::user()->email)->first();
        $career = $request->get('career');
        $grade = $request->get('grade');
        $turn = $request->get('turn');
        $phone = $request->get('number_phone');

        if($career !=null){
            $datos ->career = $career;
        }
        if($grade !=null){
            $datos->grade = $grade;
        }
        if($turn !=null){
            $datos->turn = $turn;
        }
        if($phone !=null){
            $datos->number_phone = $phone;
        }
        if(!$datos->save()){
        Toastr::success("La informacion no se actualizado");
        }
        else{
            $datos->save();
            Toastr::success("La informacion se actualizado correctamente");
        }
        return redirect()->back();
    }
    private function createInformacion(Request $request){
        if(PersonalInformation::where('email', '=', Auth::user()->email)->first() == null){
            $personalInformation = new PersonalInformation;
            $personalInformation->fill($request->all());
            $personalInformation->save();
            }

        }
        public function ActualizarInformacion(Request $request)
        {

        if (!$this->personalInformationExists()) {
            $request->request->add(['email' => Auth::user()->email]);
            $this->createInformacion($request);
        }
        else if($request->has('career') || $request->has('grade')||$request->has('turn')||$request->has('number_phone') && $request->has('name')|| $request->has('surname')){
            $this->UpdateInformation($request);
            $this->updateUser($request);
        }
        return redirect()->back();
        }
        private function personalInformationExists(){
        return (PersonalInformation::where('email', '=', Auth::user()->email)->first() != null);
        }
    
    public function deleteUser($id_user){
        $user=User::where('id',$id_user)->first();

        if($user->id == Auth::user()->id){
            Toastr::warning("El usuario no se puede eliminar");
            return redirect()->back();
        }
        Toastr::success("El usuario se eliminado  correctamente");
        $user->delete();
        return redirect()->back();
    }
}
