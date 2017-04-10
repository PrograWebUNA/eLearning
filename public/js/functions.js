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

//-------------------------------------------------------------------------------------

  function deleteResource(id) {

      var n = noty({
                  text        : '¿Realmente desea eliminar el Recurso?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();

                          deleteResourceSuccess(id);

                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: 'No se puedo eliminar, intente más tarde :( !', type: 'error'});
                      }
                      }
                  ]
              });


  }

  function deleteResourceSuccess(id){
  var txt = "/resource/delete/"+id;

  $.ajax({
      type: 'GET',
      url: txt,
      success: function(data) {

        $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
        alert(data);
        setTimeout(refrescarPagina,3000);

      },
      error: function(data) {
          alert("error");
      }
  });
  }

//-------------------------------------------------------------------------------------






  function deleteCourse(id) {

      var n = noty({
                  text        : '¿Realmente desea eliminar el Curso?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();

                          deleteCourseSuccess(id);

                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: 'No se puedo eliminar, intente más tarde :( !', type: 'error'});
                      }
                      }
                  ]
              });


  }

function deleteCourseSuccess(id){
  var txt = "/courses/deleteCourse/"+id;

  $.ajax({
      type: 'GET',
      url: txt,
      success: function(data) {

        $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
        alert(data);
        setTimeout(refrescarPagina,3000);

      },
      error: function(data) {
          alert("error");
      }
  });
}

function refrescarPagina(){
  location.reload();
}

  function updateCourse(id) {

      var n = noty({
                  text        : '¿Realmente desea actualizar el Curso?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':) !', type: 'success'});
                          var txt = "/courses/modifyCourse/"+id;
                          setTimeout(refrescarPagina,3000);
                          window.location.replace(txt);
                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':( !', type: 'error'});
                      }
                      }
                  ]
              });





  }


  function updateResource(id,idUsuario) {

      var n = noty({
                  text        : '¿Realmente desea actualizar el Recurso?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':) !', type: 'success'});
                          var txt = "/resource/update/"+id+"/"+idUsuario;
                          setTimeout(refrescarPagina,3000);
                          window.location.replace(txt);
                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':( !', type: 'error'});
                      }
                      }
                  ]
              });





  }



  function deleteMatricula(id) {

      var n = noty({
                  text        : '¿Realmente desea eliminar la Matricula?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();

                          deleteMatriculaSuccess(id);

                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: 'No se puedo eliminar, intente más tarde :( !', type: 'error'});
                      }
                      }
                  ]
              });


  }

  function deleteMatriculaSuccess(id){
  var txt = "/enroll/deleteMatricula/"+id;

  $.ajax({
      type: 'GET',
      url: txt,
      success: function(data) {

        $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
        alert(data);
        setTimeout(refrescarPagina,3000);

      },
      error: function(data) {
          alert("error");
      }
  });
  }

  function refrescarPagina(){
  location.reload();
  }







  /*AMONTERO*/


  function updateMatricula(id) {

      var n = noty({
                  text        : '¿Realmente desea actualizar la matricula?',
                  type        : 'alert',
                  dismissQueue: true,
                  layout      : 'center',
                  theme       : 'relax',
                  buttons     : [
                      {addClass: 'btn btn-primary', text: 'Si', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':) !', type: 'success'});
                          var txt = "/enroll/editMatricula/"+id;
                           setTimeout(refrescarPagina,3000);
                          window.location.replace(txt);
                      }
                      },
                      {addClass: 'btn btn-danger', text: 'No', onClick: function ($noty) {
                          $noty.close();
                          noty({dismissQueue: true, force: true, layout: 'center', theme: 'defaultTheme', text: ':( !', type: 'error'});
                      }
                      }
                  ]
              });

  }






  /*Fin AMONTERO*/


  /*Storage data using ajax*/
  $(document).ready(function() {
    $( "#resourceForm" ).submit(function( e ) {

       var data = $("#resourceForm").serialize();
       e.preventDefault();
          $.ajax({
              type: 'POST',
              url: '/resource/store',
              data: data,
              success: function(data) {
                $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});

                alert(data);
               console.log(data);
               setTimeout(refrescarPagina,3000);

              },
              error: function(data) {
                  alert("error");
                  setTimeout(refrescarPagina,3000);
              }
          });
          return false;
      });


        $( "#updateCourseForm" ).submit(function( e ) {

           var data = $("#updateCourseForm").serialize();
           e.preventDefault();
              $.ajax({
                      type: 'POST',
                      url: '/courses/modifyCourse/courses/updateCourse',
                      data: data,
                      success: function(data) {
                      //window.location = "/";
                      $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                      alert(data);
                      console.log(data);
                      setTimeout(refrescarPagina,3000);

                  },
                  error: function(data) {
                      alert("error");
                      setTimeout(refrescarPagina,3000);
                  }
              });
              return false;
          });

          $( "#updateMatriculaForm" ).submit(function( e ) {

             var data = $("#updateMatriculaForm").serialize();
             e.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'enroll/updateMatricula',
                        data: data,
                        success: function(data) {
                      //  window.location = "/";
                        $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                        alert(data);
                        console.log(data);
                        setTimeout(refrescarPagina,3000);

                    },
                    error: function(data) {
                        alert("error");
                        setTimeout(refrescarPagina,3000);
                    }
                });
                return false;
            });


                  $( "#saveCourseForm" ).submit(function( e ) {

                     var data = $("#saveCourseForm").serialize();
                     e.preventDefault();
                        $.ajax({
                                type: 'GET',
                                url: '/storeCourse',
                                data: data,
                                success: function(data) {
                              //  window.location.href = "/";
                                $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                                alert(data);
                                console.log(data);
                                setTimeout(refrescarPagina,3000);

                            },
                            error: function(data) {
                                alert("error");
                                setTimeout(refrescarPagina,3000);
                            }
                        });
                        return false;
                    });

                    $( "#saveMatriculaForm" ).submit(function( e ) {

                       var data = $("#saveMatriculaForm").serialize();
                       e.preventDefault();
                          $.ajax({
                                  type: 'POST',
                                  url: '/storeMatricula',
                                  data: data,
                                  success: function(data) {
                                  //window.location.href = "/";
                                  $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                                  alert(data);
                                  console.log(data);
                                  setTimeout(refrescarPagina,3000);

                              },
                              error: function(data) {
                                  alert("error");
                                  setTimeout(refrescarPagina,3000);
                              }
                          });
                          return false;
                      });

                      $( "#saveRol" ).submit(function( e ) {

                         var data = $("#saveRol").serialize();
                         e.preventDefault();
                            $.ajax({
                                    type: 'POST',
                                    url: '/role/store',
                                    data: data,
                                    success: function(data) {
                                    //window.location.href = "/";
                                    $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                                    alert(data);
                                    console.log(data);
                                    setTimeout(refrescarPagina,3000);

                                },
                                error: function(data) {
                                  $.noty.consumeAlert({layout: 'center', type: 'error', dismissQueue: true});
                                  alert("Error al asignar rol");
                                    setTimeout(refrescarPagina,3000);
                                }
                            });
                            return false;
                        });
                        $( "#updateResource" ).submit(function( e ) {

                           var data = $("#updateResource").serialize();
                           e.preventDefault();
                              $.ajax({
                                      type: 'POST',
                                      url: '/resource/update',
                                      data: data,
                                      success: function(data) {
                                      //window.location.href = "/";
                                      $.noty.consumeAlert({layout: 'center', type: 'success', dismissQueue: true});
                                      alert(data);
                                      console.log(data);
                                      setTimeout(refrescarPagina,3000);

                                  },
                                  error: function(data) {
                                    $.noty.consumeAlert({layout: 'center', type: 'error', dismissQueue: true});
                                    alert("Error al asignar rol");
                                      setTimeout(refrescarPagina,3000);
                                  }
                              });
                              return false;
                          });

  });
