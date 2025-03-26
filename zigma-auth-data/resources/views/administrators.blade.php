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
                           <div >
                             <a href="{{ url('register')}}"> <button  type="button" class="btn btn-primary">Add Administrator</button> </a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">All Administrators</h4>
                              
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Role</th>
                                      <th>Block</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($admins as $row)
                                    <tr >
                                      <td>{{ $row->name }}</td>
                                      <td>{{ $row->email }}</td>
                                      <td>{{ $row->role }}</td>
                                      <td>
                                      @if($row->block == 1)
                                      <label class="badge badge-warning">Blocked</label>
                                      @endif

                                      @if($row->block == 0)
                                      <label class="badge badge-success">Not Blocked</label>
                                      @endif

                                      </td>
                                      <td>
                                      <form action="/edit_administrator" method="post">    
                                          @csrf
                                      <button type="submit" class="btn btn-primary btn-xs mr-1" onclick="return confirm('Do you want to edit this user?')" data-toggle="tooltip" title="Edit User">&nbsp;Edit</button>
                                      <input type="hidden" value="{{$row->id}}" name="user_id">   

                                      </form>
                                      </td>
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
                      </div>
                    </div>
                  </div>
                </div>

@endsection