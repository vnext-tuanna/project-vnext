@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <table
            id="example"
            class="table table-striped table-bordered dt-responsive nowrap"
            style="width: 100%"
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Content</th>
                    <th>Time</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger1</td>
                    <td>Nixon</td>
                    <td>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni illo quisquam in soluta. Veniam facere doloribus odit blanditiis suscipit beatae distinctio quasi minima laboriosam necessitatibus, natus recusandae illo voluptas.
                      </p>
                    <a href="# " id="myBtn" data-toggle="modal" data-target="#staticBackdrop">Chi tiết</a>
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...Contentttttttttt
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
                    <td>Edinburgh</td>
                    <td style="padding-top: 20px;">
                      <ul class="list-inline m-0">
                        <li class="list-inline-item">
                          <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        </li>
                        <li class="list-inline-item">
                          <button class="btn btn-secondary btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </li>             
                      </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
