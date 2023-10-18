use   App\Models\User
use   App\Models\Company
use   App\Models\Contact
use   App\Models\Task
use Illuminate\Support\Facades\DB


User::upsert([
    ['name'=>'wassim1','email'=>'wassim@gmail.com','password'=>'1234'],
    ['name'=>'wetcci1','email'=>'wetcci@gmail.com','password'=>'1234'],
    ['name'=>'wajdi1','email'=>'wajdi@gmail.com','password'=>'1234'],
    ['name'=>'ahmed','email'=>'ahmed@gmail.com','password'=>'1234']
    ],['email'],['name','password'])
