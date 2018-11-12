<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 11/12/18
 * Time: 4:30 PM
 */


namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{

    public function saveProfile(){
        $user = factory(\App\User::class)->make();
        $user -> save();
        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associatve($user);
        $this -> assertTrue($profile->save());

    }


}