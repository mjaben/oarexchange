<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class TurnstileRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Get the secret key from config
        $secretKey = config('turnstile.secret_key');
        
        // If no secret key is configured, fail validation
        if (empty($secretKey)) {
            return false;
        }

        // Send verification request to Cloudflare
        $response = Http::asForm()->post(config('turnstile.verify_url'), [
            'secret' => $secretKey,
            'response' => $value,
            'remoteip' => request()->ip(),
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            $result = $response->json();
            return isset($result['success']) && $result['success'] === true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The captcha verification failed. Please try again.';
    }
}
