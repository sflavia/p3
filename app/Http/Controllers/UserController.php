<?php
namespace App\Http\Controllers;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller {








public function getuser(Request $Request) {

  $profiles=[];
  return view('user')->with('profiles', $profiles);
}


public function postuser(Request $Request){
//Validation
  $this->validate($Request, [
       'numusers' => 'required|numeric|min:1|max:88|',
   ]);
//get profiles
  $profiles=[];

  $faker=\Faker\Factory::create();

  $numusers=$Request->input('numusers');

  for($i=0; $i < $numusers; $i++) {
      $individualProfiles=[];

      $individualProfiles["name"]=$faker->name;
      $individualProfiles['email']=$faker->email;
      $individualProfiles['address']=$faker->address;

      array_push($profiles,$individualProfiles);
  }

return view('user')->with('profiles', $profiles);


}

}
?>
