<?php

namespace App\Http\Controllers\Front;

use App\Events\SubscriptionVerifyEvent;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\SubscriptionVerify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
    public function subscription(Request $request)
    {
        $email = $request->email;
        $subscriber = Subscription::query()->where('email', $email)->first();

        if ($subscriber) {
            if ($subscriber->email_verified_at) {
                alert()->warning('Diqqət!', 'Siz artıq abunə olmusunuz!');
                return redirect()->back();
            }

            $subscriber_verify = SubscriptionVerify::query()->where('email', $subscriber->email)->first();
            if ($subscriber_verify) {
                $verify_send_time = $subscriber_verify->created_at;
                $true_verify_time = Carbon::parse($verify_send_time)->addHour()->format('Y-m-d H:i:s');
                $two_date_different = Carbon::parse(date('Y-m-d H:i:s'))->diffInMinutes($true_verify_time);

                if ($true_verify_time >= date('Y-m-d H:i:s'))
                {
                    alert()->warning('Diqqət!', "Sizə daha əvvəl doğrulama emaili göndərilmişdir! Zəhmət olmasa spam qutusunu yoxlayın və ya $two_date_different dəqiqə sonra təkrar sınayın ");
                    return redirect()->back();
                }

                $subscriber_verify->delete();
            }

        }

        if (!$subscriber) {
            Subscription::query()->create([
                'email' => $email
            ]);
        }

        $token = Str::random(40);

        SubscriptionVerify::query()->create([
            'email' => $email,
            'token' => $token
        ]);

        event(new SubscriptionVerifyEvent($token, $email));

        alert()->success('Təbriklər!', 'Sizə doğrulama emaili göndərildi!');
        return redirect()->back();
    }

    public function verify(Request $request)
    {
        $token = $request->token;

        $subscriber_verify = SubscriptionVerify::query()->where('token', $token)->first();

        if (!$subscriber_verify) {
            alert()->error('Diqqət!', 'Doğrulama mailin müddəti bitmişdir!');
            return redirect()->back();
        }

        $subscriber = Subscription::query()->where('email', $subscriber_verify->email)->first();
        $subscriber_verify->delete();

        $subscriber->update([
            'email_verified_at' => now(),
        ]);

        alert()->success('Təbriklər!', 'Siz abunə oldunuz!');
        return redirect()->back();
    }
}
