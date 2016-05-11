<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Recall;
use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;
use Snowfire\Beautymail\Beautymail;
use Validator;

class CommonController extends FrontendController
{
    /**
     * Send feedback form.
     *
     * @param Request $request
     * @return Response
     */
    public function feedbackSend(Request $request)
    {
        $rules = [
            'name' => 'required',
            'contact' => 'required',
//            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Введите Ваше имя. Мы же должны как-то к Вам обращаться :)',
            'contact.required' => 'Введите ваши контактные данные для обратной связи',
//            'message.required' => 'А где собственно сообщение?',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        /*$validator->after(function($validator) use ($request)
        {
            $recaptcha = new ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET'));
            $resp = $recaptcha->verify($request->get('g-recaptcha-response'), $_SERVER['REMOTE_ADDR']);

            if ( ! $resp->isSuccess())
            {
                $validator->errors()->add('google_recaptcha_error', 'Ошибка reCAPTCHA: '.implode(', ', $resp->getErrorCodes()));
            }
        });*/

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.feedback', ['input' => $request->all()], function($message)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));
            $message->to($this->settings['email'] ?: env('MAIL_ADDRESS'));
            $message->subject('Обратная связь');
        });

        if ($request->ajax()){
            return json_encode([
                'status' => 'ok',
                'message' => 'Сообщение отправлено',
            ]);
        }

        return redirect(route('feedback'))->with('status', 'Сообщение отправлено');
    }

    /**
     * Send get info form.
     *
     * @param Request $request
     * @return Response
     */
    public function getInfoSend(Request $request)
    {
        $rules = [
            'name' => 'required',
            'contact' => 'required',
//            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Введите Ваше имя. Мы же должны как-то к Вам обращаться :)',
            'contact.required' => 'Введите ваши контактные данные для обратной связи',
//            'message.required' => 'А где отзыв?',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.get_info', ['input' => $request->all()], function($message)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));
            $message->to($this->settings['email'] ?: env('MAIL_ADDRESS'));
            $message->subject('Запрос на инфорамацию');
        });

        if ($request->ajax()){
            return json_encode([
                'status' => 'ok',
                'message' => 'Запрос на инфорамацию',
            ]);
        }

        return redirect(route('index'))->with('status', 'Запрос на инфорамацию');
    }

    /**
     * Send recall form.
     *
     * @param Request $request
     * @return Response
     */
    public function recallSend(Request $request)
    {
        $rules = [
            'name' => 'required',
            'contact' => 'required',
//            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Введите Ваше имя. Мы же должны как-то к Вам обращаться :)',
            'contact.required' => 'Введите ваши контактные данные для обратной связи',
//            'message.required' => 'А где отзыв?',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        Recall::create($request->all());

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.recall', ['input' => $request->all()], function($message)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));
            $message->to($this->settings['email'] ?: env('MAIL_ADDRESS'));
            $message->subject('Отзыв');
        });

        if ($request->ajax()){
            return response()->json([
                'status' => 'ok',
                'message' => 'Отзыв отправлен',
            ]);
        }

        return redirect(route('index'))->with('status', 'Отзыв отправлен');
    }

    /**
     * Send consultation form.
     *
     * @param Request $request
     * @return Response
     */
    public function consultationSend(Request $request)
    {
        $rules = [
            'name' => 'required',
            'contact' => 'required',
//            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Введите Ваше имя. Мы же должны как-то к Вам обращаться :)',
            'contact.required' => 'Введите ваши контактные данные для обратной связи',
//            'message.required' => 'А где отзыв?',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.consultation', ['input' => $request->all()], function($message)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));
            $message->to($this->settings['email'] ?: env('MAIL_ADDRESS'));
            $message->subject('Заявка на консультацию');
        });

        if ($request->ajax()){
            return json_encode([
                'status' => 'ok',
                'message' => 'Заявка на консультацию отправлена',
            ]);
        }

        return redirect(route('index'))->with('status', 'Заявка на консультацию отправлена');
    }
}
