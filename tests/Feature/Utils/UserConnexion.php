<?php

namespace Tests\Feature\Utils;

use App\Models\Role;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class UserConnexion
{

    /**
     * It's getting the abillities of the user
     * 
     * @param User user The user object that you want to get the abilities from.
     * 
     * @return array It's returning the abillities of the user.
     */
    private static function getUserRoleAbilities(User $user): array
    {
        $abillities = Role::query()
            ->select(['roles.abilities'])
            ->join('users', 'roles.id', '=', 'users.role_id')
            ->where('users.id', '=', $user['id'])
            ->get()[0]["abilities"];

        return $abillities;
    }

    /**
     * Acting as the user 'Admin' with its abillity.
     */
    public static function fakeAdmin(): void
    {
        /* It's getting the user with the pseudo Admin. */
        $user = User::query()
            ->select(['*'])
            ->where('pseudo', '=', 'Admin')
            ->get()[0];

        $abillity = self::getUserRoleAbilities($user)[0];

        Sanctum::actingAs($user, [$abillity]);
    }

    /**
     * Acting as the user 'Admin' with its abillity.
     */
    public static function fakeUser(): void
    {
        /* It's getting the user with the pseudo Admin. */
        $user = User::query()
            ->select(['*'])
            ->where('role_id', '=', 2)
            ->get()[0];

        $abillity = self::getUserRoleAbilities($user)[0];

        Sanctum::actingAs($user, [$abillity]);
    }
}
