<?php

namespace App\Http\Controllers;

use App\Models\EmailSubscription;
use App\Models\User;
use Illuminate\Http\Request;

class EmailSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = EmailSubscription::where(['email'=>$request->email])->first();   
        if($user){
            return response()->json(['success'=>false,'data'=>'Your email is already in our community list.']);
        }else{  
            $data = new EmailSubscription;
            // $data->name = $request->name;
            $data->email = $request->email; 
            $data->save(); 
            $email = $request->email;
            MailController::leadEmail($email);
            MailController::leadInform($email);

            return response()->json(['success'=>true,'data'=>'Welcome to our community. You will receive important updates in your email.']);
        }       
        
    }
  
    public function contactForm(Request $request)
    {       
        $name = $request->name;
        $email = $request->email; 
        $phone = $request->phone; 
        $subject = $request->subject; 
        $message = $request->message; 

        //MailController::contactEmail($name, $email, $phone, $subject, $message);
        return response()->json(['success'=>true,'data'=>'Your query has been sent. We will be in touch with you soon.']);                   
    }
    public function partnerForm(Request $request)
    {       
        $name = $request->name;
        $email = $request->email; 
        $phone = $request->phone; 
        $subject = 'Partner'; 
        $message = $request->message; 

        //MailController::contactEmail($name, $email, $phone, $subject, $message);
        return response()->json(['success'=>true,'data'=>'Your query has been sent. We will be in touch with you soon.']);                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailSubscription  $emailSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(EmailSubscription $emailSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailSubscription  $emailSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailSubscription $emailSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailSubscription  $emailSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailSubscription $emailSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailSubscription  $emailSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailSubscription $emailSubscription)
    {
        //
    }
}
