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
                  <form class="form-sample" action="{{route('ac')}}" method="POST">
                  @csrf
                  @include('flash-message')
                    <p class="card-description">
                      Co Curriculum Entries
                    </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Resident student</label>
                          <div class="col-sm-9">
                            <select name="state" class="form-control">
                            <option value="yes">Yes</option>
                              <option value="No">No</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                   
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hostle</label>
                          <div class="col-sm-9">
                            <select name="hostel" class="form-control">
                            <option value="Mount Kenya A">Mount Kenya A</option>
                              <option value="Mount Kenya B">Mount Kenya B</option>
                              <option value="Mount Kenya C">Mount Kenya C</option>
                              <option value="Hostel A(L)">Hostel A(L)</option>
                              <option value="Hostel B(L)">Hostel B(L)</option>
                              <option value="Hostel C(L)">Hostel C(L)</option>
                              <option value="Hostel A(M)">Hostel A(M)</option>
                              
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
      
