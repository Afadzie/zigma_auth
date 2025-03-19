@extends('layouts.admin')

@section('content')

<div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Users</p>
                              <h3 class="rate-percentage">32.53%</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Admins</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Front Desk Contacts</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">All Users</h4>
                              <p class="card-description"> 
                                <input type="text" class="form-control"  placeholder="Search users">
                              </p>
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>User</th>
                                      <th>Product</th>
                                      <th>Sale</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Jacob</td>
                                      <td>Photoshop</td>
                                      <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                      <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                    <tr>
                                      <td>Messsy</td>
                                      <td>Flash</td>
                                      <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                      <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                    <tr>
                                      <td>John</td>
                                      <td>Premier</td>
                                      <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                      <td><label class="badge badge-info">Fixed</label></td>
                                    </tr>
                                    <tr>
                                      <td>Peter</td>
                                      <td>After effects</td>
                                      <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                      <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                      <td>Dave</td>
                                      <td>53275535</td>
                                      <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                      <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                  </tbody>
                                </table>
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