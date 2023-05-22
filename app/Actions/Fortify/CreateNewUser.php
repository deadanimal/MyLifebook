<?php

namespace App\Actions\Fortify;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        dd($input);

        if ($input['referral']) {
            $options = [
                'metadata' => [
                    'referral' => $input['referral']
                ]
            ];
            $user->createAsStripeCustomer($options);                        
        } else {
            $user->createAsStripeCustomer();
        }

        if($input['plan'] == 1 || $input['plan'] == 2 || $input['plan'] ==  3) {
            $user->newSubscription('prod_NlXiQkkGh0lQFF', 'price_1N00cbL56wwkJgEVnCh2bmB7');
        }

        $user->plan = (int) $input['plan'];
        $user->save();

        return $user;
    }
}
