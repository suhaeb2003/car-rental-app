<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWT_Token
{
    /**
     * Create a new class instance.
     */
    public static function CreateToken($userEmail, $userId){
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'www.car-renatal.com',
            'iat' => time(),
            'exp' => time() + 60 * 60 * 12,
            'userEmail' => $userEmail,
            'userId' => $userId
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function TokenVerify($token){
        try {
            if (!$token) {
                return 'Unauthorized';
            } else {
                $key = env('JWT_KEY');
                $decode = JWT::decode($token, new Key($key, 'HS256'));
                return $decode;
            }
        } catch (Exception $e) {
            return 'Unauthorized';
        }
    }
}
