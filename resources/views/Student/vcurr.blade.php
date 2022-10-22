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
                      <div class="col-lg-8 d-flex flex-column">
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
                                        <th>Sport</th>
                                        
                                        <th>Drama/Art</th>
                                        <th>Type</th>
                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($info as $info)
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
                                          <h6>{{$info->drama}}</h6>
                                          <p>Drama/Art</p>
                                        </td>
                                        <td>
                                          <h6>{{$info->sport}}</h6>
                                          <p>Sport</p>
                                        </td>
                                        <td>
                                          <h6>{{$info->drama_category}}</h6>
                                          <p>Category</p>
                                        </td>
                                       
                                        
                                        <td><a class="badge badge-opacity-success" href="/edit/{{$info->id}}">Update info</a></td>

                                      </tr>
                                      
                                     @endforeach
                                    
                                    
                                    
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
       