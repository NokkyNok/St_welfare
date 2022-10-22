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
                                        <th>Sport</th>
                                        
                                        <th>Drama/Ard</th>
                                     
                                        <th>Category</th>
                                        <th> <a href="/curriculum-report" class="btn btn-danger">Generate report</a></th>
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
                                              <p>email<s/p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>{{$p->drama}}</h6>
                                          <p>Sport Event</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->drama}}</h6>
                                          <p>Art/Drama Event</p>
                                        </td>
                                        <td>
                                          <h6>{{$p->drama_category}}</h6>
                                          <p>Hostel</p>
                                        </td>
                                       

                                        
                                        <td><form id="delete-form-{{ $p->id }}" method="post" action="{{ route('cdelete',$p->id) }}" style="display: none">
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
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash"></h4>
                                      <div class="add-items d-flex mb-0">
                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                        <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    

@endsection
       