@extends('layouts.app')
@section('content')
    @include('layouts.nav')
    <div class="container">
    <div style="visibility: hidden">
                <form class="form-inline mt-2 ml-2">
                    <input class="form-control my-0 py-0" type="text" placeholder="Search..." style="max-width: 150px;">
                    <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fa fa-search"></i>  </button>
                </form>

            <!--</div>
            <!--Grid column-->

        <!--Grid row-->

    </div>
    <!--Top Table UI-->

    <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div style="visibility: hidden">
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-th-large mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-columns mt-0"></i></button>
            </div>

            <a href="" class="white-text mx-3">Mis Requisiciones</a>

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-pencil mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-eye mt-0"></i></button>
            </div>

        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-wrapper">
                <!--Table-->
                <table class="table table-hover mb-0">

                    <!--Table head-->
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="checkbox">
                            <label for="checkbox" class="mr-2 label-table"></label>
                        </th>
                        <th class="th-lg"><a>Folio <i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Fecha<i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Estado<i class="fa fa-sort ml-1"></i></a></th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                    <tr>
                        <th scope="row">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1" class="label-table"></label>
                        </th>
                        <td>50525</td>
                        <td>08/05/2018</td>
                        <td>Aceptada</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2" class="label-table"></label>
                        </th>
                        <td>50526</td>
                        <td>08/05/2018</td>
                        <td>Rechazada</td>
                    </tr>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>

            <hr class="my-0">

            <!--Bottom Table UI-->
            <div class="d-flex justify-content-between">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down">
                    <option value="" disabled >Rows number</option>
                    <option value="1" selected>10 rows</option>
                    <option value="2">25 rows</option>
                    <option value="3">50 rows</option>
                    <option value="4">100 rows</option>
                </select>

                <!--Pagination -->
                <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                        <!--First-->
                        <li class="page-item disabled"><a class="page-link">First</a></li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--First-->
                        <li class="page-item"><a class="page-link">Last</a></li>

                    </ul>
                </nav>
                <!--/Pagination -->

            </div>
            <!--Bottom Table UI-->

    </div>
    </div>
@endsection

