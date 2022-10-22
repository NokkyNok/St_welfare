@extends('Student.general')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                
                  <div>
                    
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    
                    
                    <div class="row">
                      <div class="col-lg-10 d-flex flex-column">
                      <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    
                                  </div>
                                  <div>
                       
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Email</th>
                                        <th>Guardian/Parent Name</th>
                                        
                                        <th>Phone/Contact</th>
                                        <th>Total siblings</th>
                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                      <tr>
                                    
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            
                                            <div>
                                              <h6>{{$info->email}}</h6>
                                              <p>Student Email</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>{{$info->parent}}</h6>
                                          <p>Parent/Guardian</p>
                                        </td>
                                        <td>
                                          <h6>{{$info->contact}}</h6>
                                          <p>Parent Contact</p>
                                        </td>
                                        <td>
                                          <h6>{{$info->siblings}}</h6>
                                          <p>Siblings</p>
                                        </td>
                                       
                                        
                                        <td><a class="badge badge-opacity-success" href="/edit/{{$info->id}}">Update info</a></td>

                                      </tr>
                                      
                                    
                                    
                                    
                                    
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        
                        
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    

@endsection
       