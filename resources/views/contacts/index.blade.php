@extends('layouts.main')

@section('title','Contact App | All Contact')

@section('content')

    <main class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-title">
                    <div class="d-flex align-items-center">
                      <h2 class="mb-0">All Contacts</h2>
                      <div class="ml-auto">
                        <a href="{{route('contacts.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                      </div>
                    </div>
                  </div>
                <div class="card-body">

                    @include('contacts._filter')
                    @if ($message = session('message'))

                    <div class="alert alert-success">{{$message}}</div>

                    @endif
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firat Name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Company</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                    @forelse ( $contacts as $index => $contact )
                        @include('contacts._contact')
                    @empty
                        @include('contacts._empty')
                    @endforelse

                        </tbody>
                      </table>
                        {{$contacts->links()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
@endsection

