<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\hash;
use App\Models\Student;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller
{
    public function register(Request $req)
    {
        $stu =new Student();
        $stu->name=$req->name;
        $stu->email=$req->email;
        $stu->password=Hash::Make($req->password);
       
        $stu->age=$req->age;
     
        $file = $req->file('image') ;
        $fileName = time().'_'.$req->image->getClientOriginalName();
        $destinationPath = 'productimages/'.$fileName ;
        $file->move(public_path('productimages'),$fileName);
       // $file_path = '/storage/' . $filePath;
        $stu->image = $destinationPath;
        
        $stu->save();
        $req->session()->put('student',$req->name);
         return redirect('users');
        // $req->session()('user'.$req->name);
        // return redirect('register')->with('Message', 'Registration Sucessfull.');;


    }
    public function fetch_student()
    {
        $result=Student::paginate(4);
        return view('usersData',compact("result"));
    }
    public function edit_student($id)
    {
        $result=Student::find($id);
        return view('editform',compact("result"));
    }
    public function update_student(Request $req,$id)
    {
        $stu= Student::find($id);
        $stu->name=$req->name;
        $stu->email=$req->email;
        $stu->password=$req->password;
        $stu->age=$req->age;
        if ($req->image !=null) {
            if(!$stu->image){
                $file = $req->file('image') ;
                $fileName = time().'_'.$req->image->getClientOriginalName();
                $destinationPath = 'productimages/'.$fileName ;
                $file->move(public_path('productimages'),$fileName);
               // $file_path = '/storage/' . $filePath;
                $stu->image = $destinationPath;
            }else{
               // Storage::delete(storage_path().$slider->image);
                if (file_exists(public_path($stu->image))) {
                    unlink(public_path($stu->image));
                }
           
                $file = $req->file('image') ;
                $fileName = time().'_'.$file->getClientOriginalName() ;
                $destinationPath = 'productimages/'.$fileName ;
                $file->move(public_path('productimages'),$fileName);
                $stu->image = $destinationPath;
            }
        }
      
        $stu->save();
        return redirect('users');
        
    }
    public function delete_student($id)
    {
        $result=Student::find($id)->delete();
        return redirect('users');
    }
    public function login(Request $req)
    {
        $stu = Student::where('email',$req->email)->first();
        if($stu && Hash::Check($req->password,$stu->password))
        {
            
            $req->session()->put('student',$stu->name);
            $req->session()->put('image2',$stu->image);
            
            return view('dashboard');
        }
        
        else{
            return view('login');
        }
    }

    // public function login(Request $req)
    // {
    //     $user=Register::where('email',$req->input('email'))->get();
    //    // 'confirmpassword'=>($request->get('same:password')),
    //    if(Crypt::decrypt($user[0]->password==$req->email)){

    //    }
    // }
}
