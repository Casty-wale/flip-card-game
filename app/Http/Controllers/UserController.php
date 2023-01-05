<?php

namespace App\Http\Controllers;

use App\Action\SmsSender;
use App\Jobs\CustomerDataJob;
use App\Mail\SendCodeMail;
use App\Models\Promo;
use App\Models\User;
use App\Models\ValidationCode;
use App\Notifications\CodeNotification;
use App\Services\CodeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $peace1 = Str::random(100);
        // $peace2 = hash('sha256', $peace1, false);

        // $cons = hash('sha256', 12);
        $cons = sha1('Sorry the answer is wrong');
        // $pros = hash_equals((string)1,(string)$cons);
        $pros = hash_equals('1',(string)1);

        // $cons = Hash ::make(1);
        // $pros = Hash::check(1, $cons);

        // abort_if(!$user, 403);
        // abort_if(! hash_equals((string) $request->hash,
        // sha1($user->getEmailForVerification())), 403);


        // $con = $peace2 == $peace1;

        // return $peace1."<br><br><br>".$peace2."<br><br><br>".$cons."<br><br><br>".$pros."<br><br><br>".$peace1."o111sis";
        return $cons."<br><br><br>".$pros;
        // return $pros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hash)
    {
        if(Cookie::has('promoValue') && Cookie::has('state')){
            if(Cookie::get('promoValue') === $hash){
                $id = Cookie::get('promoCode');
                $data = Promo::find($id);
                    if($data){
                        if($data->promoDetails !== "Sorry, Please Try Again"){
                            return response()
                                ->view('forms.app')
                                ->cookie('state', 'on_going', 5)
                                ->cookie('promoCode', $id, 3);
                        }
                    }
            }
        }

        return redirect('/');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Cookie::has('promoCode') && Cookie::has('state')){
            if(Cookie::get('state') === "on_going"){
                $promo_id = Cookie::get('promoCode');
                $data = Promo::find($promo_id);
                if($data){
                    if($data->promoDetails !== "Sorry, Please Try Again"){

                        $promo_id = $data->id;
                        $validData = $request->validate([
                        "fullName"=>"required|string",
                        // "email"=>"required|email:rfc,dns",
                        "email"=>"required|email",
                        "phoneNumber"=>"required|digits:10",
                        ]);

                        CustomerDataJob::dispatch($validData, $promo_id);

                        return view('forms.info');
                    }
                }
            }

        }

        return redirect('/');
        // $prCode = 254565;

        // $takerSMS = (new SmsSender())->sendingSms($prCode, $validData);

        // dd($takerSMS);

        // Mail::to("James@gmail.com")->send(new SendCodeMail);
        // if(!Mail::to("James@gmail.com")->send(new SendCodeMail())){
        //     return "am in";
        // }else{
        //     return "am out";
        // }
        // $top = Mail::to("James@gmail.com")->send(new SendCodeMail());

        // dd($top);
        // CustomerDataJob::dispatch($validData, $promo_id);

        // $taker = (new CodeService())->verifyCode();

        // dd($taker);

        // $user = User::create([
        //     'name' => $validData['fullName'],
        //     'email' => $validData['email'],
        //     'phoneNumber' => $validData['phoneNumber'],
        //     'deviceType' => 'phone'.$validData['phoneNumber'],
        // ]);

        // $user->notify();
        // $user->notify(new CodeNotification());
        
        // return view('forms.info');
        // return view('forms.info',[
        //     'va_data'=>$user
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
