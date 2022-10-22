@extends('Student.general')
@section('content')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bakckground Inforamtion</h4>
                  <form class="form-sample" action="{{ROUTE('back')}}" method="POST">
                  @csrf
                  @include('flash-message')
                    <p class="card-description">
                      Parent Guardian info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent/Guardian</label>
                          <div class="col-sm-9">
                            <input name="parent" type="text" class="form-control" placeholder="Parent/Guardian Name"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact Number</label>
                          <div class="col-sm-9">
                            <input name="contact" type="text" class="form-control" placeholder="Contact" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No. of family siblings</label>
                          <div class="col-sm-9">
                            <input name="siblings" type="number" class="form-control" placeholder="Siblings"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Residence</label>
                          <div class="col-sm-9">
                            <input name="residence" type="text" class="form-control" placeholder="Town/street" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Parent/Guardian Employement
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Father Employment</label>
                          <div class="col-sm-9">
                            <select name="femployment" class="form-control">
                              <option value="employeed">Employeed</option>
                              <option value="Non">Non- Employed</option>
                              <option value="others">Berieved/Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mother Employment</label>
                          <div class="col-sm-9">
                            <select name="memployment" class="form-control">
                            <option value="employeed">Employeed</option>
                              <option value="Non">Non- Employed</option>
                              <option value="others">Berieved/Other</option>
                            </select>
                          </div>
                        </div>
                      </div>


                      









                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Estimate Annual family salary</label>
                          <div class="col-sm-9">
                            <input name="salary" type="text" class="form-control" placeholder="Estimate salary" />
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
      
