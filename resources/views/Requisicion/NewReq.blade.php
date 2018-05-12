
@extends('layouts.app')
@section('content')
    @include('layouts.nav')

    <!-- Card -->
    <div class="container">
        <div class="card p-2 mb-5">

            <div class="card-body">

                <form>
                    <!-- Default form group -->
                    <!-- Default form group -->
                    <!-- Grid row -->
                    <div class="form-group row">
                        <!-- Default input -->
                        <div class="form-group col-md-3">
                            <label for="inputEmail3">Fecha de Solicitud</label>

                            <input type="date" class="form-control">


                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-3 " >
                            <label for="inputPassword3" >Folio</label>

                            <input type="text" class="form-control">

                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Default input -->
                    <div class="form-group row">
                        <!--div class="form-group col-md-8"-->
                        <label for="inputAddress3" class="col-sm-2 col-form-label">Solicitante</label>
                        <div class="col-sm-10">
                            <!--input type="text" class="form-control" >
                                <!-- Default form grid -->
                            <form>
                                <!-- Grid row -->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col">
                                        <!-- Default input -->
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col">
                                        <!-- Default input -->
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </form>
                            <!-- Default form grid -->
                        </div>
                    </div>
                    <!-- Grid row -->
                    <div class="form-group row">
                        <label for="inputEmail4"class="col-sm-2 col-form-label">Fecha de Entrega</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4"class="col-sm-2 col-form-label">Área Solicitante</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <!-- Form inline with radios -->
                    <form class="form-inline">

                        <div class="form-check">
                            <label for="inputEmail4">¿Contemporables en el programa operativo actual?</label>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadiosInline1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadiosInline1">
                                Si
                            </label>
                            <!--/div>
                            <div class="form-check"-->
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadiosInline2" value="option2">
                            <label class="form-check-label" for="exampleRadiosInline2">
                                No
                            </label>
                        </div>
                        <!--Table-->
                        <table class="table table-bordered">

                            <!--Table head-->
                            <thead class="rgba-black-strong">
                            <tr>
                                <th class="font-weight-bold text-white text-center">Proyecto, Actividad, Acción</th>
                                <th class="font-weight-bold text-white text-center">Partida Presupuesto</th>
                                <th class="font-weight-bold text-white text-center">Cantidad</th>
                                <th class="font-weight-bold text-white text-sm-center">Unidad</th>
                                <th class="font-weight-bold text-white text-center">Descripción de los bienes o servicios</th>
                                <th class="font-weight-bold text-white text-center">Costo estimado Total+IVA</th>
                                <th class="font-weight-bold text-white text-center">Acciones</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <td>Mantenimiento</td>
                                <td>22102</td>
                                <td>1</td>
                                <td>Pieza</td>
                                <td>Articulo</td>
                                <td>$100,00</td>
                                <td>
                                    <button type="button" class="btn btn-rgba(0, 130, 130, 0.5) rgba-teal-strong btn-sm px-sm-1"><i class="fa fa-edit mt-0"></i></button>
                                    <button type="button" class="btn btn-red btn-sm px-sm-1"><i class="fa fa-trash-o mt-0"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><div text-align="left">Subtotal=$100,00</div></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><div text-align="left">IVA=$16,00</div></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><div text-align="left">Total=$116,00</div></td>
                                <td> <button  rows=@parent type="submit" class="btn btn-primary btn-md" >Nuevo</button></td>
                            </tr>
                            </tbody>
                            <!--Table body-->

                        </table>


                        <!--Table-->

                    </form>

                    <!-- Default textarea -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Lo anterior para ser utilizado en:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  rows=5%></textarea>
                        <button rows=@parent type="submit" class="btn btn-primary btn-md">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection