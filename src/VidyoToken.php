<?php

namespace LaraStuffs\VidyoToken;

class VidyoToken
{
    const EPOCH_SECONDS = 62167219200;

    /**
     *  Generates a Vidyo token.
     *
     * @param string $username
     *   The username in the generator must be unique for each participant in the video call.
     *   The username field cannot contain any spaces or special characters.
     * @param integer $seconds The time in seconds for expires token.
     * @return string
     *   The token must be unique for each participant in the call; this is always the case for unique usernames.
     */
    static function generate(string $username = null, int $seconds = null): string
    {
        if (is_null($username)) {
            $username = config('vidyo.default.username');
        }
        if (is_null($seconds)) {
            $seconds = config('vidyo.default.seconds');
        }

        $expires = self::EPOCH_SECONDS + $seconds + time();
        $jid = $username . '@' . config('vidyo.app_id');
        $token = 'provision' . "\0" . $jid . "\0" . $expires . "\0";  // vCard
        $hmac = hash_hmac('sha384', utf8_encode($token), config('vidyo.developer_key'));

        return base64_encode($token . "\0" . $hmac);
    }
}
