function weeksBetween(d1, d2) {
        return Math.round((d2 - d1) / (7 * 24 * 60 * 60 * 1000));
}
function numberOfWeeks(){
  var dateStart = new Date($("#fecha_inicio").val());
  var dateEnd = new Date($("#fecha_final").val());
  var duracion = weeksBetween(dateStart,dateEnd);
  $("#duracion").val(duracion);
}

  function deleteUser(id) {
      var txt;
      var r = confirm("Realmente desea eliminar el usuario?");
      if (r == true) {
          txt = "/users/deleteUser/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showUsers";
        
      }

  }

  function updateUser(id) {
      var txt;
      var r = confirm("Realmente desea actualizar el Usuario?");
      if (r == true) {
          txt = "/users/modifyUser/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showUsers";


      }

  }
