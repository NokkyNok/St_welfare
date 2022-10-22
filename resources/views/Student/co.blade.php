@extends('Student.general')
@section('content')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sports and Entertainment</h4>
                  <form class="form-sample" action="{{route('co')}}" method="POST">
                  @csrf
                  @include('flash-message')
                    <p class="card-description">
                      Co Curriculum Entries
                    </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sports  Active</label>
                          <div class="col-sm-9">
                            <select name="sport" class="form-control">
                            <option value="football">Football</option>
                              <option value="volleyball">Volleybal</option>
                              <option value="basketball">Basketball</option>
                              <option value="hockey">Hockey</option>
                              <option value="rugby">Rugby</option>
                              <option value="athletics">Athletics</option>
                              <option value="other">Other sports</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                   
                    <p class="card-description">
                      Drama and Entertainment
                    </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Participation</label>
                          <div class="col-sm-9">
                            <select name="drama" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Drama Club Active</label>
                          <div class="col-sm-9">
                            <select name="drama_category" class="form-control">
                            <option value="music">Music</option>
                              <option value="dancing">Dancing</option>
                              <option value="acting">Acting</option>
                              <option value="karate">Karate</option>
                            </select>
                          </div>
                        </div>
                      </div>


                     
                      

                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
        </div>

@endsection
      
