@extends('veterinary.general')
@section('content')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Projected Time Schedule</h4>
                  <form class="form-sample">
                    <p class="card-description">
                      task scheduling
                    </p>
                    
                     
                   
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Projected Start</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Projected Completion</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>

                      
                    </div>
                   
                   
                    </div>
                  </form>
                </div>
              </div>
            </div>
           
           
          </div>
        </div>

@endsection
      
