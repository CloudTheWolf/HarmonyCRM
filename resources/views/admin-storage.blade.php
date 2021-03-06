		@extends("layouts.app")

        @section("style")
            <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
            <link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
            <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        @endsection

        @section("wrapper")
		<div class="page-wrapper">
			<div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">@lang('app.warehouse') @lang('app.management')</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('app.warehouse') @lang('app.management')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
            </div>

            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h6 class="mb-0 text-uppercase">@lang('app.warehouse') @lang('app.management')</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>@lang('app.warehouse') @lang('app.id')</th>
                                        <th>@lang('app.name')</th>
                                        <th>@lang('app.matScrap')</th>
                                        <th>@lang('app.matAluminium')</th>
                                        <th>@lang('app.matSteel')</th>
                                        <th>@lang('app.matGlass')</th>
                                        <th>@lang('app.matRubber')</th>
                                        <th>@lang('app.capacity')</th>
                                        <th>@lang('app.actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>@lang('app.warehouse') @lang('app.id')</th>
                                        <th>@lang('app.name')</th>
                                        <th>@lang('app.matScrap')</th>
                                        <th>@lang('app.matAluminium')</th>
                                        <th>@lang('app.matSteel')</th>
                                        <th>@lang('app.matGlass')</th>
                                        <th>@lang('app.matRubber')</th>
                                        <th>@lang('app.capacity')</th>
                                        <th>@lang('app.actions')</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
		@endsection



        @section("script")
            <script src="assets/plugins/select2/js/select2.min.js"></script>
            <script>
                $('.single-select').select2({
                    theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder'),
                    allowClear: Boolean($(this).data('allow-clear')),
                });
                $('.multiple-select').select2({
                    theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder'),
                    allowClear: Boolean($(this).data('allow-clear')),
                });
            </script>

            <script>
                function multiply(value,multiplier,element) {
                    console.log(value*multiplier);
                    const multiplicand = value || 0;
                    const product = parseInt(multiplicand) * parseInt(multiplier);
                    document.getElementById(element).value = product;
                    finalValue();
                }

                function finalValue()
                {
                    const scrap = document.getElementById('scrapCost').value;
                    const alum = document.getElementById('alumCost').value;
                    const steel = document.getElementById('steelCost').value;
                    const glass = document.getElementById('glassCost').value;
                    const rubber = document.getElementById('rubberCost').value;
                    const fullCost = parseInt(scrap)+parseInt(alum)+parseInt(steel)+parseInt(glass)+parseInt(rubber);
                    document.getElementById('fullCost').value = fullCost;
                    document.getElementById('10Cost').value = 90/100*parseInt(fullCost);
                    document.getElementById('15Cost').value = 85/100*parseInt(fullCost);
                    document.getElementById('20Cost').value = 80/100*parseInt(fullCost);

                }
            </script>

            <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                } );
            </script>
            <script>
                $(document).ready(function() {
                    var table = $('#example2').DataTable( {
                        lengthChange: false,
                        buttons: [ 'copy', 'excel', 'pdf', 'print'],
                        order: [[0,"desc"]]
                    } );

                    table.buttons().container()
                        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
                } );
            </script>

            <script type="text/javascript">
                $(function(){
                    $(document).on('click','input[type=number]',function(){ this.select(); });
                });
            </script>

        @endsection
