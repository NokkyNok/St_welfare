@extends('veterinary.general')
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
                                    <h4 class="card-title card-title-dash">Overview of your client's request</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have {{$count}}  requests</p>
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
                                        <th>Client</th>
                                        <th>Contact details</th>
                                        
                                        <th>Service</th>
                                        <th>Due time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        @foreach($task as $task)
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            
                                            <div>
                                              <h6>{{$task->client}}</h6>
                                              <p>client</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>{{$task->phone}}</h6>
                                          <p>phone Number</p>
                                        </td>
                                        <td>
                                          <h6>{{$task->service}}</h6>
                                          <p>cservice</p>
                                        </td>
                                        <td>
                                          <h6>{{$task->due}} hours</h6>
                                          <p>Due after</p>
                                        </td>
                                        <td>
                                          <h6>{{$task->created_at}}</h6>
                                          <p>Date of Book</p>
                                        </td>
                                        <td><a href="/vetchat/{{$task->id}}">Chat</a></td>
                                        <td><a href="/amount/{{$task->id}}">Update Earnings</a></td>
                                        <td><a class="badge badge-opacity-success" href="/veterinary/schedule/{{$task->id}}">Schedule</a></td>

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
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Today's client's requests</h4>
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
       