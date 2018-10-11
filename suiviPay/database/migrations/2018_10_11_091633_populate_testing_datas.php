<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateTestingDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //create user jane smith
       DB::table('users')->insert([
        [
           'name'=>'Jane',
           'firstname'=>'Smith',
           'email'=>'jane.smith@yopmail.com',
           'avatar_url'=>'img/avatar/Mrs-Smith.jpg',
           'password'=>'123456'
        ]
     ]);
     //getting user id of jane smith
     $user_id=DB::table('users')->where('name', 'jane')->take(1)->value('id');

     //insert 5 posts for jane smith
     for ($i=0; $i<5; $i++) {
        DB::table('posts')->insert([
           [
              'title'=>'post testing '.$i,
              'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'user_id'=>$user_id
           ]
        ]);
     }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //getting user id of jane smith
       $user_id=DB::table('users')->where('name', 'jane')->take(1)->value('id');

       //delete posts
       DB::table('posts')->where('user_id', $user_id)->delete();
 
       //delete user jane smith
       DB::table('users')->where('name', '=', 'Jane')->delete();
    }
}
