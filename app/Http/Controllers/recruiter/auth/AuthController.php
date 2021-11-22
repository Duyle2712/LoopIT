<?php

namespace App\Http\Controllers\recruiter\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
use Validator;
use Str;


use App\Models\recruiter\TaiKhoanNTD;

class AuthController extends Controller
{
    //Đăng nhập
    public function getLogin()
    {
        return view('pages.recruiter.auth.login'); 
    }
    public function postLogin(Request $request)
    {
        $email = $request->email;
        $matkhau = $request->matkhau;

        $getTKNhaTuyenDung = TaiKhoanNTD::where('email' ,'=' , $email)->first();

        if($getTKNhaTuyenDung == null) { 

            Session::flash('message_email_recruiter', 'Email hoặc Mật Khẩu không trùng khớp !!');
            return redirect()->back()->withInput();

        } else if($getTKNhaTuyenDung->trangthaitk == 0) {
            
            Session::flash('not_verified', 'Không thể đăng nhập do chưa xác thực Email!! '); 
            return redirect()->back()->withInput();

        } else if(Hash::check($matkhau ,$getTKNhaTuyenDung->matkhau)){

            Session::put('recruiter_name',$getTKNhaTuyenDung->tennlh);
            Session::put('recruiter_id',$getTKNhaTuyenDung->id_ntd);
            return redirect()->route('recruiter.home')->with(compact('getTKNhaTuyenDung'));

        } else {
            Session::flash('message_matkhau_recruiter', 'Mật khẩu không trùng khớp !!');
            return redirect()->back()->withInput();
        }
    }

    //Đăng ký
    public function getRegister()
    {
        return view('pages.recruiter.auth.register'); 
    }
    public function postRegister(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'matkhau' => 'required|string|min:6',
            'matkhau_nhaplai' => 'required',
            'tennlh' => 'required',
            'sdt' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:15',
            // 'tencty' => 'required',
            // 'diachicty'=> 'required',
            // 'thanhpho' => 'required|not_in:0' ,
        ],[            
            'matkhau.required' => 'Mật khẩu không được để trống.',
            'matkhau.min' => 'Mật khẩu tối thiểu 6 ký tự.',
            'matkhau.max' => 'Mật khẩu tối đa 255 ký tự.',
            'matkhau_nhaplai.required' => 'Mật khẩu nhập lại không được để trống.', 
            'tennlh.required' => 'Tên người liên hệ không được để trống.',
            'sdt.required' => 'Số điện thoại không được để trống.',
            'sdt.regex' => 'Số điện thoại không đúng định dạng.',
            'sdt.not_regex' => 'Số điện thoại không đúng định dạng.',
            'sdt.min' => 'Số điện thoại tối thiểu 9 số.',
            'sdt.max' => 'Số điện thoại tối đa 15 số.',
            // 'tencty.required' => 'Tên công ty không được để trống.',
            // 'diachicty.required' => 'Địa chỉ không được để trống.',           
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($validator->passes()) {
            $IsExistRecruiter = TaiKhoanNTD::where('email' , '=' , $request->email)->first();
            if($IsExistRecruiter == null){
                $lastRow = TaiKhoanNTD::all()->last();
                if($lastRow == null){
                    $id_ntd = 'ntd1'; 
                } else {
                    $arrExplodeString = explode("ntd", $lastRow->id_ntd);
                    $sttRow = ltrim(array_pop($arrExplodeString), 0);
                    $sttRow++;
                    $id_ntd = 'ntd'.$sttRow;
                }
           
                $token = Str::random(10);  

                $taiKhoanNTD = new TaiKhoanNTD;
                $taiKhoanNTD->id_ntd = $id_ntd;
                $taiKhoanNTD->tennlh = $request->tennlh;
                $taiKhoanNTD->email = $request->email;
                $taiKhoanNTD->matkhau = bcrypt($request->matkhau);
                $taiKhoanNTD->sdt = $request->sdt;
                $taiKhoanNTD->verify_email = $token;
                $taiKhoanNTD->save();  

                $view = 'pages.recruiter.auth.mail';
                $this->sendMail($taiKhoanNTD,$token, $view);
                
                Session::flash('message_success', 'Đăng ký thành công, Vui lòng xác thực Email. 
                Nếu không tìm thấy email, hãy kiểm tra hòm thư rác !!');  
                Session::flash('email', $request->email);      
                return redirect()->route('recruiter.login');
            } else {
                Session::flash('exist_email', 'Email của bạn đã được sử dụng!!');       
                return redirect()->back()->withInput();
            }            	
        }
        
    }
    public function sendMail(TaiKhoanNTD $taiKhoanNTD, $token, $view) {
        Mail::send($view, compact('taiKhoanNTD', 'token'), function($email) use($taiKhoanNTD){
            $email->subject('LoopIT - Xác thực tài khoản Nhà tuyển dụng');
            $email->from('loopit.test@gmail.com','LoopIT');
            $email->to( $taiKhoanNTD->email , $taiKhoanNTD->tennlh );
        });
    }
    // Xác thực email đăng ký
    public function activedEmail(TaiKhoanNTD $taiKhoanNTD , $token)
    {   
        if($taiKhoanNTD->verify_email === $token){
            $taiKhoanNTD->update(['trangthaitk' => 1, 'verify_email' => null]);
            return view('pages.recruiter.auth.success_sendmail')->with('verified','Xác thực tài khoản thành công');
        } else {
            Session::flash('not_verified', 'Email xác thực không hợp lệ hoặc quá hạn!! '); 
            return redirect()->route('recruiter.login');
        }
    }

    // Gửi lại mail xác thực
    public function getSendMailAgain(){
        return view('pages.recruiter.auth.send-verify-mail-again');
    }
    public function postSendMailAgain(Request $request){
        $email = $request->email;
        $taiKhoanNTD = TaiKhoanNTD::where('email', '=' ,$email)->first();
        if($taiKhoanNTD == null){
            Session::flash('not_verified', 'Email vẫn chưa đăng đăng ký !!'); 
            return redirect()->back();
        } else {
            $view = 'pages.recruiter.auth.resend-mail';
            $token = Str::random(10); 
            $taiKhoanNTD->update(['verify_email'=>$token]);
            $this->sendMail($taiKhoanNTD,$token,$view);

            Session::flash('message_success', 'Đã gửi lại mail xác thực, Vui lòng kiểm tra mail của bạn!!');  
            Session::flash('email', $request->email);      
            return redirect()->route('recruiter.login');
        }
    }

    //Quên mật khẩu
    public function getForgetPassword(){
        return view('pages.recruiter.auth.forget-password');
    }
    public function postForgetPassword(Request $request){
        $email = $request->email;
        
        $taiKhoanNTD = TaiKhoanNTD::where('email', '=' ,$email)->first();
        if($taiKhoanNTD == null){
            Session::flash('not_verified', 'Email vẫn chưa đăng đăng ký !!'); 
            return redirect()->back()->withInput();
        } else {
            $view = 'pages.recruiter.auth.forget-password-mail';
            $token = Str::random(10); 
            $taiKhoanNTD->update(['verify_email'=>$token]);
            $this->sendMail($taiKhoanNTD,$token,$view);

            Session::flash('message_success', 'Hãy kiểm tra Email của bạn để reset mật khẩu!!');  
            Session::flash('email', $request->email);      
            return redirect()->route('recruiter.login');
        }
    }
    //Đổi mật khẩu
    public function getChangePassword(TaiKhoanNTD $taiKhoanNTD, $token){
        if($taiKhoanNTD->verify_email === $token){
            $taiKhoanNTD->update(['verify_email' => null]);
            return view('pages.recruiter.auth.change-password');
        } else {
            Session::flash('not_verified_forget_pass', 'Email xác thực không hợp lệ hoặc quá hạn!! Vào quên mật khẩu để nhận lại mail xác thực '); 
            return redirect()->route('recruiter.login');
        }      
    }
    public function postChangePassword(Request $request){
        $email = $request->email;
        $matkhau_new = bcrypt($request->matkhau);
        
        $validator = Validator::make($request->all(), [
            'matkhau' => 'required|string|min:6',
            'matkhau_nhaplai' => 'required',
            
        ],[            
            'matkhau.required' => 'Mật khẩu không được để trống.',
            'matkhau.min' => 'Mật khẩu tối thiểu 6 ký tự.',
            'matkhau.max' => 'Mật khẩu tối đa 255 ký tự.',
            'matkhau_nhaplai.required' => 'Mật khẩu nhập lại không được để trống.',        
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($validator->passes()) {
            $taiKhoanNTD = TaiKhoanNTD::where('email' , '=' , $email);
            if($taiKhoanNTD == null){
                Session::flash('not_email', 'Email vẫn chưa đăng đăng ký !!');
                return redirect()->back()->withInput();
            } else {
                $taiKhoanNTD->update(['matkhau' => $matkhau_new]);
                Session::flash('message_success', 'Thay đổi mật khẩu thành công !!');
                return redirect()->route('recruiter.login');
            }
        }
    }

    //Đăng xuất
    public function getLogout()
    {
        Session::put('recruiter_name', null);
        Session::put('recruiter_id', null);
        return redirect()->route('recruiter.login'); 
    }
}
