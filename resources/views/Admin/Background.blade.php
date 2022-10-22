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
                                        <th>Student Email</th>
                                        <th>Parent contact</th>
                                        
                                        <th>siblings(No)</th>
                                        <th>Residence</th>
                                        <th>Father Employment</th>
                                        <th>Mother Employment</th>
                                        <th>action</th>
                                        <th> <a href="/background-report" class="btn btn-danger">Generate report</a></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($p as $p)
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
                                              <h6>{{$p->email}}</h6>
                                              <p>email</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>{{$p->parent}}</h6>
                                          <p>registration</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->contact}}</h6>
                                          <p>ID</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->siblings}}</h6>
                                          <p>call</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->residence}}</h6>
                                          <p>school</p>
                                        </td>
                                        
                                          <h6>{{$p->femployment}}</h6>
                                          <p>Father</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->memployment}}</h6>
                                          <p>Mother</p>
                                        </td>

                                        
                                        <td><form id="delete-form-{{ $p->id }}" method="post" action="{{ route('bdelete',$p->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                                        {
                                       event.preventDefault();
                                         document.getElementById('delete-form-{{ $p->id }}').submit();
                                           }
                                           else{
                                            event.preventDefault();
                                          }"


                                class="btn btn-danger">Delete</a></td>
                        

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
                      <div class="col-lg-2 d-flex flex-column">
                        
                        
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    

@endsection
       