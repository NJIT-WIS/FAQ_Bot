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
use \App\Profile;

class ProfileTest extends TestCase
{

    public function testProfleInsert(){
        $profile = factory(Profile::class)->make();
        $this->assertTrue($profile->save());

        $profile->delete();
    }

//    public function testProfileUpdate() {
//        $profile = Profile::find(1);
//        $profile->firs_name = 'John';
//        $this->assertTrue($profile->save());
//    }

}

?>