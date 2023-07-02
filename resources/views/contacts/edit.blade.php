@extends('layouts.main')

@section('title','Edit Contact')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              Settings
            </div>
            <div class="list-group list-group-flush">
              <a href="profile.html" class="list-group-item list-group-item-action active">Profile</span></a>
              <a href="password.html" class="list-group-item list-group-item-action">Password</span></a>
              <a href="#" class="list-group-item list-group-item-action">Import & Export</span></a>
            </div>
          </div>
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
          <div class="card">
            <div class="card-header card-title">
              <strong>Edit Profile</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control is-invalid">
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company" id="company" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" rows="2" class="form-control"></textarea>
                  </div>
                </div>
                <div class="offset-md-1 col-md-3">
                  <div class="form-group">
                    <label for="bio">Profile picture</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                        <img src="https://via.placeholder.com/150x150" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists img-thumbnail"
                        style="max-width: 150px; max-height: 150px;"></div>
                      <div class="mt-2">
                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select
                            image</span><span class="fileinput-exists">Change</span><input type="file"
                            name="profile_picture"></span>
                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                          data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-success">Update Profile</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
