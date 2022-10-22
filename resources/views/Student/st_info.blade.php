@extends('Student.general')
@section('content')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Personal information</h4>
                  <form class="form-sample" action="{{route('student-info.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('flash-message')
                    <p class="card-description">
                      Student's Entry
                    </p>
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Student Name</label>
                          <div class="col-sm-9">
                            <input name="name" class="form-control" placeholder="ST.Name|Full Name"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rgistration Number</label>
                          <div class="col-sm-9">
                            <input name="reg"class="form-control" placeholder="ST.Reg Nmber"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input name="birth" class="form-control" placeholder="dd/mm/yy"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">National ID Number</label>
                          <div class="col-sm-9">
                            <input name="idcard" class="form-control" placeholder="ST.Reg Nmber"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone 1</label>
                          <div class="col-sm-9">
                            <input name="p1" class="form-control" placeholder="0700000000"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone 2</label>
                          <div class="col-sm-9">
                            <input name="p2" class="form-control" placeholder="0711111111"/>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">
                      Residential Entry
                    </p>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Resdident County</label>
                          <div class="col-sm-9">
                            <input name="county" class="form-control" placeholder="Kitui"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Resident Constituencey</label>
                          <div class="col-sm-9">
                            <input name="sub" class="form-control" placeholder="Mueni"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input name="add1" class="form-control" placeholder="0000"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input name="add2" class="form-control" placeholder="0000"/>
                          </div>
                        </div>
                      </div>

                      <p class="card-description">
                      Academic Enrtry
                    </p>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course</label>
                          <div class="col-sm-9">
                            <input name="course" class="form-control" placeholder="BCS"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">School</label>
                          <div class="col-sm-9">
                            <input name="school" class="form-control" placeholder="SCI"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <input name="dep" class="form-control" placeholder="CS"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Year of study</label>
                          <div class="col-sm-9">
                            <input name="year" class="form-control" placeholder="0000"/>
                          </div>
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
        </div>

@endsection
      
