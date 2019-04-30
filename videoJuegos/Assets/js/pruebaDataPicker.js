$('#desde').datepicker({
    minDate:0,
    beforeShowDay: function () {
        $(this).datepicker('option','maxDate',$('#hasta').val());
    }
});
$('#hasta').datepicker({
    defaultDate:'+1w',
    beforeShowDay:function () {
        $(this).datepicker('option','minDate',$('#desde').val());
        if ($('#desde').val() === '') $(this).datepicker('option', 'minDate', 0);
    }
});