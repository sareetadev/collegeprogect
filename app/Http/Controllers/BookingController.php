<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
 use App\Http\Controllers\Exception;

class BookingController extends Controller
{
    public function Booking(){
        return view('frontend.aulayout.booking');
    }

  public function store(Request $request)
{
    $request->validate([
        'phone' => 'required',
        'email' => 'required',
    ]);
    dd($request->all());
    $payment_data = [

        'user_name' => $request->get('user_name'),
        'email' => $request->get('email'),
        'mobile' => 986639575,
        'rented_date' => $request->get('rented_date'),

        'return_date' => $request->get('return_date'),
          'card_no' => $request->get('card_no'),
         'cvv_cvc' => $request->get('card_cvc'),
        'paid_date' => $request->get('paid_date'),
        'product_name' => $request->get('product_name'),
        'order_no' => $request->get('booking_no'),
        'price' => $request->get('price'),
    ];
    $status = Booking::create($payment_data);
  //  if ($status) {
    //    try {
//            dd( env('TWILLIO_SID'), env('TWILLIO_TOKEN'));

            // Your Account SID and Auth Token from twilio.com/console
           // $sid = env('TWILLIO_SID');
           // $token = env('TWILLIO_TOKEN');
           // $client = new Client($sid, $token);
//            $otp = rand(100000,10000000);


            // Use the client to do fun stuff like send text messages!
          //  $client->messages->create(
            // the number you'd like to send the message to
              //  '+9779806892006',
               // [
                    // A Twilio phone number you purchased at twilio.com/console dd($status);
                //    'from' => '+16072845024',
                    // the body of the text message you'd like to send
                //    'body' =>"Greetings from SecondHandBazar,Below are the details of your order.OrderNo: $status->order_no,Product is: $status->product_name,Total Price: $status->price"
               // ]
           // );

       // } catch (Exception $exception) {
          //  dd($exception);
        //}
    //}
return redirect()->route('home');

}
}
