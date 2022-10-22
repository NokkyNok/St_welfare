@extends('Student.general')
@section('content')

 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      
                    
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">{{Auth::user()->name}}</p>
                            <h3 class="rate-percentage"></h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                          </div>
                          <div>
                            <p class="statistics-title">{{Auth::user()->name}}</p>
                            <h3 class="rate-percentage"></h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span></span></p>
                          </div>
                          @can('manage-users')
                          <div>
                            <p class="statistics-title">Admin User</p>
                            <h3 class="rate-percentage"></h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                          </div>
                          @endcan
                          <div>
                            <p class="statistics-title">Student User</p>
                            <h3 class="rate-percentage"></h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                          </div>

                          
                          
                          <div class="d-none d-md-block">
                            <p class="statistics-title"></p>
                            <h3 class="rate-percentage"></h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
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
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>

@endsection