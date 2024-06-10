<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($flag = null)
    {
        if( $flag == null ) {
            $users = User::all();
        } elseif( $flag == 1) {
            $users = User::select()->where('status', '1')->get();
        } elseif( $flag == 0) {
            $users = User::select()->where('status', '0')->get();
        } else {
            $response = [
                'message' => 'Invalid parameter passed, either it can be 0, 1 or nothing(null).',
                'status'  => 0,
            ];

            return response()->json($response, 400);
        }
        
        if(count($users) > 0 ) {
            $response = [
                'message' => count($users) . ' users found.',
                'status'  => 1,
                'users'   => $users,
            ];
        } else {
            $response = [
                'message' => count($users) . ' users found.',
                'status'  => 0,
            ];
        }
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a new user's resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  => ['required'],
            'email'                 => ['required', 'email', 'unique:users,email'],
            'password'              => ['required', 'min:8', 'confirmed' ],
            'password_confirmation' => ['required'],
        ]);

        if($validator->fails()) {
            return response()->json($validator->messages(), 400);
        } else {
            $data = [
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password)
            ];

            DB::beginTransaction();
            try {
                $user = User::create($data);
                DB::commit();
            } catch(\Exception $error) {
                DB::rollBack();
                $user = null;
            }

            if( $user == null) {
                return response()->json([
                    'message' => 'Internal Server Error'
                ], 500);
            } else {
                return response()->json([
                    'message' => 'User registered successfully'
                ], 200);
            }
        }
    }

    /**
     * Store a newly created user's resource in storage.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name'     => ['required'],
            'customer_email'    => ['required', 'email', 'unique:users,email'],
            'customer_password' => ['required', 'min:8' ],
        ]);

        if($validator->fails()) {
            $response = [
                'message' => $validator->messages(),
                'status'  => 0,
            ];
            $responseCode = 400;
            return response()->json($response, $responseCode);
        } else {
            $data = [
                'name'     => $request->customer_name,
                'email'    => $request->customer_email,
                'address'  => $request->customer_address,
                'pincode'  => $request->customer_pincode,
                'password' => Hash::make($request->customer_password)
            ];

            DB::beginTransaction();
            try {
                $user = User::create($data);
                $token = $user->createToken("auth_token")->accessToken;
                DB::commit();

                $response = [
                    'message' => 'User registered successfully',
                    'status'  => 1,
                    'token'   => $token,
                ];
                $responseCode = 200;
            } catch(\Exception $error) {
                DB::rollBack();

                $response = [
                    'message' => 'Internal Server Error',
                    'status'  => 0,
                    'error'   => $error->getMessage()
                ];
                $responseCode = 500;
            }
            return response()->json($response, $responseCode);
        }
    }

    /**
     * Login User.
     */
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email'    => ['required', 'email',],
            'password' => ['required'],
        ]);

        if($validator->fails()) {
            $response = [
                'message' => $validator->messages(),
                'status'  => 0
            ];
            $responseCode = 400;
            return response()->json($response, $responseCode);
        } else {
            try {
                $user = User::where('email' , $request->email)->first();
                if($user) {
                    if(Hash::check($request->password, $user->password)) {
                        $token = $user->createToken("auth_token")->accessToken;
        
                        $response = [
                            'message' => 'User Logged In Successfully',
                            'status'  => 1,
                            'token'   => $token
                        ];
                        $responseCode = 200;
                    } else {
                        $response = [
                            'message' => 'Incorrect password',
                            'status'  => 0,
                        ];
                        $responseCode = 404;
                    }
                } else {
                    $response = [
                        'message' => 'User Not Found',
                        'status'  => 0,
                    ];
                    $responseCode = 404;
                }
            } catch(\Exception $error) {
                $response = [
                    'message' => 'Internal Server Error',
                    'error'   => $error->getMessage(),
                    'status'  => 0
                ];
                $responseCode = 500;
            }
            return response()->json($response, $responseCode);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if($user) {
            $response = [
                'message' => 'User Id ' . $user->id . ' found with user name ' . $user->name,
                'status'  => 1,
                'user'    => $user,
            ];
        } else {
            $response = [
                'message' => 'User not found.',
                'status'  => 0,
            ];
        }

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if($user == null) {
            $response = [
                'message' => 'User not found.',
                'status'  => 0
            ];
            $responseCode = 404;
        } else {
            DB::beginTransaction();
            try {
                $user->name              = $request['name'];
                $user->email             = $request['email'];
                $user->email_verified_at = $request['email_verified_at'];
                $user->address           = $request['address'];
                $user->pincode           = $request['pincode'];
                $user->contact           = $request['contact'];
                $user->status            = $request['status'];
                $user->save();
                DB::commit();

                $response = [
                    'message' => "User's data updated successfully.",
                    'status'  => 1
                ];
                $responseCode = 200;

            } catch(\Exception $error) {
                DB::rollBack();

                $response = [
                    'message' => 'Internal Server Error.',
                    'Error'   => $error->getMessage(),
                    'status'  => 0,
                ];
                $responseCode = 500;
            }
        }

        return response()->json($response, $responseCode);
    }

    /**
     * Update the password resource in storage.
     */
    public function updatePassword(Request $request, string $id) 
    {
        $user = User::find($id);

        if( $user == null ) {
            $response = [
                'message' => 'User not found.',
                'status'  => 0
            ];
            $responseCode = 404;
        } else {
            DB::beginTransaction();

            if( Hash::check($request['old_password'], $user['password']) ) {
                if( $request['new_password'] != $request['confirm_password'] ) {
                    $response = [
                        'message' => 'New Password & Confirm Password Miss match.',
                        'status'  => 0
                    ];
                    $responseCode = 400;
                } else {
                    try {
                        $user->password = Hash::make($request['new_password']);
                        $user->save();
                        DB::commit();
        
                        $response = [
                            'message' => 'Password Updated Successfully.',
                            'status'  => 1
                        ];
                        $responseCode = 200;
                    } catch(\Exception $error) {
                        DB::rollBack();
        
                        $response = [
                            'message' => 'Internal Server Error',
                            'error'   => $error->getMessage(),
                            'status'  => 0
                        ];
                        $responseCode = 500;
                    }
                }
            } else {
                $response = [
                    'message' => 'Incorrect Old Password',
                    'status'  => 0
                ];
                $responseCode = 400;
            }
        }
        return response()->json($response, $responseCode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(User::find($id)) {
            DB::beginTransaction();
            try {
                User::find($id)->delete();
                DB::commit();
                $response = [
                    'message' => 'User deleted successfully.',
                    'status'  => 1,
                ];
                $responseCode = 200;
            } catch(\Exception $error) {
                DB::rollBack();
                $response = [
                    'message' => 'Internal Server Error.',
                    'status'  => 0,
                ];
                $responseCode = 500;
            }
        } else {
            $response = [
                'message' => 'User not found.',
                'status'  => 0,
            ];
            $responseCode = 404;
        }

        return response()->json($response, $responseCode);
    }
}
