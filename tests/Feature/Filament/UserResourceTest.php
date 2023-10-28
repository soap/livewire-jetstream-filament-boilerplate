<?php

use App\Models\User;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use Spatie\Permission\Models\Role;

use function Pest\Livewire\livewire;

beforeEach(function () {
    Role::create(['name' => 'Super Admin']);

    $user = User::factory()->create();
    $user->assignRole('Super Admin');
    $this->actingAs($user);
});

it('has users page', function (){
    Livewire::test(ListUsers::class)->assertCanSeeTableRecords(
        User::limit(10)->get()
    );
});

it('can create user', function(){

    $newUser = User::factory()->make();

    livewire(CreateUser::class)
        ->fillForm([
            'first_name' => $newUser->first_name,
            'last_name' => $newUser->last_name,
            'email' => $newUser->email,
            'password' =>  $newUser->password,
            //'password_confirmation' => $newUser->password,
        ])
        ->call('create')
        ->assertHasNoErrors();

    $this->assertDatabaseHas(User::class, [
        'first_name' => $newUser->first_name,
        'last_name' => $newUser->last_name,
        'email' => $newUser->email
    ]);
});
