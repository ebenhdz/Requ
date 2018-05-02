@extends('layouts.app')

@section('content')
    <div class="container requisicion_pdf">
        <div class="row mt-3">
            <div class="col-md-9">
                <table>
                    <tr>
                        <td rowspan="3"><img src="/img/logos/logo_tec.png" alt=""></td>
                        <td rowspan="2">NOMBRE DE DOCUMENTO: FORMATO PARA REQUISICION DE BIENES Y SERVICIOS.</td>
                        <td>Codigo: TecNM/D-AD-FO-003</td>
                    </tr>
                    <tr><td>Revision: 7</td></tr>
                    <tr>
                        <td>Referencia a la Norma ISO 9001:2008      7.4.2,  7.4.3</td>
                        <td>Hoja: 1 de 1</td>
                    </tr>
                </table>
                <div class="text-xl-center mt-2">
                    <p class="m-0">INSTITUTO TECNOLÓGICO SUPERIOR DE SAN PEDRO DE LAS COLONIAS</p>
                    <p class="m-0">REQUISICIÓN DE BIENES Y SERVICIOS</p>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-5">
                <p>FECHA DE SOLICITUD: <span class="report_line">2 DE FEBRERO DEL 2018</span></p>
            </div>
            <div class="col-md-4 text-xl-right">
                <p>FOLIO NO: <span class="report_line">REQ-1902</span></p>
            </div>
            <div class="col-9">
            <table style="width: 100%">
                <tr>
                    <td>NOMBRE Y FIRMA DEL JEFE (A) DE QUIEN SOLICITA:    ING. JAIME ESQUIVEL HERNANDEZ</td>
                </tr>
                <tr><td>FECHA DE ENTREGA Y AREA SOLICITANTE:   2 DE FEBRERO DEL 2018         0402  VINCULACION</td></tr>
            </table>
                <p class="mt-2">¿Contemporables en el programa operativo anual?   Si</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-9">
                <table class="report_data">
                    <tr class="title_data_table">
                        <td style="width: 80px">PROYECTO ACTIVIDAD ACCION</td>
                        <td style="width: 80px">PARTIDA PRESUPUESTO</td>
                        <td>CANTIDAD</td>
                        <td>UNIDAD</td>
                        <td style="width: 400px">DESCRIPCIÓN DE LOS BIENES O SERVICIOS</td>
                        <td style="width: 80px">COSTO ESTIMADO TOTAL+IVA</td>
                        <td style="width: 90px;">FIRMA DE CONFORMIDAD DE ENTREGA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>IVA</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>TOTAL</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <p class="mt-2">LO ANTERIOR PARA SER UTLIZADO EN: </p>
            </div>
        </div>
        <div class="row mt-2 text-xl-center">
            <div class="col-md-3">
                <p class="m-0">Vo Bo</p>
                <p class="m-0">NOMBRE Y FIRMA</p>
                <p class="m-0 mt-5 report_line"></p>
                <p class="m-0">LIC. ELENA HERNANDEZ DELGADO</p>
                <p class="m-0">SUBDIRECCION ADMINISTRATIVA</p>
            </div>
            <div class="col-md-3">
                <p class="m-0">Vo Bo</p>
                <p class="m-0">NOMBRE Y FIRMA</p>
                <p class="m-0 mt-5 report_line"></p>
                <p class="m-0">LIC. ELENA HERNANDEZ DELGADO</p>
                <p class="m-0">SUBDIRECCION ADMINISTRATIVA</p>
            </div>
            <div class="col-md-3">
                <p class="m-0">Vo Bo</p>
                <p class="m-0">NOMBRE Y FIRMA</p>
                <p class="m-0 mt-5 report_line"></p>
                <p class="m-0">LIC. ELENA HERNANDEZ DELGADO</p>
                <p class="m-0">SUBDIRECCION ADMINISTRATIVA</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mt-2"><p>SNIT/D-AD-FO-003</p></div>
        </div>
    </div>
@endsection