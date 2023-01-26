@extends('admin/master')
@section('content')
    <section style="width: 85%; float: right;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>USERS <small>all users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    {{-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">id </th>
                            <th class="column-title">Image </th>
                            <th class="column-title">name </th>
                            <th class="column-title">email </th>
                            <th class="column-title">Edit </th>
                            <th class="column-title">Delete </th>
                            {{-- <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th> --}}
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($users as $user)

                          <tr class="even pointer">
                            
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $user->id }}</td>
                            <td class=" "><img src="usersimg/image/{{ $user->image }}" alt="" style="width: 40px;height:40px;border-radius: 50%;"></td>
                            <td class=" ">{{ $user->name }}</td>
                            <td class=" ">{{ $user->email }}</td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                            <td class=" last"><a href="{{ route('users.edit',$user->id) }}">Edit</a>
                            </td>
                            @csrf
                            @method('DELETE')
                            <td class=" last"><a href="#"><button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button></a>
                            </td>
                          </form>

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
        <!-- /page content -->
    </section>

      
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
@endsection