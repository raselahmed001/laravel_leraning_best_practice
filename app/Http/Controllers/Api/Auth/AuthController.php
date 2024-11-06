<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Helper\ResponseHelper;
use App\Repositories\Login\LoginInterface;
use App\Repositories\Register\RegisterInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $registerRepository;
    protected $loginRepository;

    

    public function __construct(
        
        RegisterInterface $registerRepository,
        LoginInterface $loginRepository
    ) {
        $this->registerRepository = $registerRepository;
        $this->loginRepository = $loginRepository;
        
    }

    public function register(RegisterRequest $request)
    {
        try {
            if ($request->isMethod('post')) {
                $user = $this->registerRepository->register($request->all());

                if ($user) {
                    return ResponseHelper::success(
                        message: 'User has been registered successfully.',
                        data: $user,
                        statusCode: 201
                    );

                }

                return ResponseHelper::error(
                    message: 'Unable to register user! Please try again.',
                    statusCode: 400
                );
            }

            return ResponseHelper::error(
                message: 'Invalid request method.',
                statusCode: 405
            );
        } catch (Exception $e) {
            Log::error('Unable to register user: ' . $e->getMessage() . ' - Line no. ' . $e->getLine());
            return ResponseHelper::error(
                message: 'Unable to register user! Please try again.',
                statusCode: 500
            );
        }
    }
    

    public function login(LoginRequest $request)
    {
        try {
            $loginName = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
            
            $result = $this->loginRepository->attemptLogin($request->all(), $loginName);

            if (isset($result['error'])) {
                return ResponseHelper::error($result['error'], 400);
            }

            $authUser = ['user' => $result['user'], 'token' => $result['token']];
            return ResponseHelper::success('You are logged in successfully.', $authUser, 200);
        } catch (Exception $e) {
            Log::error('Unable to login user: ' . $e->getMessage());
            return ResponseHelper::error('Unable to Login! Please try again.', 500);
        }
    }

    public function userProfile()
    {
        try {
            $user = $this->loginRepository->getUserProfile();
            return $user
                ? ResponseHelper::success('User profile fetched successfully!', $user, 200)
                : ResponseHelper::error('Unable to fetch user data due to invalid token.', 400);
        } catch (Exception $e) {
            Log::error('Unable to fetch user profile: ' . $e->getMessage());
            return ResponseHelper::error('Unable to fetch user profile! Please try again.', 500);
        }
    }

    public function userLogout()
    {
        try {
            $this->loginRepository->logoutUser();
            return redirect()->route('login'); // Redirect to the named login route
        } catch (Exception $e) {
            Log::error('Unable to logout user: ' . $e->getMessage());
            return ResponseHelper::error('Unable to logout! Please try again.', 500);
        }
    }
}
