<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use Auth;
use App\User;
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
        $data = $request->all();
        $user ->name=$data['name'];
        $user->surname=$data['surname'];
        $user->role=$data['role'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);

        if(!$user->save()){

        }else{
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
        }
            
        return redirect()->back();
    }

    public function UpdateInformation(Request $request){
        if($this->personalInformationExists()){
            $info = PersonalInformation::where('email', '=', Auth::user()->email)->first();
            $career=$request->get('career');
            $grade=$request->get('grade');
            $turn=$request->get('turn');
            $number_phone=$request->get('number_phone');
        if($career != null){
            $info->career=$career;
        }
        if($grade != null){
            $info->grade=$grade;
        }
        if($turn !=null){
            $info->turn=$turn;
        }
        if($number_phone !=null){
            $info->number_phone=$number_phone;
        }
        if(!$info->save()){
         
        }
        return redirect()->back();
        $info->save();
    }
        }

    private function createInformation(Request $request){
        if(PersonalInformation::where('email', '=', Auth::user()->email)->first() == null){
            $personalInformation = new PersonalInformation;
            $personalInformation->fill($request->all());
            $personalInformation->save();
    }

}
        public function updateInformacion(Request $request)
        {

        if (!$this->personalInformationExists()) {
            $request->request->add(['email' => Auth::user()->email]);
            $this->createInformation($request);
        }
        else if($request->has('name') || $request->has('surname')){
            $this->updateUser($request);
            }
        else if($request->has('career') || $request->has('grade')||$request->has('turn')||$request->has('number_phone')){
            $this->UpdateInformation($request);
        }
        return redirect()->back();
        }
        private function personalInformationExists(){
        return (PersonalInformation::where('email', '=', Auth::user()->email)->first() != null);
        }
    
    public function deleteUser($id_user){
        $user=User::where('id',$id_user)->first();

        if($user->id == Auth::user()->id){
            return redirect()->back();
        }
        $user->delete();
        return redirect()->back();
    }
}
