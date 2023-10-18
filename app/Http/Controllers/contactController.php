<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use App\Models\Contact;


class contactController extends Controller
{


public function __construct(protected CompanyRepository $company)
    {

    }


 public function index (CompanyRepository $company)
    {


        $companies = $this->company->pluck();
        // $companies =Company::all() ;
        // $contacts = Contact::latest()->paginate(10);
        $contacts = Contact::latest()->where(function( $query){
            if (request("company_id")) {
                $query->where("company_id",request("company_id"));
            }
        })->paginate(10);
        return view('contacts.index')->with('contacts',$contacts)->with('companies',$companies);
    }




    public function create(Request $request)
    {
        // dd($request->is('contacts'));
        $companies = $this->company->pluck();
        $contact = new Contact();
        return view('contacts.create')->with('companies',$companies)->with('contact',$contact);
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:50',

            'last_name' => 'required|string|max:50',

            'email' => 'required|email',

            'phone' => 'nullable',

            'address' => 'nullable',

            'company_id' => 'required|exists:companies,id'

        ]);
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('message','Contact has been add successfuly');
    }

    public function show(Request $request, $id){
        $contact = Contact::findOrFail($id);
        return view('contacts.show')->with('contact',$contact) ;
    }


    public function edit(Request $request, $id){
        $companies = $this->company->pluck();
        $contact = Contact::findOrFail($id);
        // dd($contact);
        return view('contacts.edit')->with('contact',$contact)->with('companies',$companies) ;
    }

    public function update(Request $request,$id){
        $contact = Contact::findOrFail($id);
        $request->validate([
            'first_name' => 'required|string|max:50',

            'last_name' => 'required|string|max:50',

            'email' => 'required|email',

            'phone' => 'nullable',

            'address' => 'nullable',

            'company_id' => 'required|exists:companies,id'

        ]);
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('message','Contact has been updating successfuly');
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('message','Contact has been deleted successfuly');
    }




}
