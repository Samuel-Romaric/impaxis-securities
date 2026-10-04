<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class SettingController extends Controller
{
    //
    public function updateProfile(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'current_password' => [
                'nullable',
                Rule::requiredIf(fn () => filled($request->input('password'))),
                'current_password:web',
            ],
            'password' => ['nullable', 'confirmed', Password::defaults()],
        ], [
            'current_password.required' => 'Votre mot de passe actuel est requis pour en définir un nouveau.',
            'current_password.current_password' => 'Votre mot de passe actuel est incorrect.',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (! empty($validated['password'])) {
            $user->password = $validated['password'];
        }

        $user->save();

        return to_route('admin.account.setting.show')
            ->with('success', 'Vos informations ont été mises à jour avec succès.');
    }
}
