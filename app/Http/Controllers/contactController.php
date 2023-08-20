<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class contactController extends Controller
{


public function __construct(protected CompanyRepository $company)
    {

    }


public function index (CompanyRepository $company){


        // $companies = [
        //     1=>["name"=>"Company One","contact"=>3],
        //     2=>["name"=>"Company Tow","contact"=>7],
        //     3=>["name"=>"Company Three","contact"=>9]
        // ];
        $companies = $company->plunk();
        $contacts = $this->getContacts();
        dump($contacts,$companies);
        return view('contacts.index')
                                    ->with('contacts',$contacts)
                                    ->with('companies',$companies);
    }


    public function show(Request $request, $id){
        $contacts = $this->getContacts();
        abort_unless(isset($contacts[$id]),404);
        $contact = $contacts[$id];
        dump($contact);
        return view('contacts.show')->with('contact',$contact) ;
    }

    public function create()
    {
        return view('contacts.create');
    }

protected function getContacts()
    {
       return [
        1 => ['name'=>'wassim','phone'=>'123454678'],
        2 => ['name'=>'chadi','phone'=>'123454678'],
        3 => ['name'=>'wajdi','phone'=>'123454678'],
        ];
    }
}
