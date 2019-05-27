$("#daterange1").daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});
$("#daterange2").daterangepicker({
    timePicker: true,
    timePickerIncrement: 1,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    }
});

function cb(start, end) {
    $('#daterange3 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}
cb(moment().subtract(29, 'days'), moment());

$('#daterange3').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
}, cb);

$("#rangepicker4").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });


//datetimepicker


$("#datetime1").datetimepicker().parent().css("position :relative");
$("#datetime2").datetimepicker({
    format: 'LT'
}).parent().css("position :relative");
$("#datetime3").datetimepicker({
    viewMode: 'years'
}).parent().css("position :relative");
$("#datetime4").datetimepicker({
    viewMode: 'years',
    format: 'MM/YYYY'
}).parent().css("position :relative");
$("#datetime5").datetimepicker({
    inline: true,
    sideBySide: true
});
//dtetime picker end

//clockface picker
$("#clockface1").clockface();

$("#clockface2").clockface();

$("#clockface3").clockface({
    format: 'H:mm'
}).clockface('show', '14:30');
//clockface picker end
