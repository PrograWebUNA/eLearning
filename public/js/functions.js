function weeksBetween(d1, d2) {
        return Math.round((d2 - d1) / (7 * 24 * 60 * 60 * 1000));
}
function numberOfWeeks(){
  var dateStart = new Date($("#fecha_inicio").val());
  var dateEnd = new Date($("#fecha_final").val());
  var duracion = weeksBetween(dateStart,dateEnd);
  $("#duracion").val(duracion);
}
