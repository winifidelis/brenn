<?php
/*
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
*/
?>
@if(Session::has('toastSuccess'))
    toastr.success('{{Session::get('toastSuccess')}}')
@endif
@if(Session::has('toastInfo'))
    toastr.info('{{Session::get('toastInfo')}}')
@endif
@if(Session::has('toastErro'))
    toastr.error('{{Session::get('toastErro')}}')
@endif
@if(Session::has('toastWarning'))
    toastr.warning('{{Session::get('toastWarning')}}')
@endif


@if(Session::has('createCliente'))
    toastr.success('{{Session::get('createCliente')}}')
@endif
@if(Session::has('updateCliente'))
    toastr.success('{{Session::get('updateCliente')}}')
@endif
@if(Session::has('deleteCliente'))
    toastr.success('{{Session::get('deleteCliente')}}')
@endif