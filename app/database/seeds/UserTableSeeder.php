<?php

class UserTableSeeder extends Seeder{

    public function run(){
        User::create (
            array(
            'username'=>'nelsonabieno@gmail.com',
             'password'=>'1234',
             'profile'=>'nelson'
        )



        );

    }

}