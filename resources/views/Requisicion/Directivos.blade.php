@extends('layouts.app')
@section('content')
    @include('layouts.nav')

    <div class="container">
        <div class="card p-2 mb-5">

            <div class="card-body">
                <form>
                    <!--Table-->
                    <table class="table table-bordered">

                        <!--Table head-->
                        <thead class="rgba-black-strong">
                        <tr>
                            <th class="font-weight-bold text-white text-center">Nombre</th>
                            <th class="font-weight-bold text-white text-center">Cargo</th>
                            <th class="font-weight-bold text-white text-center">Acciones</th>
                        </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                        <tr>
                            <td>Lic. Elena Hernandez Delgado</td>
                            <td>Subdirección Administrativa</td>
                            <td>
                                <button type="button" class="btn btn-rgba(0, 130, 130, 0.5) rgba-teal-strong btn-sm px-2" ><i class="fa fa-edit mt-0"></i></button>
                                <button type="button" class="btn btn-red btn-sm px-2"><i class="fa fa-trash-o mt-0"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lic. Elizabeth Santo Hidrogo</td>
                            <td>Jefe de departamento de planeación</td>
                            <td>
                                <button type="button" class="btn btn-rgba(0, 130, 130, 0.5) rgba-teal-strong btn-sm px-2" ><i class="fa fa-edit mt-0"></i></button>
                                <button type="button" class="btn btn-red btn-sm px-2"><i class="fa fa-trash-o mt-0"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>M.C.Jesus Joaquin Quistian Contreras</td>
                            <td>Direccion General</td>
                            <td>
                                <button type="button" class="btn btn-rgba(0, 130, 130, 0.5) rgba-teal-strong btn-sm px-2" ><i class="fa fa-edit mt-0"></i></button>
                                <button type="button" class="btn btn-red btn-sm px-2"><i class="fa fa-trash-o mt-0"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        <!--Table body-->

                    </table>
                    <!--Table-->
                </form>
            </div>
        </div>
    </div>

